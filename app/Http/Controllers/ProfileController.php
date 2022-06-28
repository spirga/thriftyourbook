<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {

        auth()->user()->update($request->only('name', 'email','location', 'about_me', 'image'));
        $rules = array(
            'name' => 'nullable|min:2|max:20',
            'password' => 'nullable',
            'about_me'=>'nullable',
            'location' => 'nullable|alpha|min:2|max:20',
            'image' => 'nullable'
        );
        $this->validate($request, $rules);

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        return redirect()->route('profile')->with('message', 'Profile saved');
    }
}