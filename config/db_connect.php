<?php
// Connect to database
// For Heroku ClearDB
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}
