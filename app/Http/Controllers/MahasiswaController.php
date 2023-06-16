<?php

namespace App\Http\Controllers;

use App\Models\Wali;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mahasiswa.index', [
            'data' => Mahasiswa::all(),
            'title' => 'Data Mahasiswa'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.create', [
            'title' => 'Tambah Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'jk'        => 'required',
            'alamat'    => 'required',
            'hp'        => 'required',
            'jurusan'   => 'required',
            'email'     => 'required'
        ]);

        Mahasiswa::create([
            'nama'      => $request->nama,
            'jk'        => $request->jk,
            'alamat'    => $request->alamat,
            'hp'        => $request->hp,
            'jurusan'   => $request->jurusan,
            'email'     => $request->email
        ]);

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.mahasiswa.edit', [
            'mahasiswa' => Mahasiswa::find($id),
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'jk'        => 'required',
            'alamat'    => 'required',
            'hp'        => 'required',
            'jurusan'   => 'required',
            'email'     => 'required'
        ]);

        // $mahasiswa = Mahasiswa::find($id);
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->jk = $request->jk;
        // $mahasiswa->alamat = $request->alamat;
        // $mahasiswa->hp = $request->hp;
        // $mahasiswa->jurusan = $request->jurusan;
        // $mahasiswa->email = $request->email;
        // $mahasiswa->save();

        // atau //

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $mahasiswa = Mahasiswa::all();
        }

        return view('admin.mahasiswa.index', [
            'data' => $mahasiswa,
            'title' => 'Data Mahasiswa'
        ]);
    }

    // ONE TO ONE REALTION
    public function wali()
    {
        // $data = Mahasiswa::with('wali')->get();
        // $title = "Wali";
        // // dd($data);

        // return view('admin.mahasiswa.wali', compact('data', 'title'));

        $data = Mahasiswa::all();
        return view('admin.mahasiswa.wali', [
            'data' => $data,
            'title' => 'Data Wali'
        ]);
    }

    // ONE TO MANY RELATION
    public function dosen()
    {
        $dosen = Dosen::all();
        return view('admin.dosen.index', [
            'title' => 'Data Dosen',
            'data' => $dosen
        ]);
    }

    // MANY TO MANY RELATION
    public function matkul()
    {
        $mahasiswa = Mahasiswa::get();
        return view('admin.dosen.matkul', [
            'title' => 'Data Matkul',
            'data' => $mahasiswa
        ]);
    }
}
