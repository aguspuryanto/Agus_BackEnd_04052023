<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Nasabah extends Seeder
{
    public function run()
    {
        // membuat data
		$new_nasabah = [
			[
                'AccountId' => 1,
                'Name' => 'Customer1',
                'TotalPoint' => 0,
            ], [
                'AccountId' => 2,
                'Name' => 'Customer2',
                'TotalPoint' => 0,
            ]
        ];

        foreach($new_nasabah as $data){
			// insert semua data ke tabel
			$this->db->table('nasabah')->insert($data);
		}
    }
}
