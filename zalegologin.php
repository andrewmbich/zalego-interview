<?php
session_start();

require('connection.php');

if(isset($_POST['login']))
{

	if (empty($_POST['username'])||empty($_POST['password']))
	 {
	header("location:loginform.php?Empty=please fill in the Blanks");	
	}
	else
	{
   $query="select * from register where username='".$_POST['username']."' and password='".$_POST['password']."' ";

   $result=mysqli_query($conn,$query);
  
   if (mysqli_fetch_assoc($result)) 
   {
      $_SESSION['user']=$_POST['username'];
   	header("location:zalegoview.php");
   }
   else
   {
   	header("location:loginform.php?invalid= please enter correct username and password");
   }
	}
  }
?>