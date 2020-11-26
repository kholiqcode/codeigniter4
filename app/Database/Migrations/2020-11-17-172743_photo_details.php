<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PhotoDetails extends Migration
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
			'product_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'photo_id' => [
				'type' => 'INT',
				'constraint' => 5,
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
		$this->forge->addForeignKey('product_id','products','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('photo_id','photos','id','CASCADE','CASCADE');
		$this->forge->createTable('detail_photos',true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
