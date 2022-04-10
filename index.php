<?php
  require './php/read.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todo App</title>
  <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="main">
    <div class="title">
      <h1>Todo List</h1>
    </div>

    <div class="content">
      <table class="table-container">
        <tr>
          <th>NO.</th>
          <th>TASK</th>
          <th>ACTIONS</th>
        </tr>
        <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
        <tr>
          <td><?php echo $results['id'] ?> </td>
          <td><?php echo $results['task'] ?></td>
          <td>
            <form action="/todo-list-php/php/delete.php" method="post" class="delete-btn">
              <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?> ">
              <input type="submit" value="DELETE" class="delete" name="delete">
            </form>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>

    <div class="write">
      <form action="/todo-list-php/php/create.php" method="post">
        <input type="text" class="add" name="newTask" />
        <input type="submit" value="ADD" class="circle" name="create">
      </form>
    </div>
  </div>
</body>

</html>