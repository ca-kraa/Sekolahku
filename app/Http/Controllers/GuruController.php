<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function guru()
    {
        $guru = Guru::orderBy('nama', 'ASC')->paginate(5);
        return view('guru.guru', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validatedData = $request->validate([
            'kode_guru' => 'required',
            'nama' => 'required',
            'mataPelajaran' => 'required',
            'nomorTelpon' => 'required',
            'alamat' => 'required'
        ]);

        $guru->kode_guru = $request->kode_guru;
        $guru->nama = $request->nama;
        $guru->mataPelajaran = $request->mataPelajaran;
        $guru->nomorTelpon = $request->nomorTelpon;
        $guru->alamat = $request->alamat;
        $guru->save();

        return redirect()->route('guru.guru')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::find($id);
        if ($guru) {
            $guru->delete();
            return redirect()->route('guru.guru')->with('success', 'Data guru berhasil dihapus.');
        }
        return redirect()->route('guru.guru')->with('error', 'Data guru tidak ditemukan.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_guru' => 'required',
            'nama' => 'required',
            'mataPelajaran' => 'required',
            'nomorTelpon' => 'required',
            'alamat' => 'required'
        ]);

        $guru = new Guru;
        $guru->kode_guru = $request->kode_guru;
        $guru->nama = $request->nama;
        $guru->mataPelajaran = $request->mataPelajaran;
        $guru->nomorTelpon = $request->nomorTelpon;
        $guru->alamat = $request->alamat;
        $guru->save();

        return redirect()->route('guru.guru')->with('success', 'Data guru berhasil disimpan.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $guru = Guru::where('nama', 'LIKE', "%$search%")
            ->orWhere('kode_guru', 'LIKE', "%$search%")
            ->orWhere('mataPelajaran', 'LIKE', "%$search%")
            ->orderBy('kode_guru', 'ASC')
            ->paginate(5);

        return view('guru.guru', compact('guru'));
    }
}
