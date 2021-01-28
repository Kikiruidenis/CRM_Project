<?php
include('dbconnection.php');

$get_id=$_GET['id'];

$rt=mysqli_query($con,"delete from user where id='".$_GET['id']."'");
$extra="manage-user.php";
?>
