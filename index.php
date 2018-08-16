<html>
	<head>
		<?php 
				include_once('settings.php');
		?>
		<title><?php echo $website_title ?> </title>
	<head>
	<body>
	
<!-- ANFANG [ALLE FAHRZEUGE] -->
<div style="width:1000px; background:#E6E6FA;border:1px solid black;">
<center><h3>Alle fahrzeuge</h3><center>
<hr>
	<?php

$sql = "SELECT * FROM fahrzeuge";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	 
	 echo "id: " . $row['ID']. "<br>";
	 echo "hersteller: " . $row['Hersteller']. "<br>";
	 echo "modell: " . $row['Modell']. "<br>";
	 echo "baujahr: " . $row['Baujahr']. "<br>";
	 echo "km: " . $row['KM-stand']. "<br>";
	 echo "ausstatung: " . $row['Ausstattung']. "<br>";
	 echo "ankauf: " . $row['ankauf']. "<br>";
	 echo "verkauf: " . $row['verkauf']. "<br>";
	 echo "position: " . $row['position']. "<br>";
	 echo "<hr>";
    }
} else {
    echo "0 results";
}


	?>  
	</div>
	
<!-- ENDE [ALLE FAHRZEUGE] -->
<br>
<!-- ANFANG [Ausschlachtung FAHRZEUGE] -->
<div style="width:1000px; background:#E6E6FA;border:1px solid black;">
<center><h3>Alle Schlacht fahrzeuge</h3><center>
<hr>
	<?php

$sql = "SELECT * FROM fahrzeuge WHERE position = 'Ausschlachtung'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	 
	 echo "id: " . $row['ID']. "<br>";
	 echo "hersteller: " . $row['Hersteller']. "<br>";
	 echo "modell: " . $row['Modell']. "<br>";
	 echo "baujahr: " . $row['Baujahr']. "<br>";
	 echo "km: " . $row['KM-stand']. "<br>";
	 echo "ausstatung: " . $row['Ausstattung']. "<br>";
	 echo "ankauf: " . $row['ankauf']. "<br>";
	 echo "verkauf: " . $row['verkauf']. "<br>";
	 echo "position: " . $row['position']. "<br>";
	 echo "<hr>";
    }
} else {
    echo "0 results";
}

	?>  
	</div>
	
<!-- ENDE [Ausschlachtung FAHRZEUGE] -->
<br>
<!-- ANFANG [Verkauf FAHRZEUGE] -->
<div style="width:1000px; background:#E6E6FA;border:1px solid black;">
<center><h3>Alle Verkauf fahrzeuge</h3><center>
<hr>
	<?php

$sql = "SELECT * FROM fahrzeuge WHERE position = 'Verkauf'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	 
	 echo "id: " . $row['ID']. "<br>";
	 echo "hersteller: " . $row['Hersteller']. "<br>";
	 echo "modell: " . $row['Modell']. "<br>";
	 echo "baujahr: " . $row['Baujahr']. "<br>";
	 echo "km: " . $row['KM-stand']. "<br>";
	 echo "ausstatung: " . $row['Ausstattung']. "<br>";
	 echo "ankauf: " . $row['ankauf']. "<br>";
	 echo "verkauf: " . $row['verkauf']. "<br>";
	 echo "position: " . $row['position']. "<br>";
	 echo "<hr>";
    }
} else {
    echo "0 results";
}

	?>  
	</div>
	
<!-- ENDE [Verkauf FAHRZEUGE] -->



<!-- ANFANG [Ausschlachtung FAHRZEUGE] -->
<div style="width:1000px; background:#E6E6FA;border:1px solid black;">
<center><h3>Alle angefangenen Schlacht fahrzeuge </h3><center>
<hr>
	<?php

$sql = "SELECT ausschlachtung.ID_fahrzeug,ausschlachtung.Ware, fahrzeuge.* FROM ausschlachtung, fahrzeuge where ausschlachtung.ID_fahrzeug = fahrzeuge.ID";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	 
	 echo "id: " . $row['ID']. "<br>";
	 echo "hersteller: " . $row['Hersteller']. "<br>";
	 echo "modell: " . $row['Modell']. "<br>";
	 echo "baujahr: " . $row['Baujahr']. "<br>";
	 echo "km: " . $row['KM-stand']. "<br>";
	 echo "ausstatung: " . $row['Ausstattung']. "<br>";
	 echo "ankauf: " . $row['Ankauf']. "<br>";
	 echo "verkauf: " . $row['Verkauf']. "<br>";
	 echo "position: " . $row['Position']. "<br>";
	 echo "<hr>";
    }
} else {
    echo "0 results";
}

	?>  
	</div>
	
<!-- ENDE [Ausschlachtung FAHRZEUGE] -->
<br>

  
	</body>
	</html>