<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::paginate();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'buku' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $siswa = new Siswa($request->all());
        $siswa->save();
        // dd($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data berhasil disimpan ');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);

   		return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
   		$request->validate([
            'kode' => 'required',
            'buku' => 'required',
            'tgl_pinjam' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa->fill($request->all());
        $siswa->save();
        //  dd($request->all());

        return back()->with('success', 'Data berhasil diperbarui');
    }

}
