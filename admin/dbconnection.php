<?php
$con=mysqli_connect("localhost","root","","customer_management");
if(mysqli_connect_errno()){
    echo "connection Fail".mysqli_conect_error();
}
?>