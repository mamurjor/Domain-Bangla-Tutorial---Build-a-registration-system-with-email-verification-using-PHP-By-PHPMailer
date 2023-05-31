<?php

$servername = "localhost";

$username = "mamurjo1_email"; // user  name for the server

$password = "Ay0}6d0RCpfe"; // password for the server

$conn = mysqli_connect($servername, $username, $password,"mamurjo1_email");

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}

?>
