<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "todo-list";

  $con = mysqli_connect($host, $username, $password, $database);

  if ($con -> connect_error) {
    die("Connection failed: " . $con->connect_error);
  }else {
    // echo "Connected successfully";
  }
?>