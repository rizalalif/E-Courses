<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Soal;
use App\Models\SoalDetail;
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
        try {
            $request->validate([
                'input.*name' => 'required',
            ]);

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

                SoalDetail::create($detailSoal); // Simpan ke database'
            }
            $soal = Soal::all();
            $paket = Paket::select('id', 'name')->get();
            return view('admin.soal.index', compact('soal', "paket"));
        } catch (\Exception $e) {
            return redirect()->route('soal.create')->with('error', 'Terjadi kesalahan saat membuat soal');
        }
    }
    public function destroy(string $id)
    {
        try {
            $soal = Soal::find($id);
            $soal->delete();
            return redirect()->route('soal.index')->with('success', 'Soal berhasil di hapus');
        } catch (\Exception $e) {
            return redirect()->route('soal.index')->with('error', 'Terjadi kesalahan saat menghapus soal');
        }
    }

    public function update(Request $request, string $idSoal)
    {
        try {
            $request->validate([
                'input.*name' => 'required',
            ]);

            $soal = Soal::findOrFail($idSoal);
            $soal->update([
                'name' => $request->nama,
                'waktu_pengerjaan' => $request->waktu,
                'jumlah_soal' => count($request->input),
                'status' => 'finish',
                'description' => $request->description
            ]);

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

                $id = isset($value['id']) ? $value['id'] : null;

                SoalDetail::updateOrCreate(['id' => $id], $detailSoal); // Simpan ke database'
            }
            return redirect()->back()->with('success', 'Item berhasil di ubah.');
        } catch (\Exception $e) {
            return redirect()->route('soal.index')->with('error', 'Terjadi kesalahan saat mengubah soal');
        }
    }

    public function edit(string $id)
    {
        $soal = Soal::with('detailSoals')->findOrFail($id);
        return view('admin.soal.edit', compact('soal'));
    }
}
