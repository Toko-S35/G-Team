<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'kp-toko',
                'description'    => 'user kepala toko'
            ],

            [
                'name' => 'kp-gudang',
                'description'    => 'user kepala gudang'
            ],

            [
                'name' => 'bos',
                'description'    => 'user pemilik Toko(BOS)'
            ]

        ];


        // Using Query Builder
        $this->db->table('auth_groups')->insertBatch($data);
    }
}