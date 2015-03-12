<?php
include("conn.php");

$query = "delete from data where id ='$_GET[id]'";

$proses = mysql_query($query);

if($proses){
	header("location:3.php");
} else {
	echo "hapus gagal";
}