<?php
include("conn.php");
?>
<p>
 <?
	if( isset($_POST['actionOK'])){
	
	$addsql="INSERT INTO `member` (`name`, `sex`, `account`, `password`, `bday`, `phone`, `address`, `email`) VALUES ('".$_POST['name']."', '".$_POST['sex']."', '".$_POST['account']."','".$_POST['password']."', '".$_POST['bday']."','".$_POST['phone']."', '".$_POST['address']."', '".$_POST['email']."');";
?>

<?
	if(mysql_query($addsql) ){		
		echo("恭喜你加入會員!!");
		echo("點選下方首頁，進行登入，即可進行購物!!");
		}            
		}else{
			echo("會員加入失敗，請重新嘗試!!");
		}	
?>	
	<p><a href="index.php">回登入首頁</a></p>		