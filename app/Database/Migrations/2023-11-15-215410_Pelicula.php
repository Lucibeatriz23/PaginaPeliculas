<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelicula extends Migration
{
    public function up()
    {
        //crear la estructura de la tabla pelicula 
        $this->forge->addField(
[
    'id'=>[
    'type'=> 'INT',
    'constraint'=> 5,
    'unsigned'=> TRUE,
    'auto-increment' => true
],
'categoria_id'=> [
    'type'=> 'int',
    'constraint'=> 5,
    'unsigned'=> TRUE,

],

'titulo'=> [
    'type'=> 'VARCHAR',
    'constraint'=> 255


],

'descripcion' => [
    'type'=> 'TEXT',
    'null' => TRUE,

]
    ]);
    
    $this->forge->addKey('id', true);
    $this->forge->createTable('pelicula');


}

    public function down()
    {
        $this->forge->dropTable('pelicula');
    }
}
