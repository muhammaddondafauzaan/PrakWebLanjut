<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;
class Mahasiswa extends Seeder
{
    public function run()
    {
        $mahasiswa_data = [
            ['npm' => '2017051036',
            'nama' => 'Donda',
            'created_at' => Time::now(),
            'updated_at' => Time::now(),

        ]
        ];

        foreach($mahasiswa_data as $data){
            $this->db->table('mahasiswa')->insert($data);
        }

    }
}
