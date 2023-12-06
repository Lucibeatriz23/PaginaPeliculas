<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categoria extends Migration
{
    public function up()
    {
        //crear la estructura de la tabla categoria 
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto-increment' => true
            ],

            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 255


            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categoria');
    }


    public function down()
    {
        //eliminar tabla 
        $this->forge->dropTable('categoria');
    }
}
