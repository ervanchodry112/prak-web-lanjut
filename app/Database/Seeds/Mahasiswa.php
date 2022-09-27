<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'npm' => '2017051001',
                'nama'    => 'Ervan Chodry',
                'alamat' => 'Rejomulyo',
                'deskripsi' => 'Mahasiswa',
            ],
            [
                'npm' => '2017051006',
                'nama'    => 'Adi Wijaya Satria Nustantara',
                'alamat' => 'Gisting',
                'deskripsi' => 'Mahasiswa',
            ],
        ];

        // Using Query Builder
        foreach ($data as $d) {
            $this->db->table('data_mhs')->insert($d);
        }
    }
}
