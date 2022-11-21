<?php

namespace App\Controllers;

use App\Models\EkspedisiModel;
use App\Models\EkspedisiTokoModel;
use App\Models\jenisBarangModel;
use App\Models\tipeBarangModel;
use Myth\Auth\Models\UserModel;
use App\Models\EkspedisiReturModel;


use App\Models\JTBModel;
use App\Models\JTBReturModel;



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
        $this->jtbreturModel = new JTBReturModel();
        $this->userModel = new UserModel();
        $this->ekspedisiReturModel = new ekspedisiReturModel();

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
            'ekspedisi' => $ekspedisi,

        ];
        return view('transaksi/toko', $data);
    }


    public function input_ekspedisi_toko()
    {
        $user = $this->userModel->findAll();
        $ekspedisi = $this->ekspedisiTokoModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'user' => $user,
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
            ]


        ])) {
            return redirect()->back()->withInput();
        }


        $this->ekspedisiTokoModel->insert([

            'nama_toko' => $this->request->getVar('nama_toko'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),

        ]);
        session()->setFlashdata('pesan_j', 'data berhasil ditambahkan');


        return redirect()->to(base_url('/input_jtb_toko'));
    }

    // 
    public function delete_toko($id_transaksi)
    {
        $this->ekspedisiTokoModel->delete($id_transaksi);
        session()->setFlashdata('pesan_hapus_j', 'data berhasil dihapus');
        return redirect()->back();
    }


    public function edit_toko($id_transaksi)
    {
        $user = $this->userModel->findAll();
        $ekspedisi = $this->ekspedisiTokoModel->find($id_transaksi);

        $data = [
            'title' => 'Kasih Abadi | S-35 |Edit Toko',
            'ekspedisi' => $ekspedisi,
            'user' => $user,
            'validation' => \Config\Services::validation()

        ];

        return view('transaksi/edit_toko', $data);
    }


    public function update_toko($id_transaksi)
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
            ]

        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'nama_toko' => $this->request->getVar('nama_toko'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),
        ];

        $this->ekspedisiTokoModel->update($id_transaksi, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to(base_url('/ekspedisi_toko'));
    }


    // 

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


    public function detail_transaksi_toko($id_transaksi)
    {
        $ekspedisi = $this->ekspedisiTokoModel->find($id_transaksi);
        $jtbModel = $this->jtbModel->find();


        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'ekspedisijtb' => $jtbModel,
            'id_transaksi' => $id_transaksi,
            'validation' => \Config\Services::validation()


        ];
        return view('transaksi/detail_transaksi_toko', $data);
    }

    public function delete_jtb_toko($id_jtb)
    {
        $this->jtbModel->delete($id_jtb);
        session()->setFlashdata('pesan_hapus_j', 'data berhasil dihapus');
        return redirect()->back();
    }

    public function edit_jtb($id_transaksi)
    {
        $toko = $this->ekspedisiTokoModel->findAll();
        $jns = $this->jenisbarangModel->findAll();
        $tpe = $this->tipebarangModel->findAll();
        $ekspedisi = $this->jtbModel->find($id_transaksi);

        $data = [
            'title' => 'Kasih Abadi | S-35 |Edit Toko',
            'ekspedisi' => $ekspedisi,
            'toko' => $toko,
            'jns' => $jns,
            'tpe' => $tpe,
            'validation' => \Config\Services::validation(),

        ];

        return view('transaksi/edit_jtb', $data);
    }


    public function update_jtb($id_jtb)
    {
        if (!$this->validate([
            'banyak_barang' => [
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
            'id_transaksi' => $this->request->getVar('id_transaksi'),
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'tipe_barang' => $this->request->getVar('tipe_barang'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),
        ];

        $this->jtbModel->update($id_jtb, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to('/detail_transaksi_toko/' . $data['id_transaksi']);
    }


    public function barang_masuk($id_transaksi)
    {
        $ekspedisi = $this->ekspedisiTokoModel->find($id_transaksi);
        $jtbModel = $this->jtbModel->find();


        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'ekspedisijtb' => $jtbModel,
            'id_transaksi' => $id_transaksi,
            'validation' => \Config\Services::validation(),


        ];
        return view('transaksi/barang_masuk', $data);
    }



    public function update_catatan($id_transaksi)
    {
        if (!$this->validate([
            'keterangan' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'input tidak boleh lebih dari 250 karakter',
                ]
            ]

        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'keterangan' => $this->request->getVar('keterangan'),
            'pesan' => $this->request->getVar('pesan'),
            'id_transaksi' => $id_transaksi
        ];

        $this->ekspedisiTokoModel->update($id_transaksi, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to('/barang_masuk/' . $data['id_transaksi']);
        // dd($_POST);
    }


    public function update_catatan_t($id_transaksi)
    {
        if (!$this->validate([
            'keterangan' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'input tidak boleh lebih dari 250 karakter',
                ]
            ]

        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'keterangan' => $this->request->getVar('keterangan'),
            'pesan' => $this->request->getVar('pesan'),
            'id_transaksi' => $id_transaksi
        ];

        $this->ekspedisiTokoModel->update($id_transaksi, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to('/detail_transaksi_toko/' . $data['id_transaksi']);
        // dd($_POST);
    }




    public function update_status($id_transaksi)
    {

        $data = [
            'status' => $this->request->getVar('status'),
            'id_transaksi' => $id_transaksi

        ];

        // return dd($_POST);

        $this->ekspedisiTokoModel->update($id_transaksi, $data);

        return redirect()->to('/barang_masuk/' . $data['id_transaksi']);
    }

    public function update_status_d($id_transaksi)
    {

        $data = [
            'status' => $this->request->getVar('status'),
            'id_transaksi' => $id_transaksi

        ];

        // return dd($_POST);

        $this->ekspedisiTokoModel->update($id_transaksi, $data);

        return redirect()->to('/detail_transaksi_toko/' . $data['id_transaksi']);
    }

    // /////////////////////////////////////////////


    public function retur_barang()
    {
        $ekspedisi = $this->ekspedisiReturModel->findAll();
        $toko = $this->ekspedisiTokoModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi Retur',
            'toko' => $toko,
            'ekspedisi' => $ekspedisi,
        ];
        return view('transaksi/retur_barang', $data);
    }


    public function input_retur()
    {
        $user = $this->userModel->findAll();
        $toko = $this->ekspedisiTokoModel->findAll();
        $ekspedisi = $this->ekspedisiReturModel->findAll();
        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'toko' => $toko,
            'user' => $user,
            'validation' => \Config\Services::validation()
        ];
        return view('transaksi/input_retur', $data);
    }


    public function simpan_retur()
    {
        if (!$this->validate([
            'data' => [
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
            return redirect()->to(base_url('/input_jtb_retur'));
        }


        $this->ekspedisiReturModel->insert([

            'data' => $this->request->getVar('data'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),
            'keterangan' => $this->request->getVar('keterangan'),

        ]);
        session()->setFlashdata('pesan_j', 'data berhasil ditambahkan');


        return redirect()->to(base_url('/retur_barang'));
        // return dd($_POST);
    }

    public function delete_retur($id_transaksi)
    {
        $this->ekspedisiReturModel->delete($id_transaksi);
        session()->setFlashdata('pesan_hapus_j', 'data berhasil dihapus');
        return redirect()->back();
    }

    public function edit_retur($id_transaksi)
    {
        $ekspedisi = $this->ekspedisiReturModel->find($id_transaksi);
        $toko = $this->ekspedisiTokoModel->findAll();


        $data = [
            'title' => 'Kasih Abadi | S-35 |Edit Toko',
            'ekspedisi' => $ekspedisi,
            'toko' => $toko,
            'validation' => \Config\Services::validation()

        ];

        return view('transaksi/edit_retur', $data);
    }




    public function update_retur($id_transaksi)
    {
        if (!$this->validate([
            'data' => [
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

        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'data' => $this->request->getVar('data'),
            'tanggal' => $this->request->getVar('tanggal'),
            'biaya_ekspedisi' => $this->request->getVar('biaya_ekspedisi'),
            'keterangan' => $this->request->getVar('keterangan'),

        ];

        $this->ekspedisiReturModel->update($id_transaksi, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to(base_url('/retur_barang'));
    }


    public function detail_transaksi_retur($id_transaksi)
    {
        $ekspedisi = $this->ekspedisiReturModel->find($id_transaksi);
        $jtbreturModel = $this->jtbreturModel->find();


        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'ekspedisijtb' => $jtbreturModel,
            'id_transaksi' => $id_transaksi,
            'validation' => \Config\Services::validation()


        ];
        return view('transaksi/detail_transaksi_retur', $data);
    }

    // jtb////////////////////

    public function input_jtb_retur()
    {
        $ekspedisi = $this->jtbModel->findAll();
        $toko = $this->ekspedisiReturModel->findAll();
        $jns = $this->jenisbarangModel->findAll();
        $tpe = $this->tipebarangModel->findAll();


        $data = [
            'title' => 'Kasih Abadi | S-35 |Ekspedisi JTB',
            'ekspedisi' => $ekspedisi,
            'toko' => $toko,
            'jns' => $jns,
            'tpe' => $tpe,
        ];
        return view('transaksi/input_jtb_retur', $data);
    }


    public function simpan_jtb_retur()

    {

        $byk       = $_POST['jenis_barang'];
        $total = count($byk);
        $jenis_barang = $_POST['jenis_barang'];
        $tipe_barang = $_POST['tipe_barang'];
        $banyak_barang = $_POST['banyak_barang'];


        for ($i = 0; $i < $total; $i++) {
            $this->jtbreturModel->insert([
                'id_transaksi' => $this->request->getVar('id_transaksi'),
                'jenis_barang' => $jenis_barang[$i],
                'tipe_barang' => $tipe_barang[$i],
                'banyak_barang' => $banyak_barang[$i],

            ]);
        }
        session()->setFlashdata('pesan_j', 'data detail berhasil ditambahkan');


        return redirect()->to(base_url('/retur_barang'));
    }


    public function delete_jtb_retur($id_jtb)
    {
        $this->jtbreturModel->delete($id_jtb);
        session()->setFlashdata('pesan_hapus_j', 'data berhasil dihapus');
        return redirect()->back();
    }


    public function edit_jtb_retur($id_transaksi)
    {
        $toko = $this->ekspedisiReturModel->findAll();
        $jns = $this->jenisbarangModel->findAll();
        $tpe = $this->tipebarangModel->findAll();
        $ekspedisi = $this->jtbreturModel->find($id_transaksi);


        $data = [
            'title' => 'Kasih Abadi | S-35 |Edit Toko',
            'ekspedisi' => $ekspedisi,
            'toko' => $toko,
            'jns' => $jns,
            'tpe' => $tpe,
            'validation' => \Config\Services::validation(),

        ];

        return view('transaksi/edit_jtb_retur', $data);
    }


    public function update_jtb_retur($id_jtb)
    {
        if (!$this->validate([
            'banyak_barang' => [
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
            'id_transaksi' => $this->request->getVar('id_transaksi'),
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'tipe_barang' => $this->request->getVar('tipe_barang'),
            'banyak_barang' => $this->request->getVar('banyak_barang'),
        ];

        $this->jtbreturModel->update($id_jtb, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to('/detail_transaksi_retur/' . $data['id_transaksi']);
    }


    public function update_catatan_retur($id_transaksi)
    {
        if (!$this->validate([
            'keterangan' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'input tidak boleh lebih dari 250 karakter',
                ]
            ]

        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'keterangan' => $this->request->getVar('keterangan'),
            'pesan' => $this->request->getVar('pesan'),
            'id_transaksi' => $id_transaksi
        ];

        $this->ekspedisiReturModel->update($id_transaksi, $data);
        session()->setFlashdata('pesan_j', 'data berhasil diubah');

        return redirect()->to('/detail_transaksi_retur/' . $data['id_transaksi']);
        // dd($_POST);
    }


    // public function update_catatan_t($id_transaksi)
    // {
    //     if (!$this->validate([
    //         'keterangan' => [
    //             'rules' => 'max_length[250]',
    //             'errors' => [
    //                 'max_length' => 'input tidak boleh lebih dari 250 karakter',
    //             ]
    //         ]

    //     ])) {
    //         return redirect()->back()->withInput();
    //     }

    //     $data = [
    //         'keterangan' => $this->request->getVar('keterangan'),
    //         'pesan' => $this->request->getVar('pesan'),
    //         'id_transaksi' => $id_transaksi
    //     ];

    //     $this->ekspedisiTokoModel->update($id_transaksi, $data);
    //     session()->setFlashdata('pesan_j', 'data berhasil diubah');

    //     return redirect()->to('/detail_transaksi_toko/' . $data['id_transaksi']);
    //     // dd($_POST);
    // }




    // public function update_status($id_transaksi)
    // {

    //     $data = [
    //         'status' => $this->request->getVar('status'),
    //         'id_transaksi' => $id_transaksi

    //     ];

    //     // return dd($_POST);

    //     $this->ekspedisiTokoModel->update($id_transaksi, $data);

    //     return redirect()->to('/barang_masuk/' . $data['id_transaksi']);
    // }

    // public function update_status_d($id_transaksi)
    // {

    //     $data = [
    //         'status' => $this->request->getVar('status'),
    //         'id_transaksi' => $id_transaksi

    //     ];

    //     // return dd($_POST);

    //     $this->ekspedisiTokoModel->update($id_transaksi, $data);

    //     return redirect()->to('/detail_transaksi_toko/' . $data['id_transaksi']);
    // }



}
