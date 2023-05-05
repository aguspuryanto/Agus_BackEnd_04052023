<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nasabah extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'AccountId'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'Name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 90
			],
			'TotalPoint'       => [
				'type'           => 'INT',
				'constraint'     => 10
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('AccountId', TRUE);

		// Membuat tabel news
		$this->forge->createTable('nasabah', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('nasabah');
    }
}
