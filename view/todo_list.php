<?php
  echo '<h2>Welcome '.$_COOKIE['login'].',</h2>';
  echo '<h3>Below you may find your to-do items.</h3>';
?>

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
	<td>
	  <form action="index.php" method="post">
	    <input type="hidden" name="item_id" value="<?php echo $res['id'] ?>">
	    <input type="hidden" name="action" value="delete_item">
	    <input type="submit" value="Delete">
	  </form>
	</td>
      </tr>
      <?php endforeach; ?>
    </table>
    <form action="view/add_item.php" method="post">
      <input type="submit" value="Add">
    </form>
  </body>
</html>
