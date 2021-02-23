<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        return view('program')
                        -> with('name' , 'Karir');
    }

    public function magang() {
        return view('program')
                        -> with('name' , 'Magang');
    }
    
    public function kunjunganIndustri() {
        return view('program')
                        -> with('name' , 'Kunjungan Industri');
    }
}
