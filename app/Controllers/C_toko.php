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

    public function savet()
    {
        $this->tokoModel->insert([

            'nama_toko' => $this->request->getVar('nama_toko'),
            'alamat_toko' => $this->request->getVar('alamat_toko'),
            'nomor_telepon_toko' => $this->request->getVar('nomor_telepon_toko'),
            'nomor_telepon_kp_toko' => $this->request->getVar('nomor_telepon_kp_toko'),
            'nama_kp_toko' => $this->request->getVar('nama_kp_toko'),
            'biaya_pengiriman' => $this->request->getVar('biaya_pengiriman'),
            'email_kp_toko' => $this->request->getVar('email_kp_toko'),
            'username_kp_toko' => $this->request->getVar('username_kp_toko'),
            'password_kp_toko' => $this->request->getVar('password_kp_toko'),
            'foto_kp_toko' => $this->request->getVar('foto_kp_toko'),

        ]);
        return redirect()->back()->withInput();
    }
}