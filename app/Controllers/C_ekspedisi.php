<?php

namespace App\Controllers;

use App\Models\EkspedisiModel;

class C_ekspedisi extends BaseController
{
    protected $ekspedisi;

    public function __construct()
    {
        $this->ekspedisiModel = new EkspedisiModel();
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

    public function simpan()
    {
        $this->ekspedisiModel->insert([

            'tanggal' => $this->request->getVar('tanggal'),
            'tujuan' => $this->request->getVar('tujuan'),
            'jarak_tempuh' => $this->request->getVar('jarak_tempuh'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),
            'detail_pengiriman' => $this->request->getVar('detail_pengiriman'),
            'biaya_pengiriman' => $this->request->getVar('biaya_pengiriman'),

        ]);
        return redirect()->back()->withInput();
    }
}