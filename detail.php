<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>訂單明細表</title>
<?php
include('conn.php');
?>
<style type="text/css">
body {
	background-image: url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 800%;
}
</style>
</head>
<?
if( isset($_SESSION['Saccount']) ){
?>
<body>
<h2 align="center">&nbsp;</h2>
<h2 align="center">訂單明細表:</h2>
</p>
<div align="center">
<table width="70%">
    <tr>
      <td><h3>訂購時間:</h3></td>
    </tr>
  </table>
    <tr>
  <table width="70%" border="1" style="border: 3px #8B4513 solid; font-weight: bold; font-size: 20px;">
   
    <tr>
      <td bgcolor="#FF8888"><div align="center">商品名稱</div></td>
      <td bgcolor="#FF8888"><div align="center">單價</div></td>
      <td bgcolor="#FF8888"><div align="center">數量</div></td>
      <td bgcolor="#FF8888"><div align="center">商品總額</div></td>
    </tr>
    <tr>
  <?
$sql="SELECT shopcar.id,MID,PID,shopcar.Pname,Pic,shopcar.Price,shopcar.Quantity,shopcar.total,name,account FROM `shopcar` INNER JOIN `member` ON `member`.`ID`=`shopcar`.`MID` INNER JOIN `product_list` ON `product_list`.`ID`=`shopcar`.`PID` WHERE `MID`='".$_SESSION['SID']."' ";
$result = mysql_query($sql) or die('SQL ERROR!!');
while( $record = mysql_fetch_array($result) ){
?> 
  <?
$total=$record['total'];
?>
      <td bgcolor="#FAEBD7"><div align="center"><?=$record['Pname']?></div></td>
      <td bgcolor="#FAEBD7"><div align="center"><?=$record['Price']?></div></td>
      <td bgcolor="#FAEBD7"><div align="center"><?=$record['Quantity']?></div></td>
      <td bgcolor="#FAEBD7"><div align="center"><?=$record['Price']*$record['Quantity']?></div></td>
    </tr>  
  <?
}
?> 
  </table>
</div>
<div align="center">
  <table width="70%">
    <tr>
      <td width="59%">訂單總金額 ：<?=$total?>元</td>
      <td width="41%"><div align="right"><a href="index2.php">返回上一頁</a></div></td>
    </tr>
  </table>
</div>
</body>
<?
}
?>
</html>