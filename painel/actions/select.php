<?php

/**
* Class select paths and files
*/
class Select
{

  public function SELECT($fields, $table, $where)
  {

    try {

      $values = $db->query("SELECT * FROM users WHERE user = '$user' && pass = '$pass'");
      $busca = $valores->fetchAll(PDO::FETCH_ASSOC);
      SELECT `id`, `user`, `pass` FROM `users` WHERE 1
      return ;


    } catch (\Exception $e) {

      return 'ERROR' . $e->getMessage();

    }
  }
}
