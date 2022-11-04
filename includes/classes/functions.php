<?php
require_once 'config.php';

function secure($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function exist_Email($email)
{
  $sql = "select * from user where email='".$email."'";
  $db=new database();
  $res=$db->openConnection()->query($sql);
  $count=$res->rowCount();
  if ($count==0) {
    return false;
  } 
  else{
    return true;
  }
}


?>