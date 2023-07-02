<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        if ($keyword) {
            $siswa = Siswa::where('nama', 'like', '%' . $keyword . '%')
                ->orWhere('nisn', 'like', '%' . $keyword . '%')
                ->paginate(5);
        } else {
            $siswa = Siswa::orderBy('nama', 'ASC')->paginate(5);
        }

        return view('siswa.siswa', compact('siswa', 'keyword'));
    }

    public function siswa()
    {
        $siswa = Siswa::orderBy('nama', 'ASC')->paginate(5);
        return view('siswa.siswa', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'no_Hp' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->jenisKelamin = $request->jenisKelamin;
        $siswa->tanggalLahir = $request->tanggalLahir;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_Hp;
        $siswa->save();

        return redirect()->route('siswa.siswa')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        if ($siswa) {
            $siswa->delete();
            return redirect()->route('siswa.siswa')->with('success', 'Data Siswa berhasil dihapus.');
        }
        return redirect()->route('siswa.siswa')->with('error', 'Data Siswa tidak ditemukan.');
    }

    public function store(Request $request)
    {
        $siswa = new Siswa;

        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->jenisKelamin = $request->jenisKelamin;
        $siswa->tanggalLahir = $request->tanggalLahir;
        $siswa->alamat = $request->alamat;
        $siswa->no_Hp = $request->no_Hp;
        $siswa->save();

        return redirect()->route('siswa.siswa');
    }
}
