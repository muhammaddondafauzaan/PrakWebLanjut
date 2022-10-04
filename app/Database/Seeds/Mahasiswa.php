<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051043',
                'nama'    => 'Rafi Dinata',
                'alamat' => 'null',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '1917051002',
                'nama'    => 'Anggie Tamara',
                'alamat' => 'Sukarame',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051034',
                'nama'    => 'M Irfan Ardiansyah',
                'alamat' => 'Sukarame',
                'created_at' => Time::now(),
            ]
        ];

        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
