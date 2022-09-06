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
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051006',
                'nama'    => 'Adi Wijaya Satria Nustantara',
                'alamat' => 'Gisting',
            ],
        ];

        // Using Query Builder
        foreach ($data as $d) {
            $this->db->table('data_mhs')->insert($d);
        }
    }
}
