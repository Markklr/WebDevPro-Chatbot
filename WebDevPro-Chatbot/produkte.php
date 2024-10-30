<?php
include('model/produktdaten.php'); // Produktdaten einbinden
?>

<!doctype html>
<html lang="de"> <!-- Definiert das Dokument als HTML5 und legt die Sprache auf Deutsch fest -->
<head>
    <meta charset="utf-8"> <!-- Setzt den Zeichensatz auf UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Optimiert die Darstellung auf mobilen Geräten -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="icon" href="img/logo.png" type="image/png"> <!-- Browser-tab icon -->
    <title>WebDevPro | Dienstleistungen</title> 
</head>
<body>
    <?php include('view/menue.php'); ?> <!-- Nav einbinden -->

    <header>
        <h1>Webentwicklungs-Dienstleistungen</h1> <!-- Hauptüberschrift der Seite -->
    </header>

    <table> 
      <thead> <!-- Tabellenkopf -->
        <tr> <!-- Überschriften der Spalten -->
          <th>Dienstleistung</th> 
          <th>Preis</th> 
          <th>Beschreibung</th> 
          <th>Fertigungszeit</th> 
        </tr>
      </thead>
      <tbody> <!-- Tabelleninhalt -->
        <?php foreach ($produkte as $produkt) : ?> <!-- für jeden einzelnen eintrag des Arrays -->
        <tr>
          <td><?php echo $produkt['name']; ?></td> <!--  Ausgabe Name -->
          <td><?php echo $produkt['preis']; ?></td> <!-- Ausgabe Preis -->
          <td><?php echo $produkt['beschreibung']; ?></td> <!-- Ausgabe Beschreibung  -->
          <td><?php echo $produkt['fertigungszeit']; ?></td> <!-- Ausgabe Fertigungszeit -->
        </tr>
        <?php endforeach; ?> <!-- Ende der Schleife -->
      </tbody>
    </table> 

    <?php include('view/cta.php'); ?> <!-- CTA einbinden -->
    <?php include('view/bottom.php'); ?> <!-- Footer einbinden -->
  </body>
</html>
