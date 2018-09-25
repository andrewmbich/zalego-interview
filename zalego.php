<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Zalego </title>

<link rel="stylesheet" href="css/bootstrap.css">
<script src=js/jquery.js></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
  <?php

  include("zalegonavbar.php");

  ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 bg-default">
       <form action="zalegoprocess.php" method="POST" enctype="multipart/form-data">  
        <h3 class="text-center">Register here</h3>
    <div class="form-group">
      <label for="firstname" class=" control-label">First name:</label>
      <input type="text" class="form-control"  name="firstname" placeholder="Enter firstname"  required="">
   </div>
    <div class="form-group">
      <label for="lastname" class=" control-label">Last name:</label>
      <input type="text" class="form-control"  name="lastname" placeholder="Enter last name">
     
    </div>
    <div class="form-group">
      <label for="username" class=" control-label">Username:</label>
      <input type="text" class="form-control"  name="username" placeholder="Enter username" required="">
     </div>
   <div class="form-group">
      <label for="password" class=" control-label">Password:</label>
      <input type="password" class="form-control"  name="password" placeholder="Enter your password" required="">
     
    </div>
     <button class="btn btn-primary" name="register" >Register</button>
   </form>
 </div>
</div>
</div>

</body>
</html>

 