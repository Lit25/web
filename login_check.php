<?php
include "./dbb.php";
if($_POST["userid"] == "" || $_POST["userpw"] == ""){
        echo '<script> alert("아이디나 패스워드를 입력하세요"); history.back(); </script>';
}else{
        $password = $_POST['userpw'];
        $sql = mq("select * from signup where id='".$_POST['userid']."'");
        $signup = $sql->fetch_array();
        $pw = $signup['pwd'];

        if($password == $pw){
                $_SESSION['userid'] = $signup["id"];
                $_SESSION['userpw'] = $signup["pwd"];
              

                echo "<script>alert('로그인되었습니다.'); location.href='./logout.php';</script>";
        } else {
                echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
        }
}
?>
