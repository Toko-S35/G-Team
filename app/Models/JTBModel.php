<?php

namespace App\Models;

use CodeIgniter\Model;

class JTBModel extends Model
{
    protected $table      = 'jtb';
    protected $primaryKey = 'id_jtb';

    protected $allowedFields = ['id_transaksi', 'jenis_barang', 'tipe_barang', 'banyak_barang'];
    protected $useTimestamps = true;
}
