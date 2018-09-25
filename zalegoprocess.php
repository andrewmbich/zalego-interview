
    
<?php
session_start();
require('connection.php');

    
if (isset($_POST['register']))
 {
    


    
    $firstname= $_POST['firstname'];

    $lastname=$_POST['lastname'];

    $username= $_POST['username'];

    $password=$_POST['password'];

$sql = "INSERT INTO register(firstname,lastname,username,password,modified_date,modified_time) VALUES ('$firstname','$lastname',
'$username','$password',CURDATE(),CURTIME())";

$result = mysqli_query($conn, $sql);


if ($result)
    {
    echo 
    "<script>
alert('Thank you Successifuly registered');
window.location.href='zalego.php';
        </script>";
    }
    else
    {
    	    echo "failed to submit";
    }
}
?>