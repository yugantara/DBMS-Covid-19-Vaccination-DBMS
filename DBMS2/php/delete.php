<?php
	$Unique_Health_ID = $_POST['Unique_Health_ID'];

	// Database connection
	$conn = new mysqli('localhost','root','','covid_19_vaccination_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("DELETE FROM `candidate` WHERE Unique_Health_ID = (?)");
		$stmt->bind_param("s", $Unique_Health_ID);
		$execval = $stmt->execute();
		echo $execval;
		echo "Deleted successfully...";
		$stmt->close();
		$conn->close();
	}
?>