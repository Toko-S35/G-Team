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
}