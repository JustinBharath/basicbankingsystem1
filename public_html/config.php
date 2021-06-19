<?php

	$conn = mysqli_connect('localhost','id16956502_bharath','IndiaPakistan@2001','id16956502_bankingdatabase');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>