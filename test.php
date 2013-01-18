<html>
	<head>
		<title>ipLoc Test</title>
	</head>
	<body>
<?php
	if(isset($_GET['ip']))
	{
		require('lib/iploc.php');
		$ip = $_GET['ip'];
		$temp = new iploc();
		echo $temp->getIPInfo($ip,"countryname");
	}
	else
	{
		?>
		<form action="test.php">
			<input type="text" name="ip">
			<input type="submit" value="Check">
		</form>
		<?php
	}
	
?>
	</body>
</html>