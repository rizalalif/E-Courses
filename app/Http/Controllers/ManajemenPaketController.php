<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Soal;
use App\Models\Paket;
use App\Models\Materi;
use App\Models\PaketUser;
use App\Models\PaketDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriPaket;

use function PHPSTORM_META\map;

class ManajemenPaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        // dd($pakets->kategori_paket);
        // dd($pakets->category->name);
        return view('admin.paket.index', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materi = Materi::all();
        $soal = Soal::all();
        $kategori = KategoriPaket::all();

        // dd($soal);
        return view('admin.paket.add-paket', ['materis' => $materi, 'soals' => $soal, 'kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //code...
            $request->validate([
                "name" => "required",
                "description" => "required",
                "diskon" => "required",
                "price" => "required",
                "start" => "required",
                "end" => "required",
                "materi" => "required",
                "soal" => "required",
                "thumbnail" => "required|image|mimes:jpeg,png,jpg|max:2048"
            ]);
            $request->file();

            $image = $request->file('thumbnail');

            // dd($image->);
            $image->storeAs('public/assets/img/', $image->getClientOriginalName());
            $start = Carbon::parse($request->start);
            $end = Carbon::parse($request->end);

            $diff = $start->diffInDays($end);

            $paket =  Paket::create([
                "name" => $request->name,
                "kategori_id" => $request->kategori,
                "description" => $request->description,
                "price" => (float) $request->price,
                "day_active_paket" => (int) $diff,
                "discount" => (float) $request->diskon,
                "thumbnail" => $image->getClientOriginalName()
            ]);

            $materis = $request->input('materi');
            $soals = $request->input('soal');
            $paketDetail = [];
            foreach ($materis as $materi) {
                array_push($paketDetail, [
                    "id" => Str::uuid()->toString(),
                    "paket_id" => $paket->id,
                    "paketable_id" => $materi,
                    "paketable_type" => Materi::class,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
            }
            foreach ($soals as $soal) {
                array_push($paketDetail, [
                    "id" => Str::uuid()->toString(),
                    "paket_id" => $paket->id,
                    "paketable_id" => $soal,
                    "paketable_type" => Soal::class,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
            }

            PaketDetail::insert($paketDetail);
            return redirect()->route('paket.index')->with('success', 'Berhasil menambahkan paket!');
        } catch (\Throwable $th) {
            return redirect()->route('paket.index')->with('failed', $th->getMessage());
        }


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {

        // $datapaket = $paket;

        // $detail = $datapaket;

        $materi = PaketDetail::where("paket_id", $paket->id)->where('paketable_type', Materi::class)->get();
        $soal = PaketDetail::where("paket_id", $paket->id)->where('paketable_type', Soal::class)->get();
        // $materi = Materi::with('paket')->where('')->get();
        // $detail = $paket->paket_detail;




        // dd($bahan[1]->paketable);
        return view('admin.paket.detail-paket', ['paket' => $paket, 'materi' => $materi, 'soal' => $soal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
