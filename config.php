<?php
$server="localhost";
$username="root";
$password="";
$conn=mysql_connect($server,$username,$password);
/*if($conn)
{
echo"Connection OK"."</br>";
}
else
{
echo"Connection failed";
}*/
$db_name="db_simplephpcrued";
$db_conn=mysql_select_db($db_name,$conn);

/*if($db_conn)
{
echo"Database OK";
}
else
{
echo"Database failed".mysql_error();
}*/