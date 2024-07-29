<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisioner;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class KuisController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $totals = $request->input('totals');
        $quisionerIds = $request->input('quisioner_id');
        $resultsData = [];

        foreach ($quisionerIds as $quisionerId) {
            $resultsData[] = [
                'user_id' => $user->id, // Add user ID here
                'quisioner_id' => $quisionerId,
                'cita_cita' => $request->input("cita_cita.$quisionerId"),
                'pendidikan' => $request->input("pendidikan.$quisionerId"),
                'hobi' => $request->input("hobi.$quisionerId"),
                'keahlian' => $request->input("keahlian.$quisionerId"),
                'lingkungan' => $request->input("lingkungan.$quisionerId"),
                'total' => $totals[$quisionerId],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Result::insert($resultsData);

        return redirect()->route('dashboard.kuis.results')->with('success', 'Hasil kuisioner berhasil disimpan');
    }

    public function results()
{
    $user = Auth::user();
    // Filter results berdasarkan user_id
    $results = Result::with('quisioner')->where('user_id', $user->id)->get();
    // Filter topResults berdasarkan user_id dan urutkan berdasarkan total nilai tertinggi
    $topResults = Result::with('quisioner')->where('user_id', $user->id)->orderBy('total', 'desc')->take(3)->get();
    return view('dashboard.kuis.results', compact('results', 'topResults'));
}

//     public function userResults()
// {
//     $user = Auth::user();
//     $results = Result::with('quisioner')->orderBy('total', 'desc')->take(3)->get();
//     return view('dashboard.lapor.history', compact('results'));
// }

    public function show($id)
    {
        $result = Result::with('quisioner')->findOrFail($id);
        $topResults = Result::with('quisioner')->orderBy('total', 'desc')->take(3)->get();
        return view('dashboard.kuis.detail', compact('result', 'topResults'));
    }
}
    // public function store(Request $request)
    // {
    //     $totals = $request->input('totals');

        // foreach ($totals as $quisioner_id => $total) {
        //     Result::create([
    //             'quisioner_id' => $quisioner_id,
                // 'total' => $total,
    //         ]);
    //     }

    //     return redirect()->route('dashboard.kuis.results')->with('success', 'Hasil kuisioner berhasil disimpan');
    // }

    // public function results()
    // {
    //     $results = Result::with('quisioner')->get();
    //     return view('dashboard.kuis.results', compact('results'));
    // }

    // public function show($id)
    // {
    //     $result = Result::with('quisioner')->findOrFail($id);
    //     return view('dashboard.kuis.detail', compact('result'));
    // }

