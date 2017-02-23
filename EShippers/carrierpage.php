<html>
<head>
<title>Carrier Page</title>

<link rel="stylesheet" href="careerpage.css"/>
<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}


	span{
		font-size:75px;
	}

	footer{
		background:black;
		color:white;
		padding:5%;
	}
	
	.sitemap{
	display:inline-block;
	margin:5%;
	
}


h3{
	font-size:30px;
}

.blue{
	background-color:#1565C0;
color:#fff;
}

.textblue{
	color:#1565C0;
}

.darkblue{
	background-color:#0D47A1;
	color:#fff;
}




@media screen and (max-width:680px) {

	h3{
		font-size:20px;
	}
	
	span{
		font-size:30px;
	}	
}



</style>
</head>

<body>



<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar darkblue  w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="#" class="w3-padding-large "><i class="fa fa-truck"></i> EShippers</a></li>
    <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">ABOUT US</a></li>
    <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">LOG IN</a></li>
    <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">SIGN UP</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#">ABOUT US</a></li>
      <li><a class="w3-padding-large" href="#">LOG IN</a></li>
      <li><a class="w3-padding-large" href="#">SIGN UP</a></li>
    </ul>
  </div>
</div>



<div class="minph">
<hr/>
<center><p>Add New Route </p></center>

<div class="formdiv">
<form method="Post" action="addcar.php">
<table>
<tr><td><label>Source </label></td><td><input type="text" name="source"/></td></tr>
<tr><td><label>Destination </label></td><td><input type="text" name="destination"/></td></tr>
<tr><td><label>Fare </label></td><td><input type="number" name="fare"/></td></tr>
</table>
<label name="name1"></label>
<center><input type="submit" value="Add"/></center>
</form>
</div>

<br/><br/>
<hr/>
<center><p>Active Routes</p></center>
<div class="active">
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
		$sql="SELECT * FROM details";
		$result=mysqli_query($con,$sql);
                 echo "<div class='formdiv'>";
                echo "<form method='post'>";
	        

                $ii=0;
                $value=array();
          
		echo "<table class='tb'>";
                echo "<tr><th colspan='5'>Source</th><th colspan='5'>Destination</th><th colspan='5'>Fare</th>";
		while($check=mysqli_fetch_array($result))
		{
                   
			echo "<tr><td colspan='5'>".$check[0]."</td><td colspan='5'>".$check[1]."</td><td colspan='5'>".$check[2]."</td></tr>";
                      		
                }
		echo "</table><br/>";
                echo "<center><input type='submit' value='Remove'/></center>";
				echo "Entry #";
				echo "<input type='text' name='$v'/>";
                echo $_POST['$v'];
                echo "</form>";
                echo "</div>";
				
	}
?>
</div>
<br/><br/>
<hr/>
</div>






<div style="background-color:#212121;color:#fff;" class="row w3-container  w3-padding-64">
    <h1  class="col-xs-6"><i style="margin-left:10px;font-size:120px;" class="fa fa-truck " aria-hidden="true"></i><span> EShippers</h1>
	
	<div class="col-xs-6 ">
	<h3>TALK TO US</h3>
					<a href="mailto:eshippers34@gmail.com">eshippers34@gmail.com</a><br>
					+91-1234576789<br>
					<i class="fa fa-facebook" >  </i> 
					<i class="fa fa-twitter" >  </i> 
		+49052+			<i class="fa fa-linkedin" >  </i>
				</div>	
</div>
	
</body>
</html>						