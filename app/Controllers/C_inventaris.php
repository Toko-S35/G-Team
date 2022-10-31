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
        $this->validation = \Config\Services::validation();
    }


    public function inventaris()
    {
        $getjo = $this->tipebarangModel->getJoin()->getResult();
        $jenisbarang = $this->jenisbarangModel->findAll();
        $tipebarang = $this->tipebarangModel->findAll();

        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'jenisbarang' => $jenisbarang,
            'tipebarang' => $tipebarang,
            'gabung' => $getjo

        ];

        return view('inventaris/inventaris_barang', $data);
    }

    public function input_barang_j()
    {

        $jenisbarang = $this->jenisbarangModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |inventaris',
            'jenisbarang' => $jenisbarang,
            'validation' => \Config\Services::validation(),
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
            'validation' => \Config\Services::validation(),
        ];

        return view('inventaris/input_barang_t', $data);
    }


    public function save_j()

    {
        // validasi
        if (!$this->validate([
            'nama_jenis_barang' => [
                'rules' => 'required|is_unique[jenis_barang.nama_jenis_barang]',
                'errors' => [
                    'required' => 'input harus diisi',
                    'is_unique' => 'input harus berbeda dengan yang lain'
                ]
            ],
            'harga_beli' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'input harus diisi',
                    'numeric' => 'input harus angka'
                ]
            ],
            'harga_jual' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'input harus diisi',
                    'numeric' => 'input harus angka'
                ]
            ],
            'banyak_barang' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'input harus diisi',
                    'numeric' => 'input harus angka'
                ]
            ],
            'keterangan' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'input tidak boleh lebih dari 250 karakter',
                ]
            ],

        ])) {
            return redirect()->back()->withInput();
        }
        // end validasi


        $this->jenisbarangModel->save([
            'nama_jenis_barang' => $this->request->getVar('nama_jenis_barang'),
            'harga_beli' => $this->request->getVar('harga_beli'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);

        session()->setFlashdata('pesan_j', 'data berhasil ditambahkan');


        return redirect()->to(base_url('/inventaris'));
    }



    public function save_t()

    {
        if (!$this->validate([
            'nama_tipe_barang' => [
                'rules' => 'required|is_unique[tipe_barang.nama_tipe_barang]',
                'errors' => [
                    'required' => 'input harus diisi',
                    'is_unique' => 'input harus berbeda dengan yang lain'
                ]
            ],
            'banyak_barang_tipe' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'input harus diisi',
                    'numeric' => 'input harus angka'
                ]
            ]

        ])) {
            return redirect()->back()->withInput();
        }


        $this->tipebarangModel->save([
            'nama_tipe_barang' => $this->request->getVar('nama_tipe_barang'),
            'banyak_barang_tipe' => $this->request->getVar('banyak_barang_tipe'),
            'id_jenis_barang' => $this->request->getVar('id_jenis_barang'),

        ]);

        session()->setFlashdata('pesan_t', 'data berhasil ditambahkan');

        return redirect()->to(base_url('/inventaris'));
    }


    public function delete_j($id_jenis_barang)
    {
        $this->jenisbarangModel->delete($id_jenis_barang);

        session()->setFlashdata('pesan_hapus_j', 'data berhasil dihapus');

        return redirect()->back();
    }

    public function delete_t($id_tipe_barang)
    {
        $this->tipebarangModel->delete($id_tipe_barang);
        session()->setFlashdata('pesan_hapus_t', 'data berhasil dihapus');
        return redirect()->back();
    }



    public function edit_t($id_tipe_barang)
    {
        $getjo = $this->tipebarangModel->getJoin()->getResult();
        $jenisbarang = $this->jenisbarangModel->findAll();
        $tipebarang = $this->tipebarangModel->find($id_tipe_barang);

        $data = [
            'title' => 'Kasih Abadi | S-35 |Edit Inventaris',
            'jenisbarang' => $jenisbarang,
            'tipebarang' => $tipebarang,
            'validation' => \Config\Services::validation(),
            'gabung' => $getjo
        ];

        return view('inventaris/edit_t', $data);
    }



    public function update_t($id_tipe_barang)
    {
        if (!$this->validate([
            'nama_tipe_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'input harus diisi',
                ]
            ],
            'banyak_barang_tipe' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'input harus diisi',
                    'numeric' => 'input harus angka'
                ]
            ]

        ])) {
            return redirect()->back()->withInput();
        }


        $data = [
            'nama_tipe_barang' => $this->request->getVar('nama_tipe_barang'),
            'banyak_barang_tipe' => $this->request->getVar('banyak_barang_tipe'),
            'id_jenis_barang' => $this->request->getVar('id_jenis_barang'),

        ];

        $this->tipebarangModel->update($id_tipe_barang, $data);
        session()->setFlashdata('pesan_t', 'data berhasil diubah');

        return redirect()->to(base_url('/inventaris'));
    }
}