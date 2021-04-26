<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengalamanKerja;
use Illuminate\Support\Facades\DB;


class PengalamanKerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Pengalaman Kerja',
            'subtitle' => 'Halaman Manajemen Pengalaman Kerja',
            'pengalaman_kerja' => PengalamanKerja::orderBy('id', 'desc')->get(),
        ];
        return view('backend.pengalaman_kerja', compact('data'));
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Pengalaman Kerja',
            'subtitle' => 'Halaman Tambah Pengalaman Kerja',
    
        ];
        return view('backend.pengalaman_kerja_create', compact('data'));
    }
    public function store(Request $request)
    {
        PengalamanKerja::insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
        ]);

        return redirect()->route('pengalaman_kerja.index')->with('success', 'Data Pengalaman Kerja Berhasil di Simpan!');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pengalaman Kerja',
            'subtitle' => 'Halaman Edit Pengalaman Kerja',
            'pengalaman_kerja' => PengalamanKerja::where('id', $id)->first(),
        ];
        return view('backend.pengalaman_kerja_edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        PengalamanKerja::where('id', $id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
        ]);
        return redirect()->route('pengalaman_kerja.index')->with('success', 'Data Pengalaman Kerja Berhasil di Update!');
    }
    public function destroy($id)
    {
        PengalamanKerja::where('id', $id)->delete();
        return redirect()->route('pengalaman_kerja.index')->with('success', 'Data Pengalaman Kerja Berhasil di Hapus!');
    }
}
