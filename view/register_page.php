<!-- Register page -->
<html>
  <head>
    <title>To-Do List</title>
  </head>
  <body>
    <div>
      <form method="post" action="../index.php">
        <input type="text" name="user_name" placeholder="username">
	<input type="text" name="first_name" placeholder="firstname">
	<input type="text" name="last_name" placeholder="lastname">
	<input type="text" name="user_email" placeholder="email">
	<input type="password" name="user_password" placeholder="password">
	<input type="hidden" name="action" value="register_user">
	<input type="submit" value="Register">
      </form>
    </div>
  </body>
</html>
