<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
use Alert;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();//select * from nama_table
        return view('makul.index', compact('makul'));
    }    

    public function create()
    {
        $makul = Makul::all();
        return view('makul.create', compact('makul'));
    }

    public function store(Request $request)
    {
        Makul::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Data Berhasil Diedit','success');
        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        $makul = Makul::find($id);
        $makul->delete();
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('makul');
    }
}
