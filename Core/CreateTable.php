<?php
namespace Core;

use Logger\Logger;


class CreateTable extends Model
{

  public function __construct()
  {
    $this->getDB();
  }

   
  public function createTables()
  {


    $tables_path = ROOT_PATH . '/Core/Database/queries/create/';
    $tables = [
      'users' => 'create_users_table.sql',
      'posts' => 'create_posts_table.sql',

    ];

    foreach ($tables as $name => $fileName) {
      Logger::start();

      $query = file_get_contents($tables_path . $fileName);
      $result = $this->db->exec($query);

      Logger::stop();
      if ($result !== 0) {
        Logger::write('error' . print_r($this->db->errorInfo()), true, $userdata = true);
      }
    }
  }
}
