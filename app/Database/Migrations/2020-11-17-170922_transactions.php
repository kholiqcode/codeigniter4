<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
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
			'buyer_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'trx_code' => [
				'type' => 'VARCHAR',
				'constraint' => 8,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
				'null' => true
			],
			'shipping_charge' => [
				'type' => 'TEXT',
				'null' => true
			],
			'total' => [
				'type' => 'INT',
				'constraint' => 11,
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
		$this->forge->addForeignKey('buyer_id','users','id','CASCADE','CASCADE');
		$this->forge->createTable('transactions',true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transactions');
	}
}
