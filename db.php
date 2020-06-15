<?php

const DB_HOST = 'localhost';
const DB_NAME = 'banka';
const USERNAME = 'root';
const PASSWORD = '';

$conn = new mysqli(DB_HOST, USERNAME, PASSWORD, DB_NAME);

if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}

?>