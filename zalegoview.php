<!DOCTYPE html>
<html>
<head><meta charset="utf-8"/>
    <title >zalego</title>

<link rel="stylesheet" href="css/bootstrap.css">
<script src=js/jquery.js></script>
<script src="js/bootstrap.min.js"></script>
<style>
  
  
</style>
</head>
<body>
 <?php

  include("viewnavbar.php");

  ?>

  <div class="container">
  	<div class="row">
  		<div class="col-sm-8 col-sm-offset-2">
  			<h2 class="text-center"> View info</h2>
  			<?php
  			require('connection.php');

  			$sql = "SELECT * FROM register";
            
 $result = mysqli_query($conn, $sql);
 $resultcheck = mysqli_num_rows($result);

 
 		
if ($resultcheck > 0){
 	while($row=mysqli_fetch_assoc($result))
 	{
 		echo'<table  class=" table table-striped table-dark">';
	echo "<tr>"	;		
				
 		echo "<td>" .$row["firstname"]. "</td>";
 		echo "<td>" .$row["lastname"]. "</td>";
 		echo "<td>" .$row["username"]. "</td>";
 		echo "<td>" .$row["modified_date"]. "</td>";
        echo '<td><button class="btn btn-warning"><a href="delete.php?id=' . $row['id'] . '">Delete</a></button></td>';


 		
 		echo "</tr>";
 		echo "</table";
}
}
?>
              
  		</div>
  	</div>
  </div>
</body>
</html>