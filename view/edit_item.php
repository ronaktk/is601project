<html>
  <head>
    <title>Edit Item</title>
    <link rel="stylesheet" type="text/css" href="../css/todo.css">
  </head>
  <body>
    <div class="header">
      <h2>Edit Item</h2>
      <form action="../index.php" method="post">
        <input type="hidden" name="item_id" value="<?php echo $_POST['item_id'];?>">
        <input type="text" name="new_name" value="<?php echo $_POST['item_name'];?>">
        <input type="date" name="new_date" value="<?php echo $_POST['item_date'];?>">
        <input type="time" step=1 name="new_time" value="<?php echo $_POST['item_time'];?>">
        <input type="hidden" name="action" value="edit_item">
        <input type="submit" value="Update" class="todobutton btn2">
      </form>
    </div>
  </body>
</html>
