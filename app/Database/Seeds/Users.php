<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        // membuat data
		$new_nasabah = [
			[
                'username' => 'admin',
                'password' => '1adbb3178591fd5bb0c248518f39bf6d64549dcdc38de9.47280829',
                'salt' => '64549dcdc38de9.47280829',
                'role' => 1,
            ]
        ];

        foreach($new_nasabah as $data){
			// insert semua data ke tabel
			$this->db->table('users')->insert($data);
		}
    }
}
