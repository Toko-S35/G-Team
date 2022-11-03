<?php

namespace App\Controllers;

use App\Models\EkspedisiModel;

class C_ekspedisi extends BaseController
{
    protected $ekspedisi;

    public function __construct()
    {
        $this->ekspedisiModel = new EkspedisiModel();
        $this->validation = \Config\Services::validation();
    }


    // tr gdg

    public function gudang()
    {
        $ekspedisi = $this->ekspedisiModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi
        ];
        return view('transaksi/gudang', $data);
    }

    public function input_gudang()
    {

        $ekspedisi = $this->ekspedisiModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'validation' => \Config\Services::validation()
        ];
        return view('transaksi/input_gudang', $data);
    }

    // 

    public function simpan_gudang()
    {
        if (!$this->validate([
            'asal_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'input harus diisi',
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'input harus diisi',
                ]
            ],
            'biaya_ekspedisi' => [
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
            'nota' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'input tidak boleh lebih dari 250 karakter',
                ]
            ],

        ])) {
            return redirect()->back()->withInput();
        }


        $this->ekspedisiModel->insert([

            'asal_barang' => $this->request->getVar('asal_barang'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'nota' => $this->request->getVar('nota'),

        ]);
        session()->setFlashdata('pesan_j', 'data berhasil ditambahkan');


        return redirect()->to(base_url('/gudang'));
    }

    // 

    public function delete_g($id_transaksi)
    {
        $this->ekspedisiModel->delete($id_transaksi);
        session()->setFlashdata('pesan_hapus_j', 'data berhasil dihapus');
        return redirect()->back();
    }

    // 

    public function edit_g($id_transaksi)
    {
        $ekspedisi = $this->ekspedisiModel->find($id_transaksi);

        $data = [
            'title' => 'Kasih Abadi | S-35 |Edit Inventaris',
            'ekspedisi' => $ekspedisi,
            'validation' => \Config\Services::validation(),

        ];

        return view('transaksi/edit_gudang', $data);
    }


    public function update_g($id_transaksi)
    {
        if (!$this->validate([
            'asal_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'input harus diisi',
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'input harus diisi',
                ]
            ],
            'biaya_ekspedisi' => [
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
            'nota' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'input tidak boleh lebih dari 250 karakter',
                ]
            ],

        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'asal_barang' => $this->request->getVar('asal_barang'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'nota' => $this->request->getVar('nota'),
        ];

        $this->ekspedisiModel->update($id_transaksi, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');


        return redirect()->to(base_url('/gudang'));
    }

    // 


    // 
    public function transaksi_gudang_detail($id_transaksi)
    {
        $ekspedisi = $this->ekspedisiModel->find($id_transaksi);
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi
        ];
        return view('transaksi/detail_gudang', $data);
    }

    // 

}