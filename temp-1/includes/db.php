<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "12345");
define("DB_NAME", "hotel_db");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    echo "connected to db";
} else {
    echo "FAILED";
}
