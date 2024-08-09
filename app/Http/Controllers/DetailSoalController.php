<?php

namespace App\Http\Controllers;

use App\Models\DetailSoal;
use App\Models\Soal;
use App\Models\SoalDetail;
use Illuminate\Http\Request;

class DetailSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'input.*name' => 'required',
        ]);
        // dd($request->all());
        $soal = [
            'name' => $request->nama,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'jumlah_soal' => $request->jumlah_soal,
            'status' => $request->status,
            'description' => $request->description
        ];

        $soal = Soal::create($soal);
        foreach ($request->input as $key => $value) {
            $detailSoal = [
                'soal_id' => $soal->id, // Asosiasi dengan tabel soal
                'soal' => $value['soal'],
                'kunci_jawaban' => $value['kunci_jawaban'],
                'jawaban_a' => $value['jawaban_a'],
                'jawaban_b' => $value['jawaban_b'],
                'jawaban_c' => $value['jawaban_c'],
                'jawaban_d' => $value['jawaban_d'],
                'jawaban_e' => $value['jawaban_e'], // Opsi jawaban E, jika ada
                'pembahasan' => $value['pembahasan'],
            ];

            SoalDetail::create($detailSoal); // Simpan ke database
        }
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoalDetail $SoalDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoalDetail $SoalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoalDetail $SoalDetail)
    {
        //
    }
    public function show($id)
    {
        // dd($id);
        $soal = Soal::findOrFail($id);
        dd($soal);
        return view('admin.soal.show');
    }
}
