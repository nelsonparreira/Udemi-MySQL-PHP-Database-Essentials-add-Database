<?php
// procedual way to connect
//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

// OOP way to connect
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS, DB_NAME);
