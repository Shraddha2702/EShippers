<?php
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
				$sql = "Select * from details";
				$result=mysqli_query($con,$sql);
				$vali=0;
      
				
		while($check=mysqli_fetch_array($result))
		{
                    echo "Ye1s";
                    $ii = 0;
                    echo $_POST['$ii'];
			if(isset($_POST['$ii'])
			{
				/*$sql1 = "Update details SET active='true' WHERE source = '$check[1]' && destination= '$check[2]'";
                                $result1 = mysqli_query($con,$sql1);*/
                                 echo "Yes";
			}
                   $ii++;
		}
	}
?>		