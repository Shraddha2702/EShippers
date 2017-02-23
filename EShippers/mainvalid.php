
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$type = $_POST['rg'];
		
		if(rg == "carrier")
		{
			header("Location:carrier.php");
		}
		else 
		{
			header("Location:supplier.php");
		}
	}
?>