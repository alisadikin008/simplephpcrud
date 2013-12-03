<?php
include_once "config.php";
$id=mysql_real_escape_string($_GET['id']);
$sql="DELETE FROM berita WHERE id=$id";
$result=mysql_query($sql);
echo"<meta http-equiv='refresh' content='0, url=index.php'>";