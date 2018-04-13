<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>

<?php
include("conn.php");
?>
<style type="text/css">
body {
	background-image: url(images/3.png);
	background-repeat: no-repeat;
	background-size: 100% 160%;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="index.php">
 <p align="center"><h2 align="center"><img src="images/talk4.png" width="977" height="207" align="absmiddle" /></h2></p>



 <div align="center">
   <table width="521">
     <tr>
       <td width="364"><p><strong><font color="red">歡迎加入會員~ </font></strong></p>
        <p>&nbsp;</p></td>
      </tr>
     <tr>
       <td><p><strong><font color="blue">請填寫一下資料，按下送出按鈕後，即可加入會員~ </font></strong></p>
        <p><strong><font color="blue">按下取消按鈕，則返回首頁。</font></strong></p></td>
      </tr>
   </table>
 </div>

 <p align="center">&nbsp;</p>
  <div align="center">
    <table width="31%" height="300" border="1"  
  style="border:3px #990000 dashed;padding:5px;" rules="all" cellpadding='5';>
      <tr>
        <td width="18%" ><strong>會員姓名</strong></td>
        <td width="82%" ><label for="name"></label>
        <input type="text" name="name" id="name" /></td>
      </tr>
      <tr>
        <td><strong>性別</strong></td>
        <td><label for="sex">
          <input type="radio" name="sex" id="sex" value="男"  />男
        <input type="radio" name="sex" id="sex" value="女" />女</label> </td>
      </tr>
      <tr>
        <td><strong>帳號</strong></td>
        <td><label for="account"></label>
        <input type="text" name="account" id="account" /></td>
      </tr>
      <tr>
        <td><strong>密碼</strong></td>
        <td> <input type="text" name="password" id="password" /></td>
      </tr>
      <tr>
        <td><strong>生日</strong></td>
        <td> <input type="text" name="bday" id="bday" /></td>
      </tr>
      <tr>
        <td><strong>電話</strong></td>
        <td>
        <input type="text" name="phone" id="phone" /></td>
      </tr>
      <tr>
        <td><strong>住址</strong></td>
        <td> <input type="text" name="address" id="address" /></td>
      </tr>
      <tr>
        <td><strong>EMAIL</strong></td>
        <td> <input type="text" name="email" id="email" /></td>
      </tr>
      
    </table>
    &nbsp;
    <table width="31%">
      <tr>
        <td>&nbsp;</td>
        <td> <div align="right">
        <input name="cancle" type="submit" onClick="javascript:history.back(1)" value="取消" /></input>
          &nbsp;
          <input name="actionOK" type="submit" id= "button" value="確定送出" /></input></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>

</form>
</body>
</html>
    

