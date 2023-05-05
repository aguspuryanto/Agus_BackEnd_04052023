<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 90
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 90
			],
			'salt' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'role' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'default'        => '1',
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('users');
    }
}
