<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:profile', ['only' => ['index']]);
         $this->middleware('permission:generalInfo', ['only' => ['store']]);
         $this->middleware('permission:changeImage', ['only' => ['store']]);
         $this->middleware('permission:changePassword', ['only' => ['store']]);
    }

    public function index()
    {
         return view('admin.auth.profile.account'); 
    }


    public function store(Request $request)
    {
        if (request('a') == 'general-info')
        {
            $rules = 
            [
                'name'   => 'required|string',
            ];
            $names = 
            [
                'name'   => 'Name',
            ];


            $data = $this->validate(request(),$rules,[],$names);
            Session::flash('success','Your Information Changed');
        }

        if(request('a') == 'change-password')
        {
            $user = auth()->user();

            $rules = 
            [
                'old_password'              => 'required', 
                'password'                  => 'required|min:8|confirmed',
				'password_confirmation'     => 'required',
            ];

            $data = $this->validate(request(),$rules);

            if (Hash::check(request('old_password'), $user->password)) { 

                $user->update([
                    'password' => Hash::make(request('password'))
                ]);
                
                 Session::flash('success','Password Changed');
                } else {
                 Session::flash('success','Password Does not Match');
             }
        }

        if(request('a') == 'change-image')
        {
            $user = auth()->user();
            $rules = 
            [
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ];

            $names = 
            [
                'photo' => 'Photo'
            ];

            
            $data = $this->validate(request(),$rules,[],$names);

            if($user->photo != null)
            {
                File::delete($user->photo); // delete previous image from folder   
            }

            $data['photo'] = storeImage($request ,'photo' , 'storage/app/admins_photos/', $user->id, 'users');
            
            Session::flash('success','Image has been uploaded');
        }
        
        Auth::user()->update($data);
        return back();
    }

}
