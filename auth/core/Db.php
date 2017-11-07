<?php
class Db {
  public function __construct ($dbconfig)  {
    return new PDO($dbconfig['dsn'], $dbconfig['username'], $dbconfig['password'], $dbconfig['options']);
  }
}