<!-- Partiamo dal diagramma della tabella stanze nel db hotel (usate phpmyadmin per vedere le caratteristiche della tabella) e creiamo una classe che rifletta la tabella stanze, poi la usiamo per stampare in pagina i dati.
I dati anche qui non arrivano da db ma da un array. -->

<?php
require_once(__DIR__ . '/server.php');
require_once(__DIR__ . '/Stanza.php');

foreach ($stanze as $stanza) {
  $singola_stanza = new Stanza(
    $stanza['id'],
    $stanza['room_number'],
    $stanza['floor'],
    $stanza['beds'],
    $stanza['created_at'],
    $stanza['updated_at']
  );
  var_dump($singola_stanza);
}
?>
