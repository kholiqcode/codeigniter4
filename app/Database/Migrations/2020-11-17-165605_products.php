<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
			'categorie_id' =>[
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
				'null' => true
			],
			'description' => [
				'type' => 'TEXT',
				'null' => true
			],
			'price' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'qty' => [
				'type' => 'INT',
				'constraint' => 11
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
		$this->forge->addForeignKey('categorie_id','categories','id');
		$this->forge->createTable('products',true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
