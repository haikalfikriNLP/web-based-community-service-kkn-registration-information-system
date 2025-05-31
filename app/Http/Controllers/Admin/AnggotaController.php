<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function show()
    {
        $list_anggota = \App\Models\Anggota::all();
        return view('admin.anggota.show', compact('list_anggota'));
    }

    public function formTambah()
    {
        $form = [
            'title' => 'Tambah Anggota',
            'method' => 'POST',
            'action' => '/admin/anggota/simpan',
            'data' => null,
        ];
        return view('admin.anggota.form', compact('form'));
    }

    public function prosesSimpan(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'kelas' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
        ]);

        $requestAll = $request->only('nis', 'kelas', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'no_telp');

        \App\Models\Anggota::create($requestAll);

        return redirect('admin/anggota')->with(['type' => 'success', 'message' => 'berhasil menambah data!']);
    }

    public function formUbah($id)
    {
        $form = [
            'title' => 'Ubah Anggota',
            'method' => 'PUT',
            'action' => '/admin/anggota/' . $id . '/update',
            'data' => \App\Models\Anggota::findOrFail($id),
        ];
        return view('admin.anggota.form', compact('form'));
    }

    public function prosesUpdate(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'kelas' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
        ]);

        $requestAll = $request->only('nis', 'kelas', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'no_telp');

        \App\Models\Anggota::findOrFail($id)->update($requestAll);

        return redirect('admin/anggota')->with(['type' => 'success', 'message' => 'berhasil mengubah data!']);
    }

    public function prosesHapus(Request $request)
    {
        \App\Models\Anggota::findOrFail($request->id)->delete();

        return back()->with(['type' => 'success', 'message' => 'berhasil menghapus data!']);
    }

    public function cetakKartuAnggota ($id){
        $anggota = \App\Models\Anggota::findOrFail($id);
        return view('admin.anggota.cetak.kartu_anggota', compact('anggota'));
    }
}