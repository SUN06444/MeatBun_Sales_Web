<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>編輯會員資料</title>
<?php
include("conn.php");
?>
<style type="text/css">
body {
	background-image:url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 300%;
}
</style>
</head>

<body>
<p>
  <?php

if( isset($_SESSION['SID']) ){
	if( isset($_POST['actionOK'])){
	$sql="UPDATE `member` SET  `name` = '".$_POST['name']."', `sex` = '".$_POST['sex']."', `account` = '".$_POST['account']."', `password` = '".$_POST['password']."', `bday` = '".$_POST['bday']."', `phone` = '".$_POST['phone']."', `address` = '".$_POST['address']."', `email` = '".$_POST['email']."' WHERE `student`.`ID` =".$_GET['SID'];
	}
	 
	 $sql="select * from `member` where ID=".$_GET['SID'] ;
	 $result= mysql_query($sql) or die("SQL ERROR!!");
	if( $record = mysql_fetch_array($result) ){	
		
		?>
</p>
<p>編輯會員資料:</p>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">

 <table width="100%" border="1">
  <tr>
    <td>會員姓名</td>
    <td>
      <input name="name" type="text"  value="<?=$record['name']?>" /></td>
  </tr>
 
  <tr>
    <td>性別</td>
    <td>
    <input type="radio" name="sex" id="sex" value="男" <?php  if($record['sex']=='男') {echo("checked='checked'");}?> />男
    <input type="radio" name="sex" id="sex" value="女" <?php  if($record['sex']=='女') {echo("checked='checked'");}?> />女</label> </td>
  </tr>
  
  <tr>
    <td>帳號</td>
    <td>
      <input name="account" type="text"  value="<?=$record['account']?>" /></td>
  </tr>
  <tr>
  <td>密碼</td>
    <td> <input name="password" type="text"  value="<?=$record['password']?>" /></td>
  </tr>
  <tr>
    <td>生日</td>
    <td> <input name="bday" type="text"  value="<?=$record['bday']?>" /></td>
  </tr>
  <tr>
    <td>電話</td>
    <td> <input name="phone" type="text"  value="<?=$record['phone']?>" /></td>
  </tr>
  <tr>
    <td>住址</td>
    <td> <input name="address" type="text"  value="<?=$record['address']?>" /></td>
  </tr>
   <tr>
   <tr>
    <td>email</td>
    <td> <input name="email" type="text"  value="<?=$record['email']?>" /></td>
  </tr>
   
  <tr>
  	<td colaspan="2"><input name="actionOK" type="submit" id= "button" value="送出" /></td>
  </tr>
</table>
</form>


<?
	}
}else{
	echo("還沒登入系統喔!!");
}
?>

<p><a href="Mindex.php">回後端管理系統</a></p>
</body>
</html>