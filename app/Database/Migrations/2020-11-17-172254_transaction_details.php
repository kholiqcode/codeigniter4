<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionDetails extends Migration
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
			'transaction_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'product_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'qty' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'sub_total' => [
				'type' => 'INT',
				'constraint' => 11,
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
		$this->forge->addForeignKey('transaction_id','transactions','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('product_id','products','id','CASCADE','CASCADE');
		$this->forge->createTable('transaction_details',true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transaction_details');
	}
}
