<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function createUser(){
        $users = DB::table('users')->get();
        return view('signupPage', compact('users'));
    }

    public function insertUser(Request $request){ 
        
        DB::table('users')->insert([
            'username' => $request->inputUsername,
            'email' => $request->inputEmail,
            'password' => $request->inputPassword,
            'phone_number' => $request->inputPhoneNumber,
            'address' => $request->inputAddress,
            'type' => 'member'
        ]);
        return redirect('/sign-in');

    }

    public function editUserProfile(){
        // GET USERs FROM DB
        $userId = Auth::id();

        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();
        return view('editProfilePage', compact('currUser'));
    }

    public function updateUserProfile(Request $request){
        // UPDATE USERs TO DB

        $userId = Auth::id();

        $request->validate([
            'inputUsername' => 'required',
            'inputEmail' => 'required|email',
            'inputPhoneNumber' => 'required|min:10|max:13',
            'inputAddress' => 'required|min:5'
        ]);
    
        User::where('id','=', $userId)
        ->update(
            [
            'username' => $request->input('inputUsername'),
            'email' => $request->input('inputEmail'),
            'phone_number' => $request->input('inputPhoneNumber'),
            'address' => $request->input('inputAddress')
            ]
        );
        
        return redirect('/m-profile');
    }


    //MEMBER
    public function editMemberPassword(){ 
        // GET USERs password FROM DB
        $userId = Auth::id();

        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();

        return view('editMemberPasswordPage', compact('currUser'));
    }

    public function updateMemberPassword(Request $request){
        // UPDATE USERs password TO DB
        $userId = Auth::id();
        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();
    
        $oldPassword = $request->input('password');

        if (!Hash::check($request->input('password'), $currUser->password)){
            return redirect()->back()->withErrors('Invalid Password!');
        } elseif(Hash::check($request->input('password'), $currUser->password)) {
            $request->validate([
                'password' => 'required',
                'inputNewPassword' => 'required|min:5|max:20'
            ]);
            
            User::where('id','=', $userId)
            ->update(
                [
                'password' => Hash::make($request->input('inputNewPassword'))
                ]
            );

            return redirect('/m-profile');
        }
    }

    //ADMIN

    public function editAdminPassword(){
        // GET USERs password FROM DB
        $userId = Auth::id();

        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();

        return view('editAdminPasswordPage', compact('currUser'));
    }

    public function updateAdminPassword(Request $request){
        // UPDATE USERs password TO DB
        $userId = Auth::id();
        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();
    
        $oldPassword = $request->input('password');

        if (!Hash::check($request->input('password'), $currUser->password)){
            return redirect()->back()->withErrors('Invalid Password!');
        } elseif(Hash::check($request->input('password'), $currUser->password)) {
            $request->validate([
                'password' => 'required',
                'inputNewPassword' => 'required|min:5|max:20'
            ]);
            
            User::where('id','=', $userId)
            ->update(
                [
                'password' => Hash::make($request->input('inputNewPassword'))
                ]
            );

            return redirect('/a-profile');
        }
    }
    
    public function viewProfile(){
        $userId = Auth::id();

        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();
        return view('memberProfilePage', compact('currUser'));
    }

    public function viewProfile2(){
        $userId = Auth::id();

        $currUser = DB::table('users')
        ->where('id', '=', $userId)
        ->first();
        return view('adminProfilePage', compact('currUser'));
    }

}
