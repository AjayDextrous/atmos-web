 <!DOCTYPE html>
<html>
<!--Title and CSS-->
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="Ajay Narayanan" content="Atmos Sensor Network" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>The ATMOS Sensor Network</title>
	</head>
<!--Header stuff-->
	<div class="container">
  <h2>Sensor Readings</h2>
  <p>Node <?php echo $_GET["node_id"] ?></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Node ID</th>
        <th>Node Name</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
		<?php
			$node = $_POST['node'];
		   	$password = $_POST['password'];

		   	$dbhost = 'localhost:3036';
		   	$dbuser = 'atmos';
		   	$dbpass = '1ndulals';
		   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		   	if(! $conn ) {
		    	die('Could not connect: ' . mysql_error());
		   	}
		  	 mysql_select_db('atmos');
		   	$sql = "SELECT * FROM $_GET['node_name']";
		 	$retval = mysql_query($sql);
			while($row = mysql_fetch_array($retval))
		          {
		           echo "<tr><td>" . $row['node_id'] . "</td><td> " . $row['node_name'] . "</td><td>" .$row['node_status']."</td></tr>"; 
		           }

			mysql_close($conn);
		?>
		 </tbody>
  </table>
</div>
	<body>
	
	</body>
</html> 
