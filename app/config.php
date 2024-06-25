<?php
require_once(realpath(dirname(__FILE__, 2)) . '/vendor/sergeytsalkov/meekrodb/db.class.php');

// require_once "../vendor/sergeytsalkov/meekrodb/db.class.php";
DB::$dsn = 'mysql:host=localhost;dbname=workout_gym';
DB::$user = 'root';
DB::$password = '';
