

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<script src=js/jquery.js></script>
    <script src="js/bootstrap.min.js"></script>
<style >
.back{
	background-color:gray;
	margin-top:100px;
	border-radius: 5px;
	opacity: ;

}
</style>
</head>
<body>

	

	<div class="container-flow">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-3 back">
				  <form action="zalegologin.php" method="POST">  
    <h4 class="text-center">Login</h4>

    <?php
    if(@$_GET['Empty']==true)
    {
    	?>
    	<div class="alert-light text-danger"><?php echo $_GET['Empty'] ?></div>
    	<?php
    }
      ?>   

      <?php
    if(@$_GET['invalid']==true)
    {
    	?>
    	<div class="alert-light text-danger"><?php echo $_GET['invalid'] ?></div>
    	<?php
    }
      ?>   
    
      <label for="username" class="control-label">username</label>
      <input type="text" class="form-control" name="username" placeholder="enter username">
   
    
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="enter password">
    <br>
    
  
      <button  class="btn btn-success btn-block" type="submit" name="login">login</button>
      <br>
     <h5 style="color: red" class="text-right"> Forgot password?</h5>
   Are you new ?<a href="zalego.php" style="color: white"> click here to register</a>
</form>
			</div>
		</div>
	</div>

	</body>
	</html>
