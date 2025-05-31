<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function show()
    {
        $list_admin = \App\Models\User::all();
        return view('admin.admin.show', compact('list_admin'));
    }

    public function formTambah()
    {
        $form = [
            'title' => 'Tambah Admin',
            'method' => 'POST',
            'action' => '/admin/admin/simpan',
            'data' => null,
        ];
        return view('admin.admin.form', compact('form'));
    }

    public function prosesSimpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $requestAll = $request->only('name', 'username', 'level');
        $requestAll['password'] = Hash::make($request->password);

        \App\Models\User::create($requestAll);

        return redirect('admin/admin')->with(['type' => 'success', 'message' => 'berhasil menambah data!']);
    }

    public function formUbah($id)
    {
        $form = [
            'title' => 'Ubah Admin',
            'method' => 'PUT',
            'action' => '/admin/admin/' . $id . '/update',
            'data' => \App\Models\User::findOrFail($id),
        ];
        return view('admin.admin.form', compact('form'));
    }

    public function prosesUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'level' => 'required',
        ]);

        $requestAll = $request->only('name', 'username', 'level');
        if ($request->password) {
            $requestAll['password'] = Hash::make($request->password);
        }

        \App\Models\User::findOrFail($id)->update($requestAll);

        return redirect('admin/admin')->with(['type' => 'success', 'message' => 'berhasil mengubah data!']);
    }

    public function prosesHapus(Request $request)
    {
        \App\Models\User::findOrFail($request->id)->delete();

        return back()->with(['type' => 'success', 'message' => 'berhasil menghapus data!']);
    }
}
