<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\EditProfileRequest;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('name', 'email','location', 'about_me', 'profile_picture'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        if($request->hasFile('profile_picture')){
            $filename = $request->profile_picture->getClientOriginalName();
            $request->profile_picture->storeAs('profile_pictures',$filename,'public');
            Auth()->user()->update(['profile_picture'=>$filename]);
        }

        return redirect()->route('profile')->with('message', 'Profile saved');
    }
}