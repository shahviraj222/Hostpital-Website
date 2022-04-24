<?php
$dbserver="localhost";	//localhost
$dbuser="root";
$dbpwd="";
$dbname="healthcare";


function my_iud($query)//insert , update , delete
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname) or die("connection failed");
//mysql_select_db($dbname,$cid);
try{
    mysqli_query($cid,$query);
}
catch (mysqli_sql_exception $e) { 
    var_dump($e);
    exit; 
 } 
$n=mysqli_affected_rows($cid);
mysqli_close($cid);
return $n;
}


function my_select($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname) or die("connection failed");
//mysql_select_db($dbname,$cid);
$rs=mysqli_query($cid,$query);
mysqli_close($cid);
return $rs;
}

//to be used when sql query returns a single value
function my_one($query)
{
global $dbserver,$dbuser,$dbpwd,$dbname;
$cid=mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname) or die("connection failed");
//mysql_select_db($dbname,$cid);
$rs=mysqli_query($cid,$query);
$row=mysqli_fetch_array($rs,MYSQLI_NUM);

mysqli_close($cid);
return $row[0];
}


function verifyuser()
{
$u="";
$p="";
if(isset($_COOKIE['cemailid']) && isset($_COOKIE['cpassword']))
{
$u=$_COOKIE['cemailid'];
$p=$_COOKIE['cpassword'];
}
else
{
if(isset($_SESSION['semailid']) && isset($_SESSION['spassword']))
{
$u=$_SESSION['semailid'];
$p=$_SESSION['spassword'];
}
}
$query="select count(*) from user where emailid='$u' and password='$p'";
$n=my_one($query);
if($n==1)
{
return true;
}
else
{
return false;
}
}


?>