<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首頁</title>
<?php
include('conn.php');
?>

<style type="text/css">
body {
	background-image: url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 160%;
}
</style>
</head>
 <?
	if( isset($_POST['actionOK'])){
	
	$addsql="INSERT INTO `member` (`name`, `sex`, `account`, `password`, `bday`, `phone`, `address`, `email`) VALUES ('".$_POST['name']."', '".$_POST['sex']."', '".$_POST['account']."','".$_POST['password']."', '".$_POST['bday']."','".$_POST['phone']."', '".$_POST['address']."', '".$_POST['email']."');";
?>

<?
	if(mysql_query($addsql) ){		
?>
 <script type="text/javascript">
alert('恭喜你加入會員!!');
alert('登入後，即可進行購物!!');
  </script>
<?
		}           
	
?>

<?
		}	
?>	
<body >
<center>
<h2><img src="images/talk4.png" width="977" height="189" /></h2>

</center>
 <h3 align="center">  
   <p align="right">商品資訊  | <a href="describe1.php">購物說明</a> | 連絡電話 |  <a href="add-member.php">加入會員</a> | <a href="login.php">登入會員</a> &nbsp;&nbsp;      </h3>
    
</head>  
<body>

 <center>   
  </p>
  <table width="68%" height="150" >
    <tr>
      <td width="8%" ><p><strong><? include('menu.php'); ?></strong></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
   
   
     </td>
     
      <td width="91%">

  <div align="center">
    <?
$sqllimit="SELECT * FROM `product_list` WHERE `ID` BETWEEN 1 AND 2 ORDER BY `product_list`.`ID` ASC ";
$result = mysql_query($sqllimit) or die('SQL ERROR!!');
while( $record = mysql_fetch_array($result) ){
?>       
    
  </div>
  <form id="form1" name="form1" method="post" action="">
    <div align="center">
      <table width="80%" height="159" >
        <tr>
          <td width="18%" rowspan="3">
            <div align="center"><img src="images\<?=$record['Pic']?>" width="89%" height="128"style="border:8px #880000 groove;"></div>            
            </td>
          
          	<td width="81%" height="28" bgcolor="#660000"><strong> <font  color="white">產品
           		 <?=$record['ID']?></font>
            	</strong>
            </td>
         </tr>
         
        <tr>
          <td height="100" bgcolor="#DEB887"><h3><?=$record['Pname']?></h3>
            <p><strong>價格:</strong>
              <?=$record['Price']?>
              <strong>元</strong></p>
              </td>
          </tr>
      </table>
    </div>
  </form>
  <div align="center">
    <?
}
?>
    <img src="../end2/g.png" alt="" width="24" height="28" /></div></td>
    </tr>
</table>
  <p>&nbsp;</p>
</body>
</html>