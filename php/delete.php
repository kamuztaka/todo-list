<?php
  require 'connect.php';

  if(isset($_POST['delete'])) {
   $deleteId = $_POST['deleteId'];

   $queryDelete = "DELETE FROM todoapp WHERE id = $deleteId";
   $sqlDelete = mysqli_query($con, $queryDelete);

   echo '<script>alert("Successfully Deleted!")</script>';
   echo '<script> window.location.href = "/todo-list-php/index.php" </script>';
  } else {
   echo '<script>alert("Not successfully Deleted!")</script>';

  }
?>