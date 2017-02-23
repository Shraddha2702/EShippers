
<?php
$source = $_POST['source'];
$dest = $_POST['destinatione'];

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
				$sql = "SELECT * from details WHERE source ='$source' AND destination='$dest'";
				$result = mysqli_query($con,$sql);
				
				$response = array();
				
				$rows = mysqli_fetch_array($result);
				$i = 0;
				while($rows)
				{
					$response[i] = $rows[3];
					i++;
				}
				
				for($ii=0; $ii<count($response)-1;$ii++)
				{
					for($jj=0; $jj<count($response); $jj++)
					{
						if($response[$ii] > $response[$jj])
						{
							$temp = $response[$ii];
							$response[$ii] = $response[$jj];
							$response[$jj] = $temp;
						}
					}
				}
				
				$min = $response[0];
				
				
				
				//Via Via path
				
				$sqll = "Select * from details WHERE source = '$source' AND destination != '$dest'";
				
				$r = mysqli_query($con,$sqll);
				
				$resp = mysqli_fetch_array($r);
				$resparr = array();
					$j = 0;
				while($rows)
				{
					$resparr[j] = $resp[3];
					j++;
				}
				
				
				while($destination == $dest)
				{
					for($ii=0; $ii<count($resparr)-1;$ii++)
					{
						for($jj=0; $jj<count($resparr); $jj++)
						{
						if($resparr[$ii] > $resparr[$jj])
						{
							$temp = $resparr[$ii];
							$resparr[$ii] = $resparr[$jj];
							$resparr[$jj] = $temp;
						}
					}
				}
					$minv = $resparr[0];
					$sql2 = "SELECT destination from details WHERE fare='$minv'";
					$r2 = mysqli_query($con,$sql2);
					$destination = $r2[0];
					
					}
				}
				
				
				if($min < $minv)
				{
					echo "Direct Path ".$min;
				}
				else
				{
					echo "Via via path".$minv;
				}
				
				
			}
?>