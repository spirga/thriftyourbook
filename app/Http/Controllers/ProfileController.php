<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('name', 'email','location', 'about_me', 'image'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        
        return redirect()->route('profile')->with('message', 'Profile saved');
    }
}