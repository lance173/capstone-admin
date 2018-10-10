<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'usc-library');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');


$connection = new mysqli(DB_HOST,  DB_USERNAME, DB_PASSWORD, DB_NAME);
