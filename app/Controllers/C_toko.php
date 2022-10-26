<?php

namespace App\Controllers;

use App\Models\EkspedisiModel;
use App\Models\TokoModel;

class C_toko extends BaseController
{
    protected $toko;

    public function __construct()
    {
        $this->tokoModel = new TokoModel();
    }

    public function toko()
    {
        $toko = $this->tokoModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Toko',
            'toko' => $toko
        ];
        return view('toko/toko', $data);
    }

    // public function simpan()
    // {
    //     $this->ekspedisiModel->insert([

    //         'tanggal' => $this->request->getVar('tanggal'),
    //         'tujuan' => $this->request->getVar('tujuan'),
    //         'jarak_tempuh' => $this->request->getVar('jarak_tempuh'),
    //         'banyak_barang' => $this->request->getVar('banyak_barang'),
    //         'detail_pengiriman' => $this->request->getVar('detail_pengiriman'),
    //         'biaya_pengiriman' => $this->request->getVar('biaya_pengiriman'),

    //     ]);
    //     return redirect()->back()->withInput();
    // }
}