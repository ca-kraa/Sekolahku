<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::paginate(10);
        return view('forum.home', compact('forums'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'pesan' => 'required'
        ]);

        $forum = new Forum;
        $forum->nama = $request->nama;
        $forum->kelas = $request->kelas;
        $forum->jurusan = $request->jurusan;
        $forum->pesan = $request->pesan;
        $forum->save();

        return redirect()->route('forum.home')->with('success', 'Data forum berhasil disimpan.');
    }

    public function edit($id)
    {
        $forum = Forum::findOrFail($id);
        return view('forum.edit', compact('forum'));
    }

    public function update(Request $request, $id)
    {
        $forum = Forum::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'pesan' => 'required'
        ]);

        $forum->nama = $request->nama;
        $forum->kelas = $request->kelas;
        $forum->jurusan = $request->jurusan;
        $forum->pesan = $request->pesan;
        $forum->save();

        return redirect()->route('forum.home')->with('success', 'Data forum berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $forum = Forum::find($id);
        if ($forum) {
            $forum->delete();
            return redirect()->route('forum.home')->with('success', 'Data forum berhasil dihapus.');
        }
        return redirect()->route('forum.home')->with('error', 'Data forum tidak ditemukan.');
    }
}
