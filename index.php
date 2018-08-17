<html>
	<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<?php 
				include_once('settings.php');
		?>
		<title><?php echo $website_title ?> </title>
	<head>
	<body>
        <!-- menü band ANFANG-->
        <div class="container-fluid">
            <div class="col-md-12">
                <?php

                    include_once('menu.php');

                ?>
            </div>
        </div>

        <!-- menü band ENDE-->
        <div class="container-fluid">
            <!-- Information ANFANG-->
            <div class="col-md-1">
                <?php

                include_once ('info.php');

                ?>
            </div>
            <!-- Information Ende-->

            <!-- MainEnde-->

            <div class="col-md-11">

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


            </div>

        </div>
V

        <div class="container"> <!-- Footer-->
            <div class="col-md-12">

                <?php
                    include_once('footer.php');
                ?>

            </div>
        </div>


<br>

  
	</body>
	</html>