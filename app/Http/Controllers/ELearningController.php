<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ELearningController extends Controller
{
    public function index()
    {
        return view('frontend.e-learning', [
            "title" => "E-Learning"
        ]);
    }

    public function hidupSehat()
    {
        return view('frontend.elearning.hidup-sehat', [
            "title" => "PHBS - Perilaku Hidup Bersih dan Sehat"
        ]);
    }

    public function pengolahanSampah()
    {
        return view('frontend.elearning.pengolahan-sampah', [
            "title" => "Pengelolaan Sampah Limbah Rumah Tangga"
        ]);
    }

    public function manajemenKeuangan()
    {
        return view('frontend.elearning.Manajemen-Keuangan', [
            "title" => "Manajemen Keuangan Rumah Tangga"
        ]);
    }
}
