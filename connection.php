<?php

$conn = mysqli_connect('localhost','root','','zalego');
//check connection
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());   
}

if (!mysqli_select_db($conn,'zalego'))
{
	echo 'Database not selected';
}
?>