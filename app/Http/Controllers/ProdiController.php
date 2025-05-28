<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
<<<<<<< HEAD
        return view('prodi.create',compact('fakultas'));
=======
        return view('prodi.create', compact('fakultas'));
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
         $input = $request->validate([
=======
        // validasi input
        $input = $request->validate([
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
            'nama' => 'required|unique:prodi',
            'singkatan' => 'required|max:5',
            'kaprodi' => 'required',
            'sekretaris' => 'required',
            'fakultas_id' => 'required',
        ]);
<<<<<<< HEAD
        // simpan data ke tabel fakulas
        Fakultas::create($input);
        // redirect ke route fakultas.index
        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil ditambahkan.');
=======
        // simpan data ke tabel prodi
        Prodi::create($input);
        // redirect ke route prodi.index
        return redirect()->route('prodi.index')->with('success', 'prodi berhasil ditambahkan.');
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
