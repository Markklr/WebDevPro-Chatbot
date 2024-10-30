<?php 

// Überprüfen, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Eingaben auslesen
    $name = htmlspecialchars(trim($_POST['name'])); 

    // Erfolgsmeldung anzeigen
    echo "<p>Vielen Dank, $name! Ihre Nachricht wurde erfolgreich gesendet.</p>"; 
}

?>

<!doctype html>
<html lang="de"> <!-- Definiert das Dokument als HTML5 und legt die Sprache auf Deutsch fest -->
  <head>
    <meta charset="utf-8"> <!-- Setzt den Zeichensatz auf UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Optimiert die Darstellung auf mobilen Geräten -->
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="icon" href="img/logo.png" type="image/png"> <!-- Broser-Tab Icon -->
    <title>WebDevPro | Kontakt</title> 
  </head>
  <body>
    <?php include('view/menue.php'); ?> <!-- Nav einbinden -->

    <header>
      <h1>Kontakt</h1> <!-- Hauptüberschrift der Kontaktseite -->
    </header>

    <div class="contact-container"> <!-- Container für das Kontaktformular -->
      <p>Haben Sie Fragen zu unseren Dienstleistungen oder möchten Sie ein Angebot anfordern? 
      </br>Kontaktieren Sie uns gerne über das folgende Formular:</p> 

      <form action="kontakt.php" method="post"> <!-- Kontaktformular -->
        <label for="name">Ihr Name:</label><br> <!-- Beschriftung Namensfeld -->
        <input type="text" id="name" name="name" required><br><br> <!-- Eingabefeld Namen, erforderlich -->

        <label for="email">Ihre E-Mail-Adresse:</label><br> <!-- Beschriftung E-Mail Feld -->
        <input type="email" id="email" name="email" required><br><br> <!-- Eingabefeld E-Mail, erforderlich -->

        <label for="message">Ihre Nachricht:</label><br> <!-- Beschriftung für das Nachrichtenfeld -->
        <textarea id="message" name="message" rows="10" required></textarea><br><br> <!-- Textarea für die Nachricht, 5 Reihen vorgegeben, erforderlich -->

        <input type="submit" value="Absenden"> <!-- Submit-Button für das Formular -->
      </form>
    </div>

    <?php include('view/bottom.php'); ?> <!-- Footer einbinden -->
  </body>
</html>
