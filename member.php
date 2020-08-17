<?php
 $host = '139.180.204.167';
 $user = 'root';
 $pw = '1234';
 $dbName = 'hyunsung';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=md5($_POST['pwd']);
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 
 $sql = "insert into signup(id, pwd,phone, email)";
 $sql = $sql. "values('$id','$password','$phone','$email')";
 if($mysqli->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
?>
