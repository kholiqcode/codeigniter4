<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
				'null' => true
			],
			'address' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
				'null' => true
			],
			'phone' => [
				'type' => 'VARCHAR',
				'constraint' => 13,
				'null' => true
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 10
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'photo' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
				'null' => true
			],
			'role_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'status' => [
				'type' => 'TINYINT',
				'unsigned' => true,
			],
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'created_by' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'null' => true
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			]
		]);

		$this->forge->addKey('id',true);
		$this->forge->addForeignKey('role_id','roles','id','CASCADE','CASCADE');
		$this->forge->createTable('users',true);

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
