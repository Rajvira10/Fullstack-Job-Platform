<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register Form
    public function create()
    {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request)
    {
        //Validate Form Data
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' =>['required','email',Rule::unique('users','email')],
            'password' => ['required','confirmed', 'min:6']
        ]);
        
        $formFields['password'] = bcrypt($formFields['password']);
        
        //Create User
        $user = User::create($formFields);

        //Sign User In
        auth()->login($user);

        //Redirect to Home Page
        return redirect('/')->with('success', 'Account Created Successfully!');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged Out Successfully!');
    }

    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Logged In Successfully!');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials'
        ])->onlyInput('email');
    }
}
