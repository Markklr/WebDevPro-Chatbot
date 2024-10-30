<?php
$config = include('config/config.php'); 
include('model/produktdaten.php'); 


function finde_produktbeschreibung($benutzer_eingabe, $produkte) {
    // Durchlaufe jedes Produkt im Produkte-Array
    foreach ($produkte as $produkt) {
        // Überprüfe, ob der Name des Produkts in der Benutzereingabe vorkommt
        if (stripos($benutzer_eingabe, $produkt['name']) !== false) { 
            // Wenn gefunden, gebe die Produktbeschreibung zusammen mit Preis und Fertigungszeit zurück
            return "Unser Angebot: " . $produkt['name'] . ". " . $produkt['beschreibung'] . " Der Preis beträgt " . $produkt['preis'] . ". Die geschätzte Fertigungszeit beträgt " . $produkt['fertigungszeit'] . ".";
        }
    }
    // Wenn kein Produkt gefunden wurde, gebe null zurück
    return null;
}


function groq_api_call($payload)
{
    global $config; 
    $groq_api_key = $config['groq_api_key']; // Holt den API-Schlüssel aus der Konfiguration
    
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $config['ollama_url']);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer ' . $groq_api_key));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    
    if(curl_errno($curl)) {
        echo 'Request Error: ' . curl_error($curl); 
    }
    
    curl_close($curl);
    return json_decode($result, true);
}
?>
