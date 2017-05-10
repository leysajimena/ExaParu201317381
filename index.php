<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<div class="marco">
		<img src="images/portada1.jpg" style="width: 100%; height: auto;" />
		<?php
		$servername = "us-cdbr-iron-east-03.cleardb.net";
		$username = "b74ba3320e82ec";
		$password = "2d194843";
		$dbname = "ad_bb6ddb2f34daf52";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * from servicios";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) { ?>
		
	
		<table>
	
		
		<tr>
		  <?php while($row = $result->fetch_assoc()) { ?>
		  	
		  	<tr style="width: 50%; float: left; height: 114px;">
		      <td><img src="<?php echo $row['imagen_servicio'] ?>" /></td>
		      <td><b><?php echo $row['nombre_servicio']?></b> <br /> <?php echo $row['descripcion_servicio']?></td>
		    </tr>
		  <?php } ?>
		
		</table>
		<?php }  
		$conn->close();
		?> 
		<center><img src="images/foot1.jpg" width="50%" ></center>
	</div>
</body>
</html>
