<?php
include_once "config.php";
include_once "view/berita_view.php";
/*----start saving from here---------*/
if(isset($_POST['save']))
{
$title=htmlentities($_POST['title']);
$content=$_POST['content'];
$sql="INSERT INTO berita (title,content) VALUES ('$title','$content')";
$val=mysql_query($sql);
echo"<meta http-equiv='refresh' content='0, url=index.php'>";
	/*if($val)
	{
	echo"saved";
	}
	else
	{
	echo"failed saving".mysql_error();
	}*/
}

function word_limiter($string, $word_limit) {
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
  }
