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

function isUserRegistered($user_name,$user_password) {
  global $db;
  $query = 'select * from user_info where user_name = :username
  and user_password = :userpass';
  $statement = $db->prepare($query);
  $statement->bindValue(':username',$user_name);
  $statement->bindValue(':userpass',$user_password);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count = $statement->rowCount();
  if($count == 1) {
    setcookie('login',$user_name, time()+3600);
    $_COOKIE['login']=$user_name;
    setcookie('userid',$result[0]['id'], time()+3600);
    $_COOKIE['userid']=$result[0]['id'];
    setcookie('islogged',true, time()+3600);
    $_COOKIE['islogged']=true;
    return true;
  } else {
      unset($_COOKIE['login']);
      setcookie('login',false);
      setcookie('userid',false);
      setcookie('islogged',false);
      return false;
  }
}

function displayItems($user_id) {
  global $db;
  $query = 'select * from todo_list where user_id= :userid';
  $statement = $db->prepare($query);
  $statement->bindValue(':userid',$user_id);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}

function addItem($user_id,$item_name) {
  global $db;
  $query = 'insert into todo_list(user_id,item_name,item_date) values(:userid,:item_name,CURRENT_DATE)';
  $statement = $db->prepare($query);
  $statement->bindValue(':userid',$user_id);
  $statement->bindValue(':item_name',$item_name);
  $statement->execute();
  $statement->closeCursor();
}

function deleteItem($user_id,$item_id) {
  global $db;
  $query = 'delete from todo_list where id = :item_id and user_id = :userid';
  $statement = $db->prepare($query);
  $statement->bindValue(':item_id',$item_id);
  $statement->bindValue(':userid',$user_id);
  $statement->execute();
  $statement->closeCursor();
}

function editItem($item_id,$new_name,$new_date) {
  global $db;
  $query = 'update todo_list set item_name= :new_name, item_date= :new_date where id= :userid';
  $statement = $db->prepare($query);
  $statement->bindValue(':new_name',$new_name);
  $statement->bindValue(':new_date',$new_date);
  $statement->bindValue(':userid',$item_id);
  $statement->execute();
  $statement->closeCursor();
}

?>
