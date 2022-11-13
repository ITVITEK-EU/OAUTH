<?php 
/*
if(isset($_GET['id']) && !($_GET['id'] == null)) {
$id = trim($_GET['id']);
echo $id;
echo "<br>";
	if(isset($_GET['pass']) && !($_GET['pass'] == null)) {
	$idDiscord = trim($_GET['pass']);
	echo $idDiscord;
	} else {
	echo "ERROR";
	}

} else {
	echo "ERROR";
	}

*/
  session_start();

  $servername = "servername";
  $username = "username";
  $password = "password";
  $database = "db_name";

  $conn = new mysqli($servername, $username, $password, $database);
  
  $name = $_GET["id"];
  $disID = $_GET["pass"];

  $sql = "INSERT INTO authUpdate(name, iud) VALUES ('$name', '$disID')";

  if ($conn->query($sql) === TRUE) {
  echo "<script>console.log('OK');</script>";
  $_SESSION["username"]=$name;
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }


	


$conn-> close();
header("Location: ./");

$conn->close();



?>