<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Photos extends Migration
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
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
		]);

		$this->forge->addKey('id',true);
		$this->forge->createTable('photos',true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('photos');
	}
}
