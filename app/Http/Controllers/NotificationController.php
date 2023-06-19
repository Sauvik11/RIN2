<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
class NotificationController extends Controller
{
    public function create()
    {
        $users = User::all(); // Fetch all users from the database
        $totalUnreadCount = Notification::whereNull('read_at')
        ->count();
        $notifications = \App\Models\Notification::orderByDesc('created_at')->get();
        return view('notifications.create', compact('users','totalUnreadCount','notifications'));
    }
    public function store(Request $request)
{
    $notifiableIds=$request->input('destination');
    foreach ($notifiableIds as $notifiableId){
    $notification = new notification();
    $notification->type = $request->input('type');
    $notification->data = $request->input('text');
    $notification->expiration = $request->input('expiration');
    $notification->destination = $notifiableId;
    $notification->notifiable_type = 'App\Models\User';
    $notification->notifiable_id =$notifiableId;
    $notification->save();
    }
    $notifications = notification::all();
    $totalUnreadCount = Notification::whereNull('read_at')
    ->count();
    return view('notifications.list', compact('notifications','totalUnreadCount'));
    
}
   public function markAsRead(Request $request)
    {
    $notificationId = $request->input('notification_id');
    $isChecked = $request->input('is_checked');
    $impersonatedUserId = $request->input('impersonatedUserId');
   
    $notification = Notification::find($notificationId);
    
    if ($notification) {
        if ($isChecked=="true") {
          
        $notification->read_at = Carbon::now();
        }else{
          
            $notification->read_at = null;
        }
        $notification->save();
    }
   
    $unreadCount = Notification::where('notifiable_id', $impersonatedUserId)
                          ->whereNull('read_at')
                          ->count();
    
    return response()->json(['success' => true, 'unreadCount' => $unreadCount]);
    }

    public function listall()
{   
    
    $user = Auth::user();
    $notifications = $user->isAdmin() ? Notification::orderByDesc('created_at')->get() : $user->notifications()->orderByDesc('created_at')->get();
    if($user->isAdmin()){
    $totalUnreadCount = Notification::whereNull('read_at')
                               ->count();
    }else{$totalUnreadCount = Notification::where('notifiable_id', Auth::id())
        ->whereNull('read_at')
        ->count();}
    
    return view('notifications.list', compact('notifications','totalUnreadCount'));
}

}
