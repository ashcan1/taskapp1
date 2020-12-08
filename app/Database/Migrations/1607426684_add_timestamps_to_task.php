<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToTask extends Migration
{
    public function up()
  {
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
              'constraint'     => 5,
              'unsigned'       => true,
              'auto_increment' => true
      ],
      'description' => [
        'type'           => 'VARCHAR',
        'constraint'     => '128',
            ]
        ]);
    }

    public function down()
  {
        $this->forge->dropColumn('task', 'updated_at');
        $this->forge->dropColumn('task', 'created_at');
    }
}
