<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipeBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tipe_barang' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_tipe_barang' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'banyak_barang_tipe' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_jenis_barang' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
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
        $this->forge->addKey('id_tipe_barang', true);
        $this->forge->addForeignKey('id_jenis_barang', 'jenis_barang', 'id_jenis_barang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tipe_barang');
    }

    public function down()
    {
        $this->forge->dropTable('tipe_barang');
    }
}