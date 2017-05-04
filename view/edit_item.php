<html>
  <head>
    <title>Edit Item</title>
  </head>
  <body>
    <form action="../index.php" method="post">
      <input type="hidden" name="item_id" value="<?php echo $_POST['item_id'];?>">
      <input type="text" name="new_name" value="<?php echo $_POST['item_name'];?>">
      <input type="date" name="new_date" value="<?php echo $_POST['item_date'];?>">
      <input type="hidden" name="action" value="edit_item">
      <input type="submit" value="Update">
    </form>
  </body>
</html>
