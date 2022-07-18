<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index',compact(['mahasiswas']));
    }

    public function create(){
        return view('mahasiswas.create');
    }

    public function insert(){
        Mahasiswa::create($request->all());
    }
}
