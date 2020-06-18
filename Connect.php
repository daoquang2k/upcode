<?php 
$connect ="host=ec2-52-20-248-222.compute-1.amazonaws.com port=5432 dbname=d4qgptiefa8c41 user=jlgtohhxeotlhn password=ab5412d183c634eefbda6eab690e4c1caf8b1911f54a01fc909f163bc489493b";
$dbconn=pg_connect($connect);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass=$_POST['pass'];
}
$sql = "SELECT * from Account where _user='".$username."'and _pass ='".$pass."'";
$result = pg_query($dbconn,$sql);
$row = pg_num_rows($result);
if ($row==1)
 {
	echo "Login success";
}
else
{
	echo " Login failed";
}
 ?>
