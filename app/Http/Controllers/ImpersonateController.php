<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ImpersonateController extends Controller
{
    public function impersonate(User $user)
    {
        if (Auth::user()->isAdmin()) {
            Auth::login($user);
            session(['impersonated_user_id'=>$user->id]);
            return redirect()->route('home');
        }
       
        return redirect()->back()->with('error', 'You are not authorized to impersonate users.');
    }
}
