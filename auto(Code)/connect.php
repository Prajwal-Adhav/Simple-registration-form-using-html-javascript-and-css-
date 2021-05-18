<body style="background-color:honeydew"></body>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pnum = $_POST['pnum'];
	$addr = $_POST['addr'];
	$hnum = $_POST['hnum'];
	$id = $_POST['id'];

	// Database connection
	$conn = new mysqli('localhost','root','','test2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);// If connection fails show this message.
	} else {
		$stmt = $conn->prepare("insert into info3(name, email, pnum, addr, hnum, id) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisii", $name, $email, $pnum, $addr, $hnum, $id);
		$execval = $stmt->execute();
		echo $execval;
		echo "<h1 style='padding-top=50px'><b style='margin-top=50px'>Registration Successful</b></h1>";
		$stmt->close();
		$conn->close();// Closing and commiting the database connection.
	}
?>
<br>
<br>
<h3><a href="index.php">Show saved data</a></h3>
