<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>

<?php
include('conn.php');
?>
<style type="text/css">
body {
	background-image: url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 250%;
}
</style>
</head>
<body>
<p align="center"><img src="images/talk3.png" width="827" height="234" /></p>
<form  method="post" >
  <div align="center">
    <table width="28%"  style="border:5px #4169E1 double; padding:5px;"  cellpadding='5' height="151" border="1">
      <tr>
        <td width="424" height="129" style="border:4px #32CD32 double;">
        <p><strong>請輸入帳號密碼:</strong></p>
          <p>
            <label for="account">帳號：</label>          
            <input type="text" name="account" id="account" />
          </p>
          <p>
            <label for="password2">密碼：</label>
            <input type="text" name="password" id="password2" />
        </p>
        </td>
      </tr>    
    </table>
&nbsp;   
 <table width="27%">
      <tr>
        <td>&nbsp;</td>
        <td> <div align="right">
        <input name="cancle" type="submit" onClick="javascript:history.back(1)" value="取消" /></input>
          &nbsp;
          <input type="submit" name="submit" id="submit" value="登入" />
      </tr>
    </table>
  </div>
</form>

<p>&nbsp;</p>
<p>
  <?
if( isset($_POST['submit']) ){

	if( isset($_POST['account']) ){
		$sql="select * from member where account='".$_POST['account']."' and password='".$_POST['password']."'";
		$result= mysql_query($sql, $link) or die("SQL ERROR!!");
	if( $record = mysql_fetch_array($result) ){
		$_SESSION['SID']=$record['ID']*1;
		$_SESSION['Saccount']=$record['account'];
		$_SESSION['Sname']=$record['name'];
		header("Location: index2.php");
?>

  <?
}else{
?>
  <script type="text/javascript">
alert('登入失敗，若忘記密碼，請聯絡客服人員...');
  </script>
  <?
	}
}
}
?>
</p>
<p></p>

</body>
</html>