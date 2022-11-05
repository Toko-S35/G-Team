<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_barang' => [
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
            'nama_jenis_barang' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'harga_beli' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'harga_jual' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'banyak_barang' => [
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
        $this->forge->addKey('id_jenis_barang', true);
        $this->forge->addForeignKey('id_transaksi', 'transaksi_ke_gudang', 'id_transaksi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jenis_barang');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_barang');
    }
}