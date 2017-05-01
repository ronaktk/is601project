<!-- Register page -->
<html>
  <head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="../css/login_page.css">
  </head>
  <body>
    <div class="container">
      <form method="post" action="../index.php">
        <div class="form-input">
          <input type="text" name="user_name" placeholder="username" required>
	  <input type="text" name="first_name" placeholder="firstname" required>
	  <input type="text" name="last_name" placeholder="lastname" required>
	  <input type="text" name="user_email" placeholder="email" required>
	  <input type="password" name="user_password" placeholder="password"
	  required>
	  <input type="hidden" name="action" value="register_user">
	  <input type="submit" value="Register" class="btn-register">
      </form>
    </div>
  </body>
</html>
