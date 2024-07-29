<?php

// app/Http/Controllers/UserProfileController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile');
    }

    public function edit()
    {
        $kelass = Kelas::all();
        return view('dashboard.profile.edit', compact('kelass'), ['user' => Auth::user()]);
    }

    public function pass(){
        return view("dashboard.profile.changepass");
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            // 'old_password' => 'nullable|string',
            // 'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // if ($request->filled('old_password')) {
        //     if (Hash::check($request->old_password, $user->password)) {
        //         if ($request->filled('password')) {
        //             $user->password = Hash::make($request->password);
        //         }
        //     } else {
        //         return redirect()->back()->with('error', 'Current password is incorrect.');
        //     }
        // }

        $user->save();

        return redirect()->route('dashboard.profile')->with('success', 'Profile updated successfully');
    }

    public function change(Request $request){
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|confirmed',
        ]);

        $user = Auth::user();

        // Validasi password lama
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('dashboard.profile.changepass')->with('hola', 'Current password is incorrect.');
        }

        // Update password baru
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
        return redirect()->route('dashboard.profile')->with('success', 'Password updated successfully.');
    }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Role;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

// class UserProfileController extends Controller
// {
    // public function index(){
    //     return view('dashboard.profile');
    // }

    // public function edit()
    // {
    //     return view('dashboard.profile', ['user' => Auth::user()]);
    // }

//     public function update(Request $request)
//     {
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
//             'password' => 'nullable|string|min:8|confirmed',
//         ]);

//         $user = Auth::user();
//         $user->name = $request->name;
//         $user->email = $request->email;

//         if ($request->filled('password')) {
//             $user->password = Hash::make($request->password);
//         }

//         $user->save();

//         return redirect()->route('dashboard.profile')->with('success', 'Profile updated successfully.');
//     }
// }
