<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "covid_19_vaccination_db";

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn) {
	    die("Connection failed: " . mysqli_error());
	} 
?>

	<script>
	    alert('Connection succesful')
	</script>

<?php
	echo "Connected successfully";

?>
