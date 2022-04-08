<?php
  require 'connect.php';

  if(isset($_POST['create'])) {
    $task = $_POST['newTask'];

    $queryCreate = "INSERT INTO `todoapp`(`id`, `task`) VALUES (null, '$task')";
    $sqlCreate = mysqli_query($con, $queryCreate);

    echo '<script>alert("Successfully Created!")</script>';
    echo '<script>window.location.href = "/todo-list-php/index.php" </script>';
  } else {
    echo '<script>alert("Not Successful!")</script>';
  }
?>