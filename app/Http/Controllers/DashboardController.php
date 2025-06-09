<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tambahkan kode di sini untuk menampilkan data fakultas
        // Contoh:
        $mahasiswa = DB::select('SELECT prodi.nama, COUNT(*)')
    }
}