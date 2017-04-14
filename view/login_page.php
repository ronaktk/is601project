# Login page
<html>
  <head>
    <title>To-Do List</title>
  </head>
    <body>
      <form method="post" action="index.php">
        <input type="text" name="user_name" placeholder="Enter your name">
	<input type="password" name="user_password" placeholder="Enter your
	password">
	<input type="hidden" name="action" value="check_user">
	<input type="submit" value="Login">
      </form>
    </body>
</html>
