<?php
include_once "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM berita WHERE id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
include_once "view/editberita_view.php";
/*----start updating from here--------*/
if(isset($_POST['update']))
{
$title=htmlentities($_POST['title']);
$content=$_POST['content'];
$sql="UPDATE berita SET title='$title',content='$content' WHERE id=$id";
$result=mysql_query($sql);
echo"<meta http-equiv='refresh' content='0, url=index.php'>";
	/*if($result)
	{
	echo"Updated";
	}
	else
	{
	echo"failed Updating".mysql_error();
	}*/
}