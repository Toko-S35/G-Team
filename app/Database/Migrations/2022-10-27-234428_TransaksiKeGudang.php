<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiKeGudang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type'       => 'DATETIME',
            ],
            'biaya_ekspedisi' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],

        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('transaksi_ke_gudang');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_ke_gudang');
    }
}