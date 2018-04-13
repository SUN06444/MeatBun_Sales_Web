<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員管理</title>
</head>
<?php
include("conn.php");
?>
<?
$M=$_SESSION['SID'];
	if( $M=='9' | $M=='10'  | $M=='11'){
?>
<style type="text/css">
body {
	background-image:url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 500%;
}
</style>
<body>
<form id="form2" name="form2" method="get" action="">
  <h1 align="center"><strong>會員管理系統:</strong></p></h1>
  <h3>
    <div align="center">
      <p align="right"> <a href="Mindex.php">後端管理系統</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
      <p>輸入會員姓名:
        <input type="text" name="fname" id="fname" />
        <input type="submit" name="found" id="found" value="搜尋" />
     &nbsp;&nbsp; </p>
      </p>
  </div></h3>
  <p align="center">&nbsp;</p>
  

  <div align="center">
    <table width="60%" border="1">
      <tr>
        <td width="8%"><div align="left">會員姓名</div></td>
        <td width="6%">性別</td>
        <td width="9%">帳號</td>
        <td width="10%">密碼</td>
        <td width="11%">生日</td>
        <td width="11%">電話</td>
        <td width="13%">住址</td>
        <td width="13%">email</td>
        <td width="19%"><div align="center">操作</div></td>
      </tr>
      
  <?
$pagenum=4;
$numpage=1;
	if( isset ($_GET['page'])) {
		$numpage=$_GET['page']*1;
	}
	$startnum=($numpage-1)*$pagenum;

if( isset($_GET['found'])){
	$name=$_GET['fname'];
		$sql="SELECT * FROM `member` WHERE `name` LIKE '%".$name."%' order BY ID" ;
	}else{
 		$sql="SELECT * FROM `member` order BY ID";
	}
	
$all_result = mysql_query($sql);
$total_records = mysql_num_rows($all_result);

//計算總頁數=(總筆數/每頁筆數)後無條件進位。
$total_pages = ceil($total_records/$pagenum);


$sqllimit=$sql." limit ".$startnum.",".$pagenum;
// echo $sqllimit."<br>";
	$result= mysql_query($sqllimit) or die("SQL ERROR!!");
	while( $record = mysql_fetch_array($result) ){
?> 
      
      <tr>
        <td><div align="left">
          <?=$record['name']?>
        </div></td>
        <td><?=$record['sex']?></td>
        <td><?=$record['account']?></td>
        <td><?=$record['password']?></td>
        <td><?=$record['bday']?></td>
        <td><?=$record['phone']?></td>
        <td><?=$record['address']?></td>
        <td><?=$record['email']?></td>
        <td><div align="center"><a href="Medit.php?SID=<?=$record['ID']?>">編輯</a> <a href="?SID=<?=$record['ID']?>&action=del">刪除</a></div></td>
      </tr>
  <?
}
?>
  </table>
    
  </div>
  <p align="center">
  <?
if($numpage!=1){
?>
  <a href="?page=1&found=<?=$found?>&fname=<?=$_GET['fname']?>">第一頁</a>
  <a href="?page=<?=$numpage-1?>&found=<?=$found?>&fname=<?=$_GET['fname']?>">上一頁</a>
  <?
}
for($i=1;$i<=$total_pages;$i++){
?>
  <a href="?page=<?=$i?>&found=<?=$found?>&fname=<?=$_GET['fname']?>"><?=$i?></a>
  <?
}
if($numpage!=$total_pages){
?>
  <a href="?page=<?=$numpage+1?>&found=<?=$found?>&fname=<?=$_GET['fname']?>">下一頁</a>
  <a href="?page=<?=$total_pages?>&found=<?=$found?>&fname=<?=$_GET['fname']?>">最後頁</a>
  <?
}
?>  
</form>
<div align="right"></div>
</body>
<?
}
?>
</html>