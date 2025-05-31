<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('home');
    }

    public function pencarianBuku(Request $request)
    {
        $request_kategori = $request->kategori;
        if ($request_kategori) {
            $kategori_buku_id = \App\Models\KategoriBuku::where('nama_kategori', $request_kategori)->first()->id ?? 0;
            $list_buku = \App\Models\Buku::where('kategori_buku_id', $kategori_buku_id)->get();
        } else {
            $list_buku = \App\Models\Buku::all();
        }
        $list_kategori_buku = \App\Models\KategoriBuku::all();
        return view('pencarian_buku', compact('list_buku', 'list_kategori_buku', 'request_kategori'));
    }
}
