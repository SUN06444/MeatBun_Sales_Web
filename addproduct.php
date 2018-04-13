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
	background-size: 100% 250%;
}
</style>
</head>
<body>
<?php
if(  isset($_SESSION['SID']) ) {
	if( isset($_POST['actionOK'])){
		$addsql="INSERT INTO `product_list` (`Pname`,`Price`) VALUES ('".$_POST['name']."', '".$_POST['Price']."');";
	
			if(is_uploaded_file( $_FILES["upfile"]["tmp_name"])) {
			$File_Extension = explode(".",$_FILES['upfile']['name']); 
			$File_Name = $File_Extension[0]; 
			$File_Extension = $File_Extension[1];
			$fname=time().".".$File_Extension;
			$upfilename="images/".$fname;
			//echo "<br>更新名稱: ". $upfilename."<br>";
			//echo "<br>檔案名稱: ". $_FILES["upfile"]["name"]."<br>";
			//echo "暫存檔名: ".  $_FILES["upfile"]["tmp_name"]."<br>";
			//echo "檔案尺寸: ". $_FILES["upfile"]["size"]."<br>";
			//echo "檔案種類: ".$_FILES["upfile"]["type"]."<br><hr>";
			if(move_uploaded_file($_FILES["upfile"]["tmp_name"], $upfilename)) {
 			$addsql="INSERT INTO `product_list` (`Pname`, `Price`, `Pic`) VALUES ('".$_POST['name']."','".$_POST['Price']."','".$fname."');";
			
			}
			}
	
	
		if(mysql_query($addsql) ){
			echo("資料庫新增成功!!");
			}else{
				echo("資料新增失敗!!");
			}
	}
				
?>

 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="60%" >
      <tr>
        <td><h2><strong>新增產品:</strong></h2>
        <p>&nbsp;</p></td>
      </tr>
    </table>
    
    <table width="40%">
      <tr>
        <td width="13%" >產品名稱：</td>
        <td width="87%"> <input type="text" name="name" /></td>
      </tr>
      
      <tr>
        <td><p>&nbsp;</p>
        <p>價&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</p></td>
        <td> <p>&nbsp;
          </p>
          <p>
            <input type="text" name="Price" />
        </p></td>
      </tr>
      <tr>
        <td colspan="2"><p>&nbsp;</p>
          <p>圖片檔案：&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" name="upfile" id="upfile" /> 
            <label for="fileField"></label>
        </p>
        <p>&nbsp;</p></td>
      </tr>
    
    </table>
    <table width="40%">
      <tr>
        <td width="65%"><div align="right">
          <input name="cancle" type="submit" onclick="javascript:history.back(1)" value="取消" />&nbsp;&nbsp;
          <input name="actionOK" type="submit" id= "button" value="送出" />
        </div></td>
        <td width="20%"><div align="right"></div></td>
        <td width="15%"><div align="right"></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
</form>
  <tr>
        <td >&nbsp;</td>
</tr>
<?
}else{
	echo("還沒登入系統喔!!");
}
?>


<p></input></p>
</body>
</html>