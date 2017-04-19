<!-- Login page -->
<html>
  <head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="css/login_page.css">
  </head>
    <body>
      <div class="container">
        <img src="images/image1.png" alt="error">
        <form method="post" action="index.php">
	  <div class="form-input">
            <input type="text" name="user_name" placeholder="Enter your name">
	    <input type="password" name="user_password" placeholder="Enter your password">
	  </div>
	  <input type="hidden" name="action" value="check_user">
	  <input type="submit" value="Login" class="btn-login">
        </form>
        <form method="post" action="view/register_page.php">
	  <div class="form-input">
            <input type="submit" value="Register" class="btn-register">
	  </div>
        </form>
      </div>
    </body>
</html>
