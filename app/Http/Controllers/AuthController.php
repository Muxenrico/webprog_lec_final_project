<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_login()
    {
        return view('signinPage');
        //Munculkan Auth Login
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $credential = $request->validate([
    
            'email' => 'required|email',
            'password' => 'required|min:5|max:20'
        
        ]);

        if (!Auth::attempt($credential, $request->input('remember'))){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        return redirect()->route('index_admin');
    }

    public function index_register(Request $request)
    {
        //
        return view('signupPage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        //
    
        $request->validate([
            'inputUsername' => 'required',
            'inputEmail' => 'required|email',
            'inputPassword' => 'required|min:5|max:20',
            'inputPhoneNumber' => 'required|min:10|max:13',
            'inputAddress' => 'required|min:5'
        ]);

        $newUser = new User();
        $newUser->username = $request->input('inputUsername');
        $newUser->email = $request->input('inputEmail');
        $newUser->password = Hash::make($request->input('inputPassword'));
        $newUser->phone_number = $request->input('inputPhoneNumber');
        $newUser->address = $request->input('inputAddress');
        $newUser->type = 'member';
        $newUser->save();

        return redirect()->route('index_welcome');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('index_login');
    }
}
