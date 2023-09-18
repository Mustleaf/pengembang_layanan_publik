<?php

namespace App\Http\Controllers;

use App\Models\vpsbaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VpsbaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permohonan-VPS');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permohonan-VPS');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_pemohon');
        Session::flash('instansi');
        Session::flash('nip');
        Session::flash('tujuan_pembuatan_vps');
        Session::flash('prosesor');
        Session::flash('sistem_operasi');
        // Session::flash('hardisk');
        // Session::flash('ram');
        Session::flash('ip_address');

      $data=$request->validate([
            'nama_pemohon'=>'required',
            'instansi'=>'required',
            'nip'=>'required',
            'tujuan_pembuatan_vps'=>'required',
            'prosesor'=>'required',
            'sistem_operasi'=>'required',
            // 'hardisk'=>'required',
            // 'ram'=>'required',
            'ip_address'=>'required'
            // 'akun_akses_non_fisik'
        ]);
        dd($data);
        Item::create($data);
        return redirect()->to('permohonan-VPS');
    }

    /**
     * Display the specified resource.
     */
    public function show(vpsbaru $vpsbaru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vpsbaru $vpsbaru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vpsbaru $vpsbaru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vpsbaru $vpsbaru)
    {
        //
    }
}
