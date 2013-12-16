<?php
include_once "config.php";
$id=$_GET['id'];
$sql="SELECT * FROM berita WHERE id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
include_once "view/readberita_view.php";