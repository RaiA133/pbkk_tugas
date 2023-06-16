<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tendik;

class TendikController extends Controller
{
    public function index()
    {
        $tendik = Tendik::all();
        return view('admin.tendik.index', [
            'title' => 'Data Tendik',
            'tendik' => $tendik
        ]);
    }

    public function create()
    {
        return view('admin.tendik.create', [
            'title' => 'Tambah Data Tendik'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      =>  'required|min:5',
            'jenkel'    =>  'required',
            'alamat'    =>  'required',
            'hp'        =>  'required',
            'bagian'    =>  'required',
            'email'     =>  'required',
            'foto'      =>  'required',
            'no_ktp'    =>  'required'
        ]);


        $tendik = Tendik::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $tendik->foto = $request->file('foto')->getClientOriginalName();
            $tendik->save();
        }


        if ($request->hasFile('no_ktp')) {
            $request->file('no_ktp')->move('images/', $request->file('no_ktp')->getClientOriginalName());
            $tendik->no_ktp = $request->file('no_ktp')->getClientOriginalName();
            $tendik->save();
        }
        return redirect('/tendik');
    }
}
