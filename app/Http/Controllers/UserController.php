<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return back()->with('message', 'Image uploaded.');
        }

        return back()->with('error', 'Image not uploaded.');
    }
}
