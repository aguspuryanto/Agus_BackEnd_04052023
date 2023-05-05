<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Transaksi extends Seeder
{
    public function run()
    {
        // membuat data
		$new_transaksi = [
			[
                'AccountId' => 1,
                'TransactionDate' => '2017-01-01',
                'Description' => 'Setor Tunai',
                'DebitCreditStatus' => 'C',
                'Amount' => '200000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-01-05',
                'Description' => 'Beli Pulsa',
                'DebitCreditStatus' => 'D',
                'Amount' => '10000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-01-06',
                'Description' => 'Bayar Listrik',
                'DebitCreditStatus' => 'D',
                'Amount' => '70000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-01-07',
                'Description' => 'Tarik Tunai',
                'DebitCreditStatus' => 'D',
                'Amount' => '100000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-02-01',
                'Description' => 'Setor Tunai',
                'DebitCreditStatus' => 'C',
                'Amount' => '300000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-02-05',
                'Description' => 'Bayar Listrik',
                'DebitCreditStatus' => 'D',
                'Amount' => '50000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-02-15',
                'Description' => 'Tarik Tunai',
                'DebitCreditStatus' => 'D',
                'Amount' => '50000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-02-20',
                'Description' => 'Beli Pulsa',
                'DebitCreditStatus' => 'D',
                'Amount' => '40000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-02-28',
                'Description' => 'Tarik Tunai',
                'DebitCreditStatus' => 'D',
                'Amount' => '50000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-03-01',
                'Description' => 'Setor Tunai',
                'DebitCreditStatus' => 'C',
                'Amount' => '50000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-03-07',
                'Description' => 'Bayar Listrik',
                'DebitCreditStatus' => 'D',
                'Amount' => '1250000',
            ], [
                'AccountId' => 1,
                'TransactionDate' => '2017-03-15',
                'Description' => 'Beli Pulsa',
                'DebitCreditStatus' => 'D',
                'Amount' => '20000',
            ]
        ];

        foreach($new_transaksi as $data){
			// insert semua data ke tabel
			$this->db->table('transaksi')->insert($data);
		}
    }
}
