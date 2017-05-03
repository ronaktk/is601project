<?php
require('model/db_connection.php');
require('model/functions.php');
$action = filter_input(INPUT_POST,"action");

if($action == NULL) {
  $action = "display_login_page";
}

if($action == "display_login_page") {
  include('view/login_page.php');
}

if($action == "register_user") {
  $firstname = filter_input(INPUT_POST,'first_name');
  $lastname = filter_input(INPUT_POST,'last_name');
  $username = filter_input(INPUT_POST,'user_name');
  $userpass = filter_input(INPUT_POST,'user_password');
  $useremail = filter_input(INPUT_POST,'user_email');
  $exit = registerUser($firstname,$lastname,$username,$userpass,$useremail);
  if($exit == true) {
    include('view/error1.php');
  } else {
    header("Location: index.php");
  }
}

if($action == "check_user") {
  $username = filter_input(INPUT_POST,'user_name');
  $userpass = filter_input(INPUT_POST,'user_password');
  $success = isUserRegistered($username,$userpass);
  if($success == true) {
    //display welcome page
    // echo $_COOKIE['login'];
    $result = displayItems($_COOKIE['userid']);
    include('view/todo_list.php');
  } else {
      //display error
      echo "error";
  }
}

if($action == "add_item") {
  if(isset($_POST['item_name'])) {
    addItem($_COOKIE['userid'], $_POST['item_name']);
  }
  $result = displayItems($_COOKIE['userid']);
  include('view/todo_list.php');
}

if($action == "delete_item") {
  if(isset($_POST['item_id'])) {
    $selected = $_POST['item_id'];
    deleteItem($_COOKIE['userid'],$selected);
  }
  $result = displayItems($_COOKIE['userid']);
  include('view/todo_list.php');
}

?>
