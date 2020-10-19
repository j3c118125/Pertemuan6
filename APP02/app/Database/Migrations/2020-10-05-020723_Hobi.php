<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hobi extends Migration
{
	private $table = 'hobi';
	public function up()
	{
		$this->forge->addField([
			'kode_hobi' => [
					'type'           => 'INT',
					'constraint'     => '11',
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'hobi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
		]);
		$this->forge->addKey('kode_hobi', true); //maksudnya ini untuk primary key
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
