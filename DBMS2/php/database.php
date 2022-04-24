<?php

	include 'connection.php';

	$res=mysqli_query($conn,"select * from candidate");
	print "<html>
<style>
      table {
        width: 100%;
        border-collapse: collapse;
      }
      table,
      th,
      td {
        border: 1px solid black;
      }
      thead {
        color: #ffffff;
      }
      th {
        text-align: center;
        height: 50px;
        background: #38d39f;
      }
      tbody tr:nth-child(odd) {
        background: #ffffff;
      }
      tbody tr:nth-child(even) {
        background: #f4f4f4;
      }
      td {
      	height: 50px;
      }
    </style>
	<body><br/>";
	print "<h1> Candidate Infomation </h1>";
	echo "<table border='1'>";

		echo "<th>Unique_Health_ID</th>";
		echo "<th>Name</th>";
		echo "<th>Date_of_Birth</th>";
		echo "<th>Age</th>";
		echo "<th>Gender</th>";
		echo "<th>Beneficiary_Reference_ID</th>";
		echo "<th>Vaccine_Name</th>";
		echo "<th>Dose_Type</th>";
	while($column=mysqli_fetch_array($res))
	{
	
		echo "<tr><td>";
		echo $column['Unique_Health_ID'];
		echo "<td>";
		echo $column['Name'];
		echo "<td>";
		echo $column['Date_of_Birth'];
		echo "<td>";
		echo $column['Age'];
		echo "<td>";
		echo $column['Gender'];
		echo "<td>";
		echo $column['Beneficiary_Reference_ID'];
		echo "<td>";
		echo $column['Vaccine_Name'];
		echo "<td>";
		echo $column['Dose_Type'];
		echo "</tr>";
		echo "</td>";
	} 
	echo "</table></body></html>";
?>