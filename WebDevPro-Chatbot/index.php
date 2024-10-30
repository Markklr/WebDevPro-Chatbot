<!doctype html>
<html lang="de"> <!-- Definiert das Dokument als HTML5 und legt die Sprache auf Deutsch fest -->
<head>
    <meta charset="utf-8"> <!-- Setzt den Zeichensatz auf UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Optimiert die Darstellung auf mobilen Geräten -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png" type="image/png"> <!-- Browser-Tab icon  -->
    <title>WebDevPro | Startseite</title> 
</head>
<body>
    <?php include('view/menue.php'); ?> <!-- Nav einbinden -->

    <header>
        <h1>Willkommen bei WebDevPro – Ihre Experten für Webentwicklung</h1> <!-- Hauptüberschrift der Startseite -->
    </header>

    <section class="intro"> <!-- Einführungsbereich -->
        <div class="container"> 
            <div class="intro-text"> 
                <h2>Ihr Partner für maßgeschneiderte Webseiten</h2> 
                <p>Bei WebDevPro bieten wir professionelle Lösungen für Ihre Webprojekte. Egal, ob Sie eine kleine Unternehmenswebsite, eine dynamische Webanwendung oder einen umfassenden E-Commerce-Shop benötigen, wir haben die richtigen Tools und das Know-how, um Ihre Vision zu realisieren.</p> <!-- Einführungstext über die Dienstleistungen -->
            </div>
            <div class="intro-image"> 
                <img src="img/Webdesign.webp" alt="Webdesign Beispiel"> <!-- Beispielbild für Webdesign -->
            </div>
        </div>
    </section>

    <section class="highlights"> <!-- Highlight Section -->
        <div class="container"> 
            <div class="highlight warum-uns"> <!-- Warum-Uns Container -->
                <h2>Warum WebDevPro?</h2> 
                <ul> 
                    <li><i class="fas fa-check-circle"></i> Erfahrung: Über 10 Jahre Erfahrung in der Webentwicklung</li> 
                    <li><i class="fas fa-check-circle"></i> Expertise: Spezialisierung auf E-Commerce, CMS, und individuelle Weblösungen</li> 
                    <li><i class="fas fa-check-circle"></i> Innovation: Nutzung der neuesten Technologien und Tools</li> 
                    <li><i class="fas fa-check-circle"></i> Support: Fortlaufender Support nach Projektabschluss</li> 
                </ul>
            </div>
            <div class="highlight technologiestack"> <!-- Technologie-Stack Container -->
                <h2>Unser Technologie-Stack</h2> 
                <p>Wir setzen auf moderne Technologien und bewährte Frameworks:</p> 
                <ul> <!-- Liste der Technologien -->
                    <li><i class="fas fa-code"></i> Frontend: HTML, CSS, JavaScript, React, Vue.js</li> 
                    <li><i class="fas fa-server"></i> Backend: PHP, Node.js, Python</li> 
                    <li><i class="fas fa-cogs"></i> CMS: WordPress, Joomla</li> 
                    <li><i class="fas fa-database"></i> Datenbanken: MySQL, MongoDB</li> 
                </ul>
            </div>
        </div>
    </section>

    <?php include('view/cta.php'); ?> <!-- CTA einbinden -->
    <?php include('view/bottom.php'); ?> <!-- Footer einbinden -->
</body>
</html>
