<?php
// Konfiguration, Produktdaten und Funktionen laden
$config = include('config/config.php'); 
$produkte = include 'model/produktdaten.php'; 
include 'model/funktionen.php'; 
global $config; 
?>  

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="icon" href="img/logo.png" type="image/png"> <!-- Tab-icon der Seite -->
    <title>WebDevPro | Chatbot</title> 
</head>
<body>
<?php include('view/menue.php'); ?> <!-- Navigationsleiste einbinden -->

<header>
    <h1>Chatbot-Assistent</h1> <!-- Seiten Überschrift -->
</header>

<div class="message-display">
    <?php
    // Überprüft, ob eine Nachricht gesendet wurde
    if (isset($_POST['prompt'])) {
        $userPrompt = trim($_POST['prompt']); // Holt die Benutzereingabe und entfernt überflüssige Leerzeichen
        
        // Sucht die Produktbeschreibung, basierend auf der Benutzereingabe
        $produktbeschreibung = finde_produktbeschreibung($userPrompt, $produkte);

        // Holt den System-Prompt aus der Konfiguration
        $systemPrompt = $config['system_prompt'];
        
        // Wenn eine Produktbeschreibung gefunden wurde, wird sie zum System-Prompt hinzugefügt
        if ($produktbeschreibung) {
            $systemPrompt .= " " . $produktbeschreibung;
        }

        $payload = array(
            'messages' => array(
                array(
                    'role' => 'system', 
                    'content' => $systemPrompt // Inhalt des System-Prompts 
                ),
                array(
                    'role' => 'user', 
                    'content' => $userPrompt // Inhalt der Benutzereingabe 
                )
            ),
            'model' => $config['llm_model'] // API Modell aus Config
        );

        $result = groq_api_call($payload);

        // Zeige die eingabe des Benutzer im Chatverlauf an
        echo '<div class="chat-message user">' . htmlspecialchars($userPrompt) . '</div>';

        // Überprüfe, ob die API eine Antwort zurückgegeben hat
        if (isset($result['choices'][0]['message']['content'])) {
            // Zeige die Antwort des Bots im Chatverlauf an
            echo '<div class="chat-message bot">' . nl2br(htmlspecialchars($result['choices'][0]['message']['content'])) . '</div>';
        } else {
            // Falls keine Antwort zurückgegeben wurde, zeige eine Fehlermeldung an
            echo '<p style="color:#3D52A0;">Entschuldigung, es gab ein Problem bei der Verarbeitung Ihrer Anfrage.</p>';
        }
    } else {
        // Wenn keine Nachricht gesendet wurde, wird ein Platzhalter erstellt
        echo '<div class="message-placeholder">Bisher wurden noch keine Nachrichten geschrieben</div>';
    }
    ?>
</div>

<div class="chatbot-container">
    <!-- Formular Eingabe Feld -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input name="prompt" placeholder="Ihre Nachricht eingeben..." required> 
        <button type="submit"> 
            <img src="img/Sendenpfeil.png" alt="Los" style="width: 20px; vertical-align: middle;"> <!-- Senden-Symbol -->
        </button>
    </form>
</div>

<?php include('view/cta.php'); ?> <!-- CTA Einbinden -->
<?php include('view/bottom.php'); ?> <!--  Footer Einbinden -->
</body>
</html>
