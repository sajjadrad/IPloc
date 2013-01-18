<?php
	require('lib/rb.php');
	$dbname='geoip';
	$dbUser='root';
	$dbPass='';
	R::setup('mysql:host=localhost;dbname='.$dbname,$dbUser,$dbPass);
?>