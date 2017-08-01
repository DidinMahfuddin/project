<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\ortu;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswas = siswa::all();
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu = ortu::all();
        return view('siswa.create',compact('ortu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $siswas = new siswa();
        $siswas->nama = $request->a;
        $siswas->orangtua_id = $request->ortu;
        $siswas->umur = $request->c;
        $siswas->jenis_kelamin = $request->d;
        $siswas->alamat = $request->e;
        $siswas->save();
        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $siswa = siswa::findOrFail($id);
        $ortu = ortu::all();
        return view('siswa.show',compact('siswa','ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswa = siswa::findOrFail($id);
        $ortu = ortu::all();
        return view('siswa.edit',compact('siswa','ortu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $siswa = siswa::findOrFail($id);
        $siswa->nama = $request->a;
        $siswa->orangtua_id = $request->ortu;
        $siswa->umur = $request->c;
        $siswa->jenis_kelamin = $request->d;
        $siswa->alamat = $request->e;
        $siswa->save();
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
