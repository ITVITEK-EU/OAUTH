<?php
  session_start();

  $servername = "servername";
  $username = "username";
  $password = "password";
  $database = "db_name";

  $conn = new mysqli($servername, $username, $password, $database);
  
  $name = $_GET["id"];
  $selected = $_GET["pass"];
  

  if($name && $selected) {
  	$sqlin = "SELECT * FROM authUpdate WHERE name=$name limit 1";
  	$result = $conn->query($sqlin);
	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()) {		
  		}
		if($name and $nameDB) {
	if($selected and $iudDB) {
		$_SESSION['username'] = $name;
		header("Location: ./");
	} else {
		header("Location: ./");
	}	
} else {
	header("Location: ./");
	}

		

	} else {
  		$db = "";echo $db;
	}

  } else {
	echo "Něco není v pořádku!";
  }
header("Location: ./");

$conn->close();


?>
