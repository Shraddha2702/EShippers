<?php

define('HOST_NAME','mysql.hostinger.in');
define('USER_NAME','u891124005_user1');
define('PASSWORD','Shraddha2702');
define('DATABASE','u891124005_trans');

$con=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
$label = $_POST['name1'];

if(!$con)
{
	echo "Connection Failed";
}

else
{
	/*echo "Connection Successful";*/

	$Username=$_POST['username'];
	$Password=$_POST['password'];


	$sql="SELECT * FROM carrier WHERE c_email='$Username' AND c_password='$Password'";
	$result=mysqli_query($con,$sql);

	$response=array();

	$check=mysqli_fetch_array($result);

	if(isset($check))
	{
          /*$response['success']=true;
          $response['message']=success;
		  
		  /*Redirect*/
		  header("Location:");
	}
        else
        {
                /*$response['success']=false;
                $response['message']=fail;*/
				
				$label = "Enter correct details !";
         }	
}
mysqli_close($con);

?>
			