<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use MessageBird\Client;
use MessageBird\Exceptions\AuthenticateException;
use MessageBird\Exceptions\BalanceException;
use MessageBird\Exceptions\RequestException;
use App\Models\notification;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount('notifications')->get();
        $totalUnreadCount = Notification::whereNull('read_at')
        ->count();
        $notifications = \App\Models\Notification::orderByDesc('created_at')->get();
        return view('userList', compact('users', 'totalUnreadCount','notifications'));
    }


    public function update(Request $request,$user)
{
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'on_screen_notifications' => 'nullable|boolean',
    ]);
   
    $userObject = User::find($user);
    if ($userObject) {
        $userObject->name = $request->input('name');
        $userObject->email = $request->input('email');
        $userObject->phone_number = $request->input('phone');
        $userObject->notification_switch = $request->input('on_screen_notifications');
        
        $userObject->save();
        
        return response()->json(['message' => 'User details updated successfully']);
    } else {
        return response()->json(['message' => 'User not found'], 404);
    }
    return response()->json(['message' => 'User details updated successfully']);
}
}
