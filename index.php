<html>
	<head>
		<?php 
				include_once('settings.php');
		?>
		<title><?php echo $website_title ?> </title>
	<head>
	<body>

    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Fahrzeug Hinzufügen</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Hersteller">Hersteller</label>
                <div class="col-md-4">
                    <input id="Hersteller" name="Hersteller" placeholder="Volkswagen,BMW,Audi,Mercedes.." class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Modell">Modell</label>
                <div class="col-md-4">
                    <input id="Modell" name="Modell" placeholder="Polo,Corsa,Octavia" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Baujahr">Baujahr</label>
                <div class="col-md-4">
                    <input id="Baujahr" name="Baujahr" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="KM">KM-Stand</label>
                <div class="col-md-4">
                    <input id="KM" name="KM" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="PS">PS</label>
                <div class="col-md-4">
                    <input id="PS" name="PS" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="Hubraum">Hubraum</label>
                <div class="col-md-4">
                    <input id="Hubraum" name="Hubraum" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="Kraftstoffart">Kraftstoffart</label>
                <div class="col-md-4">
                    <input id="Kraftstoffart" name="Kraftstoffart" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Getriebeart">Getriebeart</label>
                <div class="col-md-4">
                    <input id="Getriebeart" name="Getriebeart" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Schadstoffklasse">Schadstoffklasse</label>
                <div class="col-md-4">
                    <input id="Schadstoffklasse" name="Schadstoffklasse" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Erstzulassung">Erstzulassung</label>
                <div class="col-md-4">
                    <input id="Erstzulassung" name="Erstzulassung" required="" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Farbe">Farbe</label>
                <div class="col-md-4">
                    <input id="Farbe" name="Farbe" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Ausstattung">Ausstattung</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="Ausstattung" name="Ausstattung"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="Ankauf">Ankauf</label>
                <div class="col-md-4">
                    <input id="Ankauf" name="Ankauf" placeholder="" class="form-control input-md" type="text">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Verkauf">Verkauf</label>
                <div class="col-md-4">
                    <input id="Verkauf" name="Verkauf" placeholder="" class="form-control input-md" type="text">
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Position">Position</label>
                <div class="col-md-4">
                    <select id="Position" name="Position" class="form-control">
                        <option value="Verkauf">Verkauf</option>
                        <option value="Ausschlachtung">Ausschlachtung</option>
                    </select>
                </div>
            </div>
            <!-- UNTERE LINIE -->

            <hr>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Defekte_Artikel">Defekte</label>

                    <input id="Defekte" name="Defekte" placeholder="" class="form-control input-md" type="text">


                <label class="col-md-4 control-label" for="Defekte_Beschreibung">Beschreibung zum Defekt</label>

                    <textarea class="form-control" id="Defekte_Beschreibung" name="Defekte_Beschreibung"></textarea>

            </div>

        </fieldset>
    </form>



























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
        echo "PS: " . $row['PS']. "<br>";
        echo "Hubraum: " . $row['Hubraum']. "<br>";
        echo "km: " . $row['KM-stand']. "<br>";
        echo "Kraftstoffart: " . $row['Kraftstoffart']. "<br>";
        echo "Getriebe: " . $row['Getriebeart']. "<br>";
        echo "Schadstoffklasse: " . $row['Schadstoffklasse']. "<br>";
        echo "ausstatung: " . $row['Ausstattung']. "<br>";
        echo "Farbe: " . $row['Farbe']. "<br>";
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
        echo "PS: " . $row['PS']. "<br>";
        echo "Hubraum: " . $row['Hubraum']. "<br>";
        echo "km: " . $row['KM-stand']. "<br>";
        echo "Kraftstoffart: " . $row['Kraftstoffart']. "<br>";
        echo "Getriebe: " . $row['Getriebeart']. "<br>";
        echo "Schadstoffklasse: " . $row['Schadstoffklasse']. "<br>";
        echo "ausstatung: " . $row['Ausstattung']. "<br>";
        echo "Farbe: " . $row['Farbe']. "<br>";
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
        echo "PS: " . $row['PS']. "<br>";
        echo "Hubraum: " . $row['Hubraum']. "<br>";
        echo "km: " . $row['KM-stand']. "<br>";
        echo "Kraftstoffart: " . $row['Kraftstoffart']. "<br>";
        echo "Getriebe: " . $row['Getriebeart']. "<br>";
        echo "Schadstoffklasse: " . $row['Schadstoffklasse']. "<br>";
        echo "ausstatung: " . $row['Ausstattung']. "<br>";
        echo "Farbe: " . $row['Farbe']. "<br>";
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
	 echo "PS: " . $row['PS']. "<br>";
	 echo "Hubraum: " . $row['Hubraum']. "<br>";
	 echo "km: " . $row['KM-stand']. "<br>";
	 echo "Kraftstoffart: " . $row['Kraftstoffart']. "<br>";
	 echo "Getriebe: " . $row['Getriebeart']. "<br>";
	 echo "Schadstoffklasse: " . $row['Schadstoffklasse']. "<br>";
	 echo "ausstatung: " . $row['Ausstattung']. "<br>";
	 echo "Farbe: " . $row['Farbe']. "<br>";
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