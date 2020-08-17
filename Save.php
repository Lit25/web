<?php
include "./dbb.php";

$id = $_POST['id'];
$pwd = $_POST['pwd'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = mq("insert into signup(id,pwd,phone,email) values('".$id."','".$pwd."','".$phone."','".$email."')");


?>

<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
