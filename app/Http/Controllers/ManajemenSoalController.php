<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Http\Request;

class ManajemenSoalController extends Controller
{
    public function index()
    {
        $soal = Soal::all();
        $paket = Paket::select('id', 'name')->get();
        return view('admin.soal.index', compact('soal', "paket"));
    }
    public function show(string $id)
    {
        $soal = Soal::with('detailSoals')->findOrFail($id);
        // dd($soal);
        return view('admin.soal.show', compact('soal'));
    }

    public function create()
    {
        return view('admin.soal.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'waktu_pengerjaan' => 'required',
            'jumlah_soal' => 'required',
            'description' => 'required',
        ]);
        $validatedData['status'] = 'draft';
        try {
            $soal = Soal::create($validatedData);
            return redirect()->route('soal.show', $soal->id)->with('success', 'Soal berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan soal');
        }
    }
    public function destroy(string $id)
    {
        $soal = Soal::find($id);
        $soal->delete();
        return redirect()->route('soal.index')->with('success', 'Soal berhasil di hapus');
    }

    public function update(Request $request, string $id)
    {
        $soal = Soal::find($id);
        dd($request->all());
        // $soal->update($request->all());
        // return redirect()->route('soal.index')->with('success', 'Soal berhasil di ubah');
    }
}
