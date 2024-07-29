<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisioner;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index-admin');
    }

    // public function indexsiswa(){
    //     return view('dashboard.index-siswa');
    // }

    public function dasbor(){
        return view('dashboard.dasbor');
    }

    public function list(){
        $quisioners = Quisioner::all();
        return view('dashboard.kuis.listkuis', compact('quisioners'));
    }

    public function kelola(){
        return view('dashboard.kuis.kelolakuis');
    }

    public function kuis(){
        $quisioners = Quisioner::all();
        return view('dashboard.kuis.kuis', compact('quisioners'));
    }

    public function store(Request $request)
    {
        // Buat jurusan baru
        $quisioner = Quisioner::create([
            'jurusan' => $request->jurusan,
            'cita' => $request->cita,
            'pendidikan' => $request->pendidikan,
            'hobi' => $request->hobi,
            'keahlian' => $request->keahlian,
            'lingkungan' => $request->lingkungan,
        ]);

        // Redirect atau respon sesuai kebutuhan
        return redirect()->route('dashboard.kuis.listkuis')->with('success', 'Kuisioner berhasil ditambahkan');
    }

    public function edit($id){
        $quisioner = Quisioner::find($id);
        return view('dashboard.kuis.editkuis', compact('quisioner'));
    }

    public function update(Request $request, $id){
        Quisioner::where('id',$id)->update([
            'jurusan' => $request->jurusan,
            'cita' => $request->cita,
            'pendidikan' => $request->pendidikan,
            'hobi' => $request->hobi,
            'keahlian' => $request->keahlian,
            'lingkungan' => $request->lingkungan,
        ]);
        return redirect()->route('dashboard.kuis.listkuis');
    }

    public function destroy($id)
    {
        $quisioner = Quisioner::find($id);
        $quisioner->delete();
        return redirect()->route('dashboard.kuis.listkuis');
    }
}
