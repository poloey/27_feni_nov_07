<?php
require 'core/Db.php';
require 'config.php';
$connection = new Db($dbconfig);
require 'controllers/indexController.php';
