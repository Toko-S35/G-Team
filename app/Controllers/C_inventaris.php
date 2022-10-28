<?php

namespace App\Controllers;

use App\Models\jenisBarangModel;
use App\Models\tipeBarangModel;


class C_inventaris extends BaseController
{
    protected $jenisbarangModel;
    protected $tipebarangModel;


    public function __construct()
    {
        $this->jenisbarangModel = new jenisBarangModel();
        $this->tipebarangModel = new tipeBarangModel();
    }


    public function inventaris()
    {
        $jenisbarang = $this->jenisbarangModel->findAll();
        $tipebarang = $this->tipebarangModel->findAll();

        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'jenisbarang' => $jenisbarang,
            'tipebarang' => $tipebarang
        ];

        return view('inventaris/inventaris_barang', $data);
    }

    public function input_barang_j()
    {
        $jenisbarang = $this->jenisbarangModel->findAll();

        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'jenisbarang' => $jenisbarang,
        ];

        return view('inventaris/input_barang_j', $data);
    }

    public function input_barang_t()
    {
        $jenisbarang = $this->jenisbarangModel->findAll();
        $tipebarang = $this->tipebarangModel->findAll();

        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'jenisbarang' => $jenisbarang,
            'tipebarang' => $tipebarang,
        ];

        return view('inventaris/input_barang_t', $data);
    }


    public function save_j()

    {
        $this->jenisbarangModel->save([
            'nama_jenis_barang' => $this->request->getVar('nama_jenis_barang'),
            'harga_beli' => $this->request->getVar('harga_beli'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);

        return redirect()->back()->withInput();
    }


    public function save_t()

    {

        $this->tipebarangModel->save([
            'nama_tipe_barang' => $this->request->getVar('nama_tipe_barang'),
            'banyak_barang-tipe' => $this->request->getVar('banyak_barang_tipe'),
            'id_jenis_barang' => $this->request->getVar('id_jenis_barang'),

        ]);

        return redirect()->back()->withInput();
    }
}