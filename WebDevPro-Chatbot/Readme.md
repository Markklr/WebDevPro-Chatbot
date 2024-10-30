# WebDevPro

## Projektbeschreibung
Eine Website für einen Webentwicklungsdienstleister mit einem Verkaufsassistent-Chatbot, der Website-Programmierungsservices anbietet. Kunden können über ein Chatbot Fragen zu verschiedenen Webentwicklungsdienstleistungen stellen und erhalten Antworten basierend auf den hinterlegten Informationen zu den angebotenen Services.

## Verwendungszweck
Das Projekt dient als automatisierter Assistent für potenzielle Kunden, um Informationen zu den angebotenen Webentwicklungsdienstleistungen zu erhalten, z. B. Preisinformationen oder Fertigungszeit. Ziel ist es, Kundenanfragen effizient zu beantworten und Anfragen zur weiteren Bearbeitung an das Unternehmen zu übermitteln.

## Voraussetzungen
PHP 7.4+ oder höher
Groq API Schlüssel für die Integration mit einem LLM-Modell
Webserver mit PHP-Unterstützung (z.B. Apache)

## Projektdateien
config/config.php: Konfigurationsdatei, die API-Schlüssel und Systemeinstellungen speichert.
chatbot.php: Controller-Datei für den Chatbot, die die Anfragen der Kunden verarbeitet und über die Groq-API Antworten generiert.
produkte.php: Übersicht aller angebotenen Webentwicklungsdienstleistungen in Form einer Tabelle.
kontakt.php: Seite mit einem Kontaktformular.
impressum.php: Enthält das Impressum der Webseite.
model/produktdaten.php: Enthält die Produktdaten als Array.
model/funktionen.php: Alle Funktionen.
view/cta.php, view/menue.php, view/bottom.php: Layout-Dateien, die das Design und das Navigationsmenü der Webseite strukturieren.
css/style.css: CSS-Datei zur Gestaltung der Webseiten.
img/: Enthält die Bilddateien der App.

## Installation und Konfiguration
Projekt in das Root-Verzeichnis deines Webservers klonen.

git clone https://github.com/Markklr/WebDevPro-Chatbot.git
API-Schlüssel konfigurieren: Öffne die Datei config/config.php und trage deinen Groq-API-Schlüssel ein:

<?php
return array(
    'llm_model' => 'gemma2-9b-it', // Modell für den Chatbot
    'groq_api_key' => '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', // Dein API-Schlüssel
    'ollama_url' => 'https://api.groq.com/openai/v1/chat/completions',
    'system_prompt' => 'Du bist ein professioneller Verkaufsassistent für Webentwicklung, der potenziellen Kunden unsere Dienstleistungen erklärt. Unser Firmenname ist WebDevPro'
);
?>

Produktdaten anpassen: In der Datei model/produktdaten.php kannst du die Dienstleistungsdaten anpassen.


Webseite aufrufen: Öffne deinen Webbrowser und rufe die Webseite auf (z. B. http://localhost/webdevpro-chatbot), um den Chatbot zu testen und Anfragen zu stellen.
