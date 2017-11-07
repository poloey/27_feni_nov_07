<?php
class Db
{
  private $dsn = 'mysql:host=localhost;dbname=auth';
  private $user = 'root';
  private $password = '';
  private $options = [];
  public function connection ()
  {
    try {
      $connection = new PDO($this->dsn, $this->user, $this->password, $this->options);
      return $connection;
    } catch (Exception $e) {
      die ('connection failed');
    }

  }
}

$db = new Db();
$connection = $db->connection();
var_dump($connection);


