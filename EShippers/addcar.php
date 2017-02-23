
<?php
 $source = $_POST['source'];
 $destination = $_POST['destination'];
 $fare = $_POST['fare'];
 
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
				$sql = "Insert into details values('.$source.','.$destination.','.$fare.',FALSE)";
				
				$result = mysqli_connect($con,$sql);
				
				if($result)
				{
					header("Location:carrierpage.php");
				}
			}
?>