<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // SIGNUP METHODS
    public function showSignupForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required|string|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
        ]);

        return redirect('signin')->with('success', 'Registration successful! Please log in.');
    }

    // LOGIN METHODS
    public function showLoginForm() 
    {
        return view('signin');
    }

    public function login(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput($request->except('password'));
        }

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'Login succesful');
        }

        return redirect()->back()
        ->withErrors(['email' => 'The provided credentials do not match our records.'])
        ->withInput($request->except('password'));
    }

    // LOGOUT METHOD 
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin')->with('success', 'You have been logged out successfully!');
    }

    // PROFILE METHOD
    public function showProfile($username)
    {
        $user = User::where('username', $username)->first();

        if (!$user) {
            abort(404, 'User not found');
        }

        $isOwnProfile = Auth::check() && Auth::user()->user_id == $user->user_id;

        return view('profile', [
            'user' => $user,
            'isOwnProfile' => $isOwnProfile
        ]);
    }

    public function updateProfile(Request $request) 
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->user_id . ',user_id',
            'biography' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->biography = $request->biography;

        if($request->hasFile('image')) {
            if ($user->image && file_exists(public_path('storage/' . $user->image))) {
                unlink(public_path('storage/' . $user->image));
            }

            $imagePath = $request->file('image')->store('profile-images', 'public');
            $user->image = $imagePath;
        }

        $user->save();
        return redirect()->route('profile.show', $user->username)->with('success', 'Profile updated successfully!');
    }
}
