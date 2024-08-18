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
use Exception;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;
use function PHPUnit\Framework\throwException;

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
                "day_active" => "required",
                "materi" => "required",
                "soal" => "required",
                "thumbnail" => "required|image|mimes:jpeg,png,jpg|max:2048"
            ]);

            $image = $request->file('thumbnail');

            // dd($image->);
            // $image->storeAs('assets/img/', $image->getClientOriginalName());
            $image->move(public_path('assets/img'), $image->getClientOriginalName());
            // $start = Carbon::parse($request->start);
            // $end = Carbon::parse($request->end);

            // $diff = $start->diffInDays($end);

            $paket =  Paket::create([
                "name" => $request->name,
                "kategori_id" => $request->kategori,
                "description" => $request->description,
                "price" => (float) $request->price,
                "day_active_paket" => (int) $request->day_active,
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
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }


        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $id = $paket->id;

        // $materi = PaketDetail::where("paket_id", $paket->id)->where('paketable_type', Materi::class)->get();
        // $soal = PaketDetail::where("paket_id", $paket->id)->where('paketable_type', Soal::class)->get();

        $paket = Paket::with(['paket_detail' => function ($query) use ($id) {
            $query->where('paket_id', $id);
        }, 'paket_detail.paketable'])->findOrFail($id);

        return view('admin.paket.detail-paket', ['paket' => $paket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        $id = $paket->id;
        // dd($paket->category);
        $materi = Materi::all();
        $soal = Soal::all();
        $categories = KategoriPaket::all();
        $paketData = $paket::with(['paket_detail' => function ($query) use ($id) {
            $query->where('paket_id', $id);
        }, 'paket_detail.paketable'])->findOrFail($id);
        // $paketData = $paket->paket_detail;
        // $paketData = Materi::with('paket')
        $paketData->paket_detail = $paketData->paket_detail->sortBy(function ($detail) {
            return $detail->created_at;
        });

        return view('admin.paket.edit-paket', ['categories' => $categories, 'paketData' => $paketData, 'materi' => $materi, 'soal' => $soal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // if ($request->file('thumbnail')) {
        //     # code...
        // }
        try {
            //code...

            $thumbnail = $request->file('thumbnail');

            if ($thumbnail != null) {
                $thumbnail->move(public_path('assets/img'), $thumbnail->getClientOriginalName());
            }

            Paket::where('id', $id)->update([
                "name" => $request->name,
                "thumbnail" => $thumbnail != null ? $thumbnail->getClientOriginalName() : $request->hidThumbnail,
                "kategori_id" => $request->category,
                "description" => $request->description,
                "status" => $request->status,
                "day_active_paket" => (int) $request->active,
                "paket_type" => $request->tipe,
                "price" => (float) $request->price,
                "discount" => (float) $request->discount,
            ]);
            // try {
            $paketDetail =  [];
            $materis = $request->materi;
            $soals = $request->soal;
            $detailIdMateri = $request->detailMateri;
            $detailIdSoal = $request->detailSoal;
            $index = 0;
            foreach ($materis as $materi) {
                array_push($paketDetail, [
                    "id" => $detailIdMateri[$index++] ?? Str::uuid()->toString(),
                    "paket_id" => $id,
                    "paketable_id" => $materi,
                    "paketable_type" => Materi::class,
                ]);
            }
            $index = 0;
            foreach ($soals as $soal) {
                array_push($paketDetail, [
                    "id" => $detailIdSoal[$index++] ?? Str::uuid()->toString(),
                    "paket_id" => $id,
                    "paketable_id" => $soal,
                    "paketable_type" => Soal::class,
                ]);
            }

            $detail = PaketDetail::upsert(
                $paketDetail,
                ['id'],
                ['paketable_id'],

            );
            return redirect()->back()->with('success', 'Berhasil memperbarui data paket');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        try {
            Storage::delete(public_path('assets/img' . $paket->thumbnail));
            $paket->delete();

            return redirect()->route('paket.index')->with('success', 'Berhasil menghapus paket ' . $paket->name);
        } catch (\Throwable $th) {
            return redirect()->route('paket.index')->with('error', 'Gagal menghapus paket ' . $paket->name);
        }
    }

    public function deleteMaterial($id)
    {
        $detail = PaketDetail::findOrFail($id);
        $tabel = $detail->paketable_type == Materi::class ? 'materi' : 'soal';
        try {
            $detail->delete();
            return redirect()->back()->with("success", "Berhasil menghapus " . "$tabel " . $detail->paketable->name);
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Berhasil menghapus " . "$tabel " . $detail->paketable->name);
        }
    }

    public function addCategory()
    {
        try {
            request()->validate([
                'category' => 'required'
            ]);
            KategoriPaket::create(['name' => request()->category]);
            return redirect()->route('paket.index')->with('success', 'Berhasil menambahkan kategori!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan kategori!')->withInput();
        }
    }
}
