<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#"><?php echo $website_title?></a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Aufträge</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Fahrzeuge
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Alle Fahrzeuge</a>
                <a class="dropdown-item" href="#">Fahrezeuge zum Verkauf</a>
                <a class="dropdown-item" href="#">Fahrzeuge zum Schlachten</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Kunden
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Neuen Kunden Anlegen</a>
                <a class="dropdown-item" href="#">Kunden Information</a>
                <a class="dropdown-item" href="#">Rechnungen</a>
                <a class="dropdown-item" href="#">Bestellung</a>
            </div>
        </li>

    </ul>
    <form class="form-inline " action="/search.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>

</nav>
