<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisioner;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index(){
        return view('dashboard.laporan');
    }

    public function hasilsiswa()
{
    $user = Auth::user();
    $results = Result::with('quisioner')->where('user_id', $user->id)->get();
    $topResults = Result::with('quisioner')->where('user_id', $user->id)->orderBy('total', 'desc')->take(3)->get();
    return view('dashboard.lapor.hasilsiswa', compact('results', 'topResults'));
}

public function hasiladmin()
{
    $results = Result::with('quisioner', 'user')
        ->get()
        ->groupBy('user_id')
        ->map(function ($userResults) {
            return $userResults->sortByDesc('total')->take(3);
        });

    return view('dashboard.lapor.hasiladmin', compact('results'));
}

    public function arsip(){
        return view('dashboard.lapor.arsip');
    }


}
