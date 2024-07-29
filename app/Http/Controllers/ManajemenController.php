<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManajemenController extends Controller
{
    public function index(){
        return view('dashboard.manajemen');
    }

    public function kelolauser(){
        $users = User::with('role')->get();
        return view('dashboard.mana.kelus',compact('users'));
    }

    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        $kelass = Kelas::all();
        return view('dashboard.mana.edit', compact('user', 'roles', 'kelass'));
    }

    public function delete(){
        return view('dashboard.mana.delete');
    }

    public function tambah(){
        return view('dashboard.mana.index');
    }

    public function store(Request $request)
    {

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'kelas_id' => $request->kelas_id,
            'role_id' => $request->role_id,
        ]);

        // Redirect atau respon sesuai kebutuhan
        return redirect()->route('dashboard.mana.kelus')->with('success', 'User berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'kelas_id'=>$request->kelas_id,
            'role_id'=>$request->role_id,
        ]);
        return redirect()->route('dashboard.mana.kelus');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard.mana.kelus');
    }
}
