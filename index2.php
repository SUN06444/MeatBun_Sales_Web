<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登入後頁面</title>
<?php
include('conn.php');
?>
<style type="text/css">
body {
	background-image:url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 160%;
}
</style>
<h3><?
echo("帳號: ".$_SESSION['Saccount']."，登入成功！"."<br>");
echo("會員: ".$_SESSION['Sname']." ，歡迎您！");
?> </h3>
<div align="right">
<?
	if( isset($_POST['pay']) ){	
	foreach ($_SESSION['Plist'] as $key=> $p ){
		$sql="INSERT INTO `shopcar` (`id`,`MID`,`PID`,`Pname`,`Price`,`Quantity`,`total`) VALUES (NULL,'".$_POST['MID']."','".$p['PID']."','".$p['Pname']."','".$p['Price']."','".$p['Quantity']."', '".$_POST['total']."')";   
		mysql_query($sql);
		
	}
	?>
<script type="text/javascript">
alert('結帳成功，可以至訂單明細查詢!!');
</script>
    <?
	//echo ("結帳成功，可以至訂單明細查詢!");
		 unset ($_SESSION['Plist'])
		 		

?>
<?

	}

?>

</div>

</head>
<body>
<center>
<h2><img src="images/talk4.png" width="977" height="183" /></h2>
</center>

<div align="right">

<?
if( isset($_SESSION['SID']) ){
?>
<a href="detail.php">訂單查詢</a> | <a href="describe2.php">購物說明</a>  | <a href="pcheck.php">查看購物車</a> | <a href="Mindex.php">管理者設定</a>| <a href="logout.php">會員登出</a>  &nbsp;&nbsp;
</div>
<h4>
<p align="right"></h4>
  <center>   
  </p>
 
<table width="68%" height="150" >
    <tr>
      <td width="8%" ><p><strong><? include('menu2.php'); ?></strong></p></td>
      <td width="91%">
<?
$sqllimit="SELECT * FROM `product_list`  ORDER BY `product_list`.`ID` ASC";
$result = mysql_query($sqllimit) or die('SQL ERROR!!');
while( $record = mysql_fetch_array($result) ){
?>         
    <div align="center">
        <table width="80%" height="162" >
          <tr>
            <td width="18%" rowspan="3">
<div align="center"><img src="images\<?=$record['Pic']?>" width="89%" height="128"style="border:8px #880000 groove;"></div>
			</td>
           <td width="81%" bgcolor="#660000"><strong> <font color="white">產品
           		 <?=$record['ID']?></font>
            	</strong>
            </td>
          </tr>
 <?
$sql2="SELECT * FROM member WHERE `ID` = '".$_SESSION['SID']."' ";
$result2 = mysql_query($sql2) or die('SQL ERROR!!');
while( $record2 = mysql_fetch_array($result2) ){
?> 	         
          <tr>
          <td height="100" bgcolor="#DEB887"><h3><?=$record['Pname']?></h3>
            <p><strong>價格:</strong>
              <?=$record['Price']?>
              <strong>元</strong></p>
            <form  method="post"> 
         數量:
             <select name="Quantity" >
      <?php
      for($i=1;$i<=20;$i++){
	  ?>
        <option value="<?=$i?>"><?=$i?></option>
      <?php
	  }
	  ?>  
      </select>
            	<input name="PID" value="<?php echo $record['ID'];?>" type="hidden" />
            	<input name="ID" value="<?php echo $record2['ID'];?>" type="hidden" />
            	<input name="id" value="<?php echo $record['ID'];?>" type="hidden" />
                <input name="Pname" value="<?php echo $record['Pname'];?>" type="hidden" />
                <input name="Price" value="<?php echo $record['Price'];?>" type="hidden" />
                <input name="Pic" value="<?php echo $record['Pic'];?>" type="hidden" />
                <input name="add" type="submit" value="加入購物車" />
            </form>
            </td>
          </tr>
<?
}
}
?> 
        </table>
        </div>
      </td>
    </tr>
  </table>
<?
}
?>
</body>

<?
if(isset($_POST['add'])){ ///按下加入購物車後
    $arr =array("ID"=>$_POST['ID'],"PID"=>$_POST['PID'],"Pname" =>$_POST['Pname'],"Price" =>$_POST['Price'],"Pic"=> $_POST['pic'],"Quantity"=>$_POST["Quantity"]);
    $_SESSION['Plist'][]=$arr; //輸入到SESSION[]鎮列中
    $_POST=""; //將POST刪除
?>
<?
if(isset($_SESSION['Plist'])){
  //  print_r($_SESSION['Plist']);
?>
 <script type="text/javascript">
alert('商品已加入!');
  </script>
<?

}
?>

<?php
}
?>
</html>
