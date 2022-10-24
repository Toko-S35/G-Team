<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\EkspedisiModel;

class Home extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 | Home'
        ];
        return view('user/index', $data);
    }

    public function toko()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 | toko'
        ];
        return view('toko/toko', $data);
    }

    public function input_toko()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 | input_toko'
        ];
        return view('toko/input_toko', $data);
    }

    public function details()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 | details'
        ];
        return view('toko/details', $data);
    }
}