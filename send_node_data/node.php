 <!DOCTYPE html>
	<?php 
	$dtime		=	$_GET["dtime"];
	$temp		=	$_GET["temp"];
	$hum		=	$_GET["hum"];
	$node_ID	=	$_GET["nodeID"];

	$dbhost = 'localhost:3036';
   	$dbuser = 'atmos';
   	$dbpass = '1ndulals';

   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
   	if(! $conn ) {
    	die('Could not connect: ' . mysql_error());
   	}

  	 mysql_select_db('atmos');
  	 $sql = "INSERT INTO node.$node_ID (temp,hum,dtime) VALUES ($temp,$hum,$dtime)";
  	 if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} 
		else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	?>
