<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;

class DBController extends Controller
{
    public function getGejala(){
        $data_gejala = Gejala::all();
        return $data_gejala;
    }
    public function getPenyakit(){
        $data_penyakit = Penyakit::all();
        return $data_penyakit;
    }
}
