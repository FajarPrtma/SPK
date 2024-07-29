<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna
        $users = User::with('role')->get();
        // dd($users);
        // Kirim data ke view
        return view('dashboard.mana.kelus', compact('users'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'kelas_id' => 'required|exists:kelas,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'kelas_id' => $request->kelas_id,
            'role_id' => $request->role_id,
        ]);

        // Redirect atau respon sesuai kebutuhan
        return redirect()->route('dashboard.manajemen')->with('success', 'User berhasil ditambahkan');
    }
};

    // public function edit($id){
    //     $room = Room::where('id',$id)->first();
    //     return view('dashboard.mana.kelus',compact('room'));
    // }
    // public function update(Request $request, $id){
    //     User::where('id',$id)->update([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'password'=>$request->password,
    //         'tanggal'=>$request->created_at,
    //     ]);
    //     return redirect()->route('dashboard.mana.kelus');
    // }
//     public function destroy($id)
//     {
//         $users = User::find($id);
//         $users->delete();
//         return redirect()->route('dashboard.mana.kelus');
//     }
// }
