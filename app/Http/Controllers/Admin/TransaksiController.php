<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function show()
    {
        return view('admin.transaksi.show');
    }

    public function formTambah()
    {
        $list_buku = Buku::all();
        $list_anggota = Anggota::all();
        return view('admin.transaksi.form', compact('list_buku', 'list_anggota'));
    }

    public function prosesSimpan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'buku_id' => 'required|exists:buku,id',
            'anggota_id' => 'required|exists:anggota,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kode_transaksi = 'TRX' . date('YmdHis');

        Transaksi::create([
            'kode_transaksi' => $kode_transaksi,
            'buku_id' => $request->buku_id,
            'anggota_id' => $request->anggota_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'pinjam',
        ]);

        return redirect()->route('admin.transaksi.show')->with('success', 'Transaksi berhasil disimpan.');
    }

    public function status(Request $request)
    {
        $transaksi = Transaksi::findOrFail($request->id);
        $transaksi->status = 'kembali';
        $transaksi->save();

        return redirect()->route('admin.transaksi.show')->with('success', 'Status transaksi berhasil diubah.');
    }

    public function hapus(Request $request)
    {
        $transaksi = Transaksi::findOrFail($request->id);
        $transaksi->delete();

        return redirect()->route('admin.transaksi.show')->with('success', 'Transaksi berhasil dihapus.');
    }
}
