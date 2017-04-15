<?php

function
registerUser($first_name,$last_name,$user_name,$user_password,$user_email) {
  global $db;
  $query = 'select * from user_info where user_name = :username';
  $statement = $db->prepare($query);
  $statement->bindValue(':username',$user_name);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  if($count == 0) {
    echo "Account already exists";
  }
  if($count > 0) {
    return true;
  } else {
    $query = 'insert into
    user_info(first_name,last_name,user_name,user_password,user_email)
    values(:firstname,:lastname,:username,:userpass,:useremail)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstname',$first_name);
    $statement->bindValue(':lastname',$last_name);
    $statement->bindValue(':username',$user_name);
    $statement->bindValue(':userpass',$user_password);
    $statement->bindValue(':useremail',$user_email);
    $statement->execute();
    $statement->closeCursor();
    return false;
  }
}

?>