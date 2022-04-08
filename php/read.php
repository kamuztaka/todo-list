<?php
  require('connect.php');

  $queryAccounts = "SELECT * FROM todoapp";
  $sqlAccounts = mysqli_query($con, $queryAccounts);
  // $results = mysqli_fetch_array($sqlAccounts);
?>