<html>
  <head>
    <title>
    </title>
  </head>
  <body>
    <table>
      <?php
        if($result == NULL)
	  echo '<h2>You do not have any to-do items. You can start adding here.</h2>';
	else
	  foreach($result as $res):
      ?>
      <tr>
        <td></td>
	<td><?php echo $res['item_name']; ?></td>
	<td><?php echo $res['item_date']; ?></td>
	<td><?php echo date('h:i A',strtotime($res['item_time'])); ?></td>
	<td>
	  <form action="view/edit_item.php" method="post">
	    <input type="hidden" name="item_id" value="<?php echo $res['id']?>">
	    <input type="hidden" name="item_name" value="<?php echo $res['item_name'] ?>">
	    <input type="hidden" name="item_date" value="<?php echo $res['item_date'] ?>">
	    <input type="hidden" name="item_time" value="<?php echo $res['item_time'] ?>">
	    <input type="submit" value="Edit">
	  </form>
	</td>
	<td>
	  <form action="index.php" method="post">
	    <input type="hidden" name="item_id" value="<?php echo $res['id'] ?>">
	    <input type="hidden" name="action" value="delete_item">
	    <input type="submit" value="Delete">
	  </form>
	</td>
	<td>
	  <input type="checkbox">Mark as done
	</td>
      </tr>
      <?php endforeach; ?>
    </table>
    <form action="view/add_item.php" method="post">
      <input type="submit" value="Add">
    </form>
  </body>
</html>
