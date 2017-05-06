<html>
  <head>
    <title>To-do List
    </title>
    <link rel="stylesheet" type="text/css" href="css/todo.css">
  </head>
  <body>
  <div class="header">
    <?php echo '<h1 style="text-align:center">Welcome
    '.$_COOKIE['login'].'</h1>';?>
    <h2>My To Do List</h2>
  </div>
    <table id="todo">
      <tr>
        <th>Name</th>
	<th>Due Date</th>
	<th>Due Time</th>
	<th></th>
	<th></th>
	<th></th>
      </tr>
      <?php
        if($result == NULL) {
	}
	else
	  foreach($result as $res):
      ?>
      <tr>
	<td><?php echo $res['item_name']; ?></td>
	<td><?php echo $res['item_date']; ?></td>
	<td><?php echo date('h:i A',strtotime($res['item_time'])); ?></td>
	<td>
	  <form action="view/edit_item.php" method="post">
	    <input type="hidden" name="item_id" value="<?php echo $res['id']?>">
	    <input type="hidden" name="item_name" value="<?php echo $res['item_name'] ?>">
	    <input type="hidden" name="item_date" value="<?php echo $res['item_date'] ?>">
	    <input type="hidden" name="item_time" value="<?php echo $res['item_time'] ?>">
	    <input type="submit" value="Edit" class="todobutton btn">
	  </form>
	</td>
	<td>
	  <form action="index.php" method="post">
	    <input type="hidden" name="item_id" value="<?php echo $res['id'] ?>">
	    <input type="hidden" name="action" value="delete_item">
	    <input type="submit" value="Delete" class="todobutton
	    btn">
	  </form>
	</td>
	<td>
	  <form action="index.php" method="post">
	    <input type="hidden" name="item_id" value="<?php echo $res['id'] ?>">
	    <input type="hidden" name="action" value="update_status">
	    <input type="submit" value="Mark as Done" class="todobutton btn">
	  </form>
	</td>
      </tr>
      <?php endforeach; ?>
    </table>
    <form action="view/add_item.php" method="post">
      <input type="submit" value="Add" class="todobutton btn">
    </form>
    <form action="index.php" method="post">
      <input type="hidden" name="action" value="showCompletedItems">
      <input type="submit" value="Completed Tasks" class="todobutton btn">
    </form>
  </body>
</html>
