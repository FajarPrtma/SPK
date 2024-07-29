<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prostu;

class ProstuController extends Controller
{
    public function index(){
        $prostus = Prostu::all();
        return view('dashboard.prostu', compact('prostus'));
    }

    public function list(){
        $prostus = Prostu::all();
        return view('dashboard.prostu.listpro', compact ('prostus'));
    }

    public function kelola(){
        return view('dashboard.prostu.kelolapro');
    }

    // public function eksplor(){
    //     $prostus = Prostu::all();
    //     return view('dashboard.prostu.eksplor', compact ('prostus'));
    // }

    public function show($id)
    {
        $prostu = Prostu::findOrFail($id);
        return view('dashboard.prostu.eksplor', compact('prostu'));
    }

    public function store(Request $request)
    {
        // Buat jurusan baru
        if ($request->hasFile('gambar')){
        $GambarPath = $request->file('gambar')->store('image', 'public');

        $prostu = Prostu::create([
            'prodi' => $request->prodi,
            'gambar' => $GambarPath,
            'deskripsi' => $request->deskripsi,
        ]);


        // Redirect atau respon sesuai kebutuhan
        return redirect()->route('dashboard.prostu.listpro')->with('success', 'Kuisioner berhasil ditambahkan');
    } else {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan. Silakan unggah gambar.');
        }
    }

    public function edit($id){
        $prostu = prostu::find($id);
        return view('dashboard.prostu.editpro', compact('prostu'));
    }

    public function update(Request $request, $id){
        $prostu = prostu::find($id);
        if ($requet->hasFile('gambar')) {
            $GambarPath = $request->file('gambar')->store('image', 'public');
            $prostu->gambar = $GambarPath;
        }

        Prostu::where('id',$id)->update([
            'prodi' => $request->prodi,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('dashboard.prostu.listpro');
    }

    public function destroy($id)
    {
        $prostu = Prostu::find($id);
        $prostu->delete();
        return redirect()->route('dashboard.prostu.listpro');
    }

}
