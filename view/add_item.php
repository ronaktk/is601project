<html>
  <head>
    <title>Add Item</title>
    <link rel="stylesheet" type="text/css" href="../css/todo.css">
  </head>
  <body>
    <div class="header">
      <h2>Add Item</h2>
      <form action="../index.php" method="post">
        <input type="text" name="item_name">
        <input type="date" name="item_date">
        <input type="time" step=1 name="item_time">
        <input type="hidden" name="action" value="add_item">
        <input type="submit" value="Add" class="todobutton btn2">
      </form>
  </body>
</html>
