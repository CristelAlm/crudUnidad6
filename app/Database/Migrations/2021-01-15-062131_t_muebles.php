<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TMuebles extends Migration
{
	public function up()
	{
		$this->forge->addField([
				'id_mueble'  => [
					'type'       => 'INT',
					'constraint' => 5,
					'usigned'    => true,
					'auto_increment' => true,
				],
				'nombre'  	=> [
					'type' 		=> 'VARCHAR',
					'constraint' => 255,
				],
				'tipo'  	=> [
					'type' 		=> 'VARCHAR',
					'constraint' => 255,
				],
				'costov'  	=> [
					'type' 		=> 'VARCHAR',
					'constraint' => 255,
				],
				'costoc'  	=> [
					'type' 		=> 'VARCHAR',
					'constraint' => 255,
				],
				'fecha'  	=> [
					'type' 		=> 'DATATIME',
					'null'      => true,
				],
			]);

			$this->forge->addKey('id_mueble', true);
			$this->forge->createTable('t_muebles');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_muebles');
	}
}
