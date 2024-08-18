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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function destroy(string $id)
    {
        $soal = SoalDetail::findOrFail($id);
        $soal_id = $soal->soal_id;
        try {
            $soal->delete();
            return redirect()->route('soal.edit', $soal_id)->with('success', 'Soal berhasil di hapus');
        } catch (\Exception $e) {
            return redirect()->route('soal.edit', $soal_id)->with('error', 'Soal gagal di hapus');
        }
    }
    public function show($id)
    {
        // dd($id);
        $soal = Soal::findOrFail($id);
        dd($soal);
        // return view('admin.soal.show');
    }
}
