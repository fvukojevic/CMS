<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return view('layouts.profile');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.editProfile', compact('user'));
    }


    public function update(Request $request)
    {

        $user = Auth::user();

        $this->validate(request(),[

            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if( $request->has('password') && $request->has('password-repeat')){

            $pass = request('password');
            $passrepeat = request('password-repeat');

            if($pass == $passrepeat){
                $user->password = bcrypt($pass);
                Session::flash('flash_messagee', 'Uspješna izmjena lozinke!');
            }

        }

        if( $request->hasFile('profile_pic') ) {

            $profile_pic     = $request->file('profile_pic');
            $filename           = time() . '.' . $profile_pic ->getClientOriginalExtension();

            Image::make($profile_pic )->resize(200, 200)->save( public_path('/uploads/profile/' . $filename ) );

            $user->profile_pic = $filename;
        }

        $user->name = request('name');

        $user->save();

        Session::flash('flash_message', 'Profil uspješno uređen!');
        return back();
    }
}
