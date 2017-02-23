
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$type = $_POST['rg'];
		
		if(rg == "carrier")
		{
			define('HOST_NAME','mysql.hostinger.in');
			define('USER_NAME','u891124005_user1');
			define('PASSWORD','Shraddha2702');
			define('DATABASE','u891124005_trans');

			$con=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);

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
					header("Location:carrierpage.php");
				}
				else
				{
                /*$response['success']=false;
                $response['message']=fail;
				
				$label = "Enter correct details !";*/
				}	
			}
			mysqli_close($con);
		}
		
		
		else if(rg == "supplier")
		{
			define('HOST_NAME','mysql.hostinger.in');
			define('USER_NAME','u891124005_user');
			define('PASSWORD','Shraddha2702');
			define('DATABASE','u891124005_comp');

			$con=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);


			if(!$con)
			{
				echo "Connection Failed";
			}

			else
			{
				/*echo "Connection Successful";*/

				$Username=$_POST['username'];
				$Password=$_POST['password'];


				$sql="SELECT * FROM supplier WHERE s_email='$Username' AND s_password='$Password'";
				$result=mysqli_query($con,$sql);

				$response=array();

				$check=mysqli_fetch_array($result);

				if(isset($check))
				{
					/*$response['success']=true;
					$response['message']=success;
		  
					/*Redirect*/
					header("Location:supplier_form.html");
				}
				else
				{
					/*$response['success']=false;
					$response['message']=fail;
				
					$label = "Enter correct details !";*/
				}	
			}
		mysqli_close($con);
		}
		
		
		else
		{
			/*$label = "Select a type !";*/
			echo "Not Possible";
		}
		
	}
?>