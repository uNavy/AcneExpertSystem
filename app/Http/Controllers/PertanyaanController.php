<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PertanyaanController extends Controller
{
    public function display(){
        session_start();
        $pertanyaan = Gejala::where('id_gejala', $_SESSION['current_gejala'])->get()->first();
        return view('pertanyaan')->with('pertanyaan',$pertanyaan);
    }
    public function next(Request $request)
    {
        
        // kemaren var_dump($test) disini
        if ($request->ID_Gejala == 'GE01') {
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE02')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);           
            }else{
                redirect()->back();
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE03')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }
        }
        if($request->ID_Gejala == 'GE02'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE03')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                redirect()->back();
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE18')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
                
            }
        }
        if($request->ID_Gejala == 'GE03'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE04')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE06')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }
        }
        if($request->ID_Gejala == 'GE04'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE05')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE05'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE01')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE06'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE07')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE11')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }
        }
        if($request->ID_Gejala == 'GE07'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE08')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE08'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE09')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE09'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE10')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE10'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE02')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE11'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE12')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE14')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }
        }
        if($request->ID_Gejala == 'GE12'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE13')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE20')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }
        }
        if($request->ID_Gejala == 'GE13'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE03')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);
            }else{
                return view('notfound');
            }
        }   
        if($request->ID_Gejala == 'GE14'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE15')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE21')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }
        }
        if($request->ID_Gejala == 'GE15'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE16')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE16'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE17')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE17'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE04')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);

            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE18'){
            if($request->answer == "true"){
                $pertanyaan_selanjutnya = Gejala::where('id_gejala', 'GE19')->get()->first();
                return view('pertanyaan')->with('pertanyaan',$pertanyaan_selanjutnya);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE19'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE05')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);
            }else{
                return view('notfound');
            }
        }
        if($request->ID_Gejala == 'GE20'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE06')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);
            }else{
                return view('notfound');            
            }
        }
        if($request->ID_Gejala == 'GE21'){
            if($request->answer == "true"){
                $jawaban = Penyakit::where('id_penyakit', 'PE07')->get()->first();
                return view('jawaban')->with('jawaban', $jawaban);
            }else{
                return view('notfound');
            }
        }

    }
}