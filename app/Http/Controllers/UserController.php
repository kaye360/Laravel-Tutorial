<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Create form
    public function create() {
        return view('users/register');
    }

    // Store new User
    public function store(Request $request) {
        $post_data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $post_data['password'] = bcrypt( $post_data['password'] );

        $user = User::create( $post_data );

        auth()->login( $user );

        return redirect('/')->with('message', 'User Signed Up successfully');
    }

    // Log out User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }   

    // Show log In user form
    public function login() {
        return view('users/login');
    }   

    // Login/Authenticate use
    public function auth(Request $request) {
        $post_data = $request->validate([
            'email' => ['required'], 
            'password' => ['required']
        ]);

        if( auth()->attempt($post_data) ) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
