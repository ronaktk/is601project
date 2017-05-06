<html>
  <head>
    <title>Completed Items</title>
    <link rel="stylesheet" type="text/css" href="css/todo.css">
  </head>
  <body>
    <div class="header">
      <h2>Completed Items</h2>
    </div>
    <table id="todo">
      <tr>
        <th>Name</th>
	<th>Due Date</th>
	<th>Due Time</th>
      </tr>
      <?php 
        if($result == NULL)
          echo "error";
        else
	  foreach($result as $res):?>
	  <tr>
	    <td><?php echo $res['item_name'];?></td>
	    <td><?php echo $res['item_date'];?></td>
	    <td><?php echo date('h:i A',strtotime($res['item_time']));?></td>
	  </tr>
	<?php endforeach; ?>
    </table>
  </body>
</html>
