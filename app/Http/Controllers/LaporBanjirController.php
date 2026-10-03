<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Menampilkan halaman form pelaporan
    public function form()
    {
        return view('lapor_banjir.form');
    }

    // Memproses data input dan mengirimkannya ke halaman konfirmasi
    public function proses(Request $request)
    {
        // Validasi input sederhana (opsional tapi disarankan)
        $request->validate([
            'nama_pelapor' => 'required',
            'lokasi'       => 'required',
            'tinggi_air'   => 'required|numeric',
        ]);

        $namaPelapor = $request->input('nama_pelapor');
        $lokasi      = $request->input('lokasi');
        $tinggiAir   = $request->input('tinggi_air');

        return view('lapor_banjir.konfirmasi', compact('namaPelapor', 'lokasi', 'tinggiAir'));
    }
}