<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "12345");
define("DB_NAME", "hotel");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    echo "we are connected";
}
