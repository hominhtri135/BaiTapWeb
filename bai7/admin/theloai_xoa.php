<?php
include("../connect.php");
if(isset($_GET["idTL"]))
{
	$key = filter_input(INPUT_GET, 'idTL');
	$sl="delete from theloai where idTL=".$key;
}
	
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='theloai.php';</script>";
}
?>
