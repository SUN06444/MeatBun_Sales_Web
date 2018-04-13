<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理者頁面</title>
<?php
include('conn.php');
?>
<style type="text/css">
body {
	background-image:url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 250%;
}
</style>
</head>

</p>
<p></p>
<body>  
<?
$M=$_SESSION['SID'];
	if( $M=='9' | $M=='10'  | $M=='11'){
?>
<?
	echo("帳號:".$_SESSION['Saccount']."，登入成功，管理者: ".$_SESSION['Sname']." 歡迎你"."<br>");
?>

<center>
<h2><img src="images/talk4.png" width="977" height="189" /></h2>
</center>


 
  <h2 align="center">&nbsp;</h2>
  <h1 align="center">~後端管理系統~
  </p>
  </h1>
  <p align="center"><a href="addproduct.php">新增商品</a> | <a href="Mmember.php">會員管理</a> | <a href="logout.php">管理員登出</a> &nbsp;&nbsp;</p>
</div>



</body>


<?
	}else{
		?>
        <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


        <?
	echo '<p align="center"><font size="5"><b>非管理者，並無權限!</b></font></p>';	
	}
	echo '<p align="center"><font size="4"><a href="index2.php">返回上一頁</a></font></p>';
?>

</html>