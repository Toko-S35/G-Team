<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 | Home'
        ];
        return view('user/index', $data);
    }
    public function inventaris()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'barang' => $barang
        ];

        // $barangModel = new BarangModel();



        return view('inventaris/inventaris_barang', $data);
    }
    public function pengiriman_barang()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi'
        ];
        return view('pengiriman_barang/pengiriman_barang', $data);
    }
}