<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>確認購物車表單</title>
<?php
include('conn.php');
?>
<style type="text/css">
body {
	background-image:url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 1800%;
}
</style>
</head>

<?
if( isset($_SESSION['SID']) ){
?>
<body>
 	<h4>
   <p align="right">  
<a href="index2.php">繼續選購</a> | <a href="logout.php">會員登出</a> &nbsp;&nbsp;
   </h4>
<?
if( isset($_POST['deleteall'])){ //刪除全部
    session_destroy();
}elseif(isset($_POST['delete'])){//刪除某個
   if(isset($_POST['delete_value'])){
        array_splice($_SESSION['Plist'],$_POST['delete_value'],1); 
?>		
<script type="text/javascript">
alert('刪除成功!!');
</script>
<?
   }
}
?>

<?
if(isset($_SESSION['Plist'])){
//   print_r($_SESSION['Plist']);
	}
}
?>
  <div align="center">
<p><? echo ("會員".$_SESSION['Sname'])."，請確認購物車目前訂單" ?>:</p>
    <table width="75%" border="1" style="border: 3px #8B4513 solid; font-size: 20px;"   >
      <tr>
        <td bgcolor="#FF8888"><div align="center" >產品名稱</div></td>
        <td bgcolor="#FF8888"><div align="center" >單價</div></td>
        <td bgcolor="#FF8888"><div align="center" >數量</div></td> 
        <td bgcolor="#FF8888"><div align="center" >小計</div></td> 
        <td bgcolor="#FF8888"><div align="center">操作</div></td>
      </tr>
<?php
    if(isset($_SESSION['Plist'])){
        foreach ($_SESSION['Plist'] as $key=>$p ){
			if($p['ID']==$_SESSION['SID']){
?>
        <tr>
        <td bgcolor="#FAEBD7"><div align="center" ><? //echo $_SESSION['SID']?><? echo $p['Pname'];?></div></td>	
       
        <td bgcolor="#FAEBD7"><div align="center" ><?php echo $p['Price'];?></div></td>
        <td bgcolor="#FAEBD7"><div align="center" ><?php echo $p['Quantity'];?></div></td>
		<td bgcolor="#FAEBD7"><div align="center"><?php echo $p['Price']*$p['Quantity'];?><? $total+=($p['Price']*$p['Quantity']);?></div></td>
        <td bgcolor="#FAEBD7">
        <div align="center">
         <form method="POST">
        	<input type="hidden" name="delete_value" value="<?php echo $key;?>">
        	<input type="submit" name="delete" id="delete" value="刪除" />
        </form>
        </div>
        </td>
<?
		}
	}
?>  
        </tr>
    </table>
    <table width="75%" >
      <tr>
<form action="theend.php" method="post">
        <td>
        <div align="right">
          <p>
            <? 
			if($total !=0){
				echo '總金額：'.$total.'元&nbsp;&nbsp;' ; 
			}?>
            <input name="checkOK" type="submit" value=" 確認送出 " />
            
          </p>
        </div>        
        <div align="right"></div>
        </td>
        </form>
      </tr>
    </table>
</form>
</body>
<?
	}
?>
</html>