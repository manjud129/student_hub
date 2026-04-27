<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramsTable extends Migration
{
   public function up()
{
    $this->forge->addField([
        'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        'title'       => ['type' => 'VARCHAR', 'constraint' => 255],
        'category'    => ['type' => 'ENUM', 'constraint' => ['Beasiswa', 'Magang', 'Lomba']],
        'provider'    => ['type' => 'VARCHAR', 'constraint' => 255],
        'description' => ['type' => 'TEXT', 'null' => true],
        'deadline'    => ['type' => 'DATE', 'null' => true],
        'link_origin' => ['type' => 'VARCHAR', 'constraint' => 255], // Untuk n8n (anti duplikat)
        'is_verified' => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 0],
        'image_url'   => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        'created_at'  => ['type' => 'DATETIME', 'null' => true],
        'updated_at'  => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('programs');
}
    public function down()
    {
        //
    }
}
