<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $unreadCount = Notification::where('notifiable_id', Auth::id())
                          ->whereNull('read_at')
                          ->count();
        $user = Auth::user();
        $notifications = $user->notifications()->orderByDesc('created_at')->get();
        
        return view('home',compact('unreadCount','notifications','user') );
    }

    public function adminHome()
    {   
        $totalUnreadCount = Notification::whereNull('read_at')
                               ->count();
        $notifications = \App\Models\Notification::orderByDesc('created_at')->get();

        return view('adminHome',compact('totalUnreadCount','notifications'));
    }
}
