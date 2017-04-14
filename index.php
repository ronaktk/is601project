<?php
//require('db_connection.php');
$action = filter_input(INPUT_POST,"action");

if($action == NULL) {
  $action = "display_login_page";
}

if($action == "display_login_page") {
  include('view/login_page.php');
}

?>
