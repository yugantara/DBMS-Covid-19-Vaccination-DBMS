<?php
	$Unique_Health_ID = $_POST['Unique_Health_ID'];
	$Name = $_POST['Name'];
	$Date_of_Birth = $_POST['Date_of_Birth'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Beneficiary_Reference_ID = $_POST['Beneficiary_Reference_ID'];
	$Vaccine_Name = $_POST['Vaccine_Name'];
	$Dose_Type = $_POST['Dose_Type'];

	// Database connection
	$conn = new mysqli('localhost','root','','covid_19_vaccination_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO `candidate`(`Unique_Health_ID`, `Name`, `Date_of_Birth`, `Age`, `Gender`, `Beneficiary_Reference_ID`, `Vaccine_Name` , `Dose_Type`) VALUES (?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssiiiss", $Unique_Health_ID, $Name, $Date_of_Birth, $Age, $Gender, $Beneficiary_Reference_ID, $Vaccine_Name, $Dose_Type);
		$execval = $stmt->execute();
		echo $execval;
		echo "Added successfully...";
		$stmt->close();
		$conn->close();
	}
?>