<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\EkspedisiModel;

class Home extends BaseController
{
    protected $barangModel;
    protected $ekspedisiModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->ekspedisiModel = new EkspedisiModel();
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
        $ekspedisi = $this->ekspedisiModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi
        ];
        return view('pengiriman_barang/pengiriman_barang', $data);
    }


    public function inputBrg()
    {
        $data = [
            'title' => 'Kasih Abadi | S-35 |Input Barang',


        ];

        return view('inventaris/input_barang', $data);
    }


    public function save()

    {
        $this->barangModel->save([
            'harga_jual' => $this->request->getVar('harga_jual'),
            'tanggal' => $this->request->getVar('tanggal'),
            'harga_modal' => $this->request->getVar('harga_modal'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),
            // 'created_at' => date('$timestamp'),
            // 'update_at' => date('$timestamp'),

        ]);

        return redirect()->back()->withInput();
    }
}