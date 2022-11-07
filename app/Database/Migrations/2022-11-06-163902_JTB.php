<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JTB extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jtb' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'jenis_barang' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'tipe_barang' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'banyak_barang' => [
                'type'       => 'INT',
                'unsigned'   => true,
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
        $this->forge->addKey('id_jtb', true);
        $this->forge->addForeignKey('id_transaksi', 'transaksi_ke_toko', 'id_transaksi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('JTB');
    }

    public function down()
    {
        $this->forge->dropTable('JTB');
    }
}
