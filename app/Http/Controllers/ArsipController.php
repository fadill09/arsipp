<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function arsip(Request $request)
    {
        if ($request) {
            $data = Arsip::where('judul', 'like', '%' . Request()->cari . '%')
                ->latest()->paginate(5);
            $dataCount = count($data);
        }
        return view('arsip.index', compact('data', 'dataCount'));
    }

    public function tambah(Request $request)
    {
        // dd($request);
        try {
            $fileNameX = $request->file('file_surat')->getClientOriginalName();
            $filename = pathinfo($fileNameX, PATHINFO_FILENAME);
            $fileNameSimpan = date('YmdHis') . '_' . $fileNameX;
            $path = $request->file('file_surat')->storeAs('public/files', $fileNameSimpan);

            $data = new Arsip();
            $data->nomor_surat = $request->nomor_surat;
            $data->kategori = $request->kategori;
            $data->judul = $request->judul;
            $data->file = $fileNameSimpan;
            $data->save();
        } catch (\Throwable $th) {
            echo 'Data gagal di simpan';
        }

        return redirect()->route('arsip')->with('success', 'Data berhasil disimpan');
    }

    public function hapus($id)
    {
        $arsip = Arsip::find($id);
        $path = public_path('storage/files/') . $arsip->file_surat;
        if (file_exists($path)) {
            @unlink($path);
        }
        $arsip->delete();
        return redirect()->route('arsip')->with('success', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $arsip = Arsip::find($id);
        return view('arsip.detail', compact('arsip'));
    }

    public function download($id)
    {
        $arsip = Arsip::find($id);

        $headers = array(
            'Content-type: application/pdf',
        );

        return response()->download(
            public_path() . "storage/files/" . $arsip->file,
            $arsip->file,
            $headers
        );
    }

    public function about()
    {
        return view('about.index');
    }

    public function dashboard()
    {
        return view('layouts.dashboard');
    }
}
