<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>結帳單</title>
<?php
include('conn.php');
?>
<style type="text/css">
body {
	background-image:url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 300%;
}
</style>
</head>

<?
if( isset($_SESSION['Saccount']) ){	
?>
<body>
 <h4>
   <p align="right"> <a href="pcheck.php">回確認清單</a> | <a href="logout.php">會員登出</a> &nbsp;&nbsp;
 </h4>
  <h2><p align="center"><strong>結帳單</strong></p></h2>
<div align="center">

<table width="65%" height="300"    style="border: 3px #8B4513 solid; ; padding: 5px; font-weight: bold;" rules="all" cellpadding='20';>
      <tr>
        <td><div align="center" style="font-size: 20px;"><strong>商品明細</strong></div></td>
        <td ><div align="center" style="font-size: 20px;"><strong>價格</strong></div></td>
        <td><div align="center" style="font-size: 20px;"><strong>數量</strong></div></td>
        <td ><div align="center" style="font-size: 20px;"><strong>小計</strong></div></td>
      </tr>
<?php
    if(isset($_SESSION['Plist'])){
        foreach ($_SESSION['Plist'] as $key=> $p ){
			if($p['ID']==$_SESSION['SID']){
}
?>	  
	<tr>
        <td><div align="center">
		<? echo "<span style='color:blue'>".$p['Pname']."</span>";?></div>
      </td>
		
      <td><div align="center">
		<? echo "<span style='color:blue'>".$p['Price']."</span>";?></div>
      </td>
        <td ><div align="center">
		<? echo "<span style='color:blue'>".$p['Quantity']."</span>";?></div>	
      </td>
        <td ><div align="center">
		<? echo "<span style='color:blue'>".$p['Price']*$p['Quantity'];?><? $total+=($p['Price']*$p['Quantity'])."</span>";?></div>
      </td>
    </tr>
<?
	}
?>  
  </table>
  
<table width="65%" height="50" =>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td width="12%"><div align="right"><strong>
        <?   echo "<span style='color:red'>"."總金額：".$total." 元"."</span>";?></strong></div></td>
        <td width="4%">&nbsp;</td>
    </tr>  
  </table>
</div>
<h2><p align="center"><strong>付款方式與寄送資訊</strong></p></h2>
<div align="center">
  <table width="65%" height="300" border="1"  
  style="border:3px #8B4513 solid;;padding:5px;" rules="all" cellpadding='5';>
   	<tr>
<?
$sql="SELECT * FROM `member` WHERE `account`='".$_SESSION['Saccount']."'";
$result = mysql_query($sql) or die('SQL ERROR!!');
while( $record = mysql_fetch_array($result) ){
?> 
      <td colspan="2"><strong>配送方式：</strong>宅配</td>
    </tr>
    <tr>
      <td colspan="2"><strong>付款方式：</strong>銀行</td>
    </tr>
    <tr>
      <td colspan="2"><strong>收件者：</strong><?=$record['account'];?></td>
    </tr>
    <tr>
      <td><strong>連絡電話：</strong><?=$record['phone'];?></td>
      <td><strong>Email：</strong><?=$record['email'];?></td>
    </tr>
    <tr>
      <td colspan="2"><strong>取貨地址：</strong><?=$record['address'];?></td>
    </tr>
  

</td>
  </tr>
  </table>
  
  <table width="65%" height="50" =>
      <tr>
        <td colspan="2"><p>&nbsp;</p>
        <p>&nbsp;</p></td>
        <td width="94%"> 
          <form action="index2.php" method="post">
            <div align="right">
              <input name="Pname" value="<?=$p['Pname'];?>" type="hidden" />
              <input name="Price" value="<?=$p['Price'];?>" type="hidden" />
              <input name="Quantity" value="<?=$p['Quantity'];?>" type="hidden" />
              <input name="PID" value="<?=$p['PID'];?>" type="hidden" />
              <input name="total" value="<?=$total;?>" type="hidden" />
              <input name="MID" value="<?=$record['ID'];?>" type="hidden" />
              <input name="pay" type="submit" value="確認無誤結帳" 
              style="height:30px;width:150px;font: 16px ;" />
            </div>
          </form>
        </td>
        <td width="2%">&nbsp;</td>
  <?
}
?>    </tr>  
  </table>
</div>
</body>

<?
}
}
?>
</html>