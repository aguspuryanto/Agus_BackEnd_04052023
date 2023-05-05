<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'TransactionId'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'AccountId'          => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'TransactionDate DATETIME DEFAULT CURRENT_TIMESTAMP',
			'Description'        => [
				'type'           => 'VARCHAR',
				'constraint'     => 190
			],
			'DebitCreditStatus'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 2
			],
			'Amount'  => [
				'type'           => 'DECIMAL',
				'constraint'     => '10,2',
                'null'           => FALSE,
                'default'        => 0.00
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('TransactionId', TRUE);

		// Membuat tabel news
		$this->forge->createTable('transaksi', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('transaksi');
    }
}
