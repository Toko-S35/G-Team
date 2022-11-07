<?php

namespace App\Controllers;

use App\Models\EkspedisiModel;
use App\Models\EkspedisiTokoModel;
use App\Models\jenisBarangModel;
use App\Models\tipeBarangModel;


use App\Models\JTBModel;

class C_ekspedisi extends BaseController
{
    protected $ekspedisi;

    public function __construct()
    {
        $this->ekspedisiTokoModel = new ekspedisiTokoModel();
        $this->ekspedisiModel = new EkspedisiModel();
        $this->tipebarangModel = new tipeBarangModel();
        $this->jenisbarangModel = new jenisBarangModel();
        $this->jtbModel = new JTBModel();
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

    // ///////////////////////////////////////////////////////////////////

    public function ekspedisi_toko()
    {
        $ekspedisi = $this->ekspedisiTokoModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi TOKO',
            'ekspedisi' => $ekspedisi
        ];
        return view('transaksi/toko', $data);
    }


    public function input_ekspedisi_toko()
    {

        $ekspedisi = $this->ekspedisiTokoModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'validation' => \Config\Services::validation()
        ];
        return view('transaksi/input_toko', $data);
    }

    public function simpan_toko()
    {
        if (!$this->validate([
            'nama_toko' => [
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
            ]

        ])) {
            return redirect()->back()->withInput();
        }


        $this->ekspedisiTokoModel->insert([

            'nama_toko' => $this->request->getVar('nama_toko'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),
            'keterangan' => $this->request->getVar('keterangan'),

        ]);
        session()->setFlashdata('pesan_j', 'data berhasil ditambahkan');


        return redirect()->to(base_url('/ekspedisi_toko'));
    }



    public function input_jtb_toko()
    {
        $ekspedisi = $this->jtbModel->findAll();
        $toko = $this->ekspedisiTokoModel->findAll();
        $jns = $this->jenisbarangModel->findAll();
        $tpe = $this->tipebarangModel->findAll();


        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi JTB',
            'ekspedisi' => $ekspedisi,
            'toko' => $toko,
            'jns' => $jns,
            'tpe' => $tpe,

        ];
        return view('transaksi/input_jtb', $data);
    }

    public function simpan_jtb()

    {
        // $data = [
        //     'title' => 'Kasih Abadi | S-35 |Ekspedisi JTB',
        //     'total' => $_POST['jenis_barang']


        // ];
        // $tes = $_POST['jenis_barang'];
        // // return dd($_POST);
        // return dd($tes[2]);


        $byk       = $_POST['jenis_barang'];
        $total = count($byk);
        $jenis_barang = $_POST['jenis_barang'];
        $tipe_barang = $_POST['tipe_barang'];
        $banyak_barang = $_POST['banyak_barang'];


        for ($i = 0; $i < $total; $i++) {
            $this->jtbModel->insert([
                'id_transaksi' => $this->request->getVar('id_transaksi'),
                'jenis_barang' => $jenis_barang[$i],
                'tipe_barang' => $tipe_barang[$i],
                'banyak_barang' => $banyak_barang[$i],

            ]);
        }
        session()->setFlashdata('pesan_j', 'data detail berhasil ditambahkan');


        return redirect()->to(base_url('/ekspedisi_toko'));
    }
}
