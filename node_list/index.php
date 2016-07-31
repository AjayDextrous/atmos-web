 <!DOCTYPE html>
<html>
<!--Title and CSS-->
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="Ajay Narayanan" content="Atmos Sensor Network" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>ATMOS v0.1</title>
	</head>
<!--Header stuff-->
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">ATMOS</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="/index.php">Home</a></li>
		      <li class="active"><a href="#">Nodes</a></li>
		      <li><a href="/php_info/index.php">About</a></li>
		      <li><a href="/contact_us/index.php">Contact</a></li>
		    </ul>
		  </div>
		</nav>
		
		<!--Main PHP Work Here-->
		<div class="container">
  <h2>Node List</h2>
  <p>The list of all existing nodes</p>            
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
		   	$sql = "SELECT * FROM nodelist";
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
		<!--Footer-->
				<div id="footer">
					<p>Copyright &copy; <em>IET-CET</em> &middot;</p>
				</div>	
			</div>
	</body>
</html> 
