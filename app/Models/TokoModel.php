<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table      = 'toko';

    protected $allowedFields =
    [
        "nama_toko", "alamat_toko", "nomor_telepon_toko", "nomor_telepon_kp_toko", "nama_kp_toko", "email_kp_toko", "username_kp_toko", "password_kp_toko", "foto_kp_toko"
    ];

    protected $useTimestamps = true;
}