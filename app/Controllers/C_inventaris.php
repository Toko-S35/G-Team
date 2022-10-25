<?php

namespace App\Controllers;

use App\Models\BarangModel;

class C_inventaris extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }


    public function inventaris()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'barang' => $barang
        ];

        return view('inventaris/inventaris_barang', $data);
    }


    public function save()

    {
        $this->barangModel->save([
            'harga_jual' => $this->request->getVar('harga_jual'),
            'tanggal' => $this->request->getVar('tanggal'),
            'harga_modal' => $this->request->getVar('harga_modal'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),

        ]);

        return redirect()->back()->withInput();
    }
}