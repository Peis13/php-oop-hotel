<?php
require_once(__DIR__ . '/database.php');

// Richiesta sql per i dati di tutte le stanze dell'hotel
$sql = "SELECT * FROM `stanze`";
$risultati = $conn->query($sql);

if ($risultati && $risultati->num_rows > 0) {
  $stanze = [];

  // risultati di ogni singola riga della tabella ($singolo_record)
  while($singolo_record = $risultati->fetch_assoc()) {
    $stanze[] = $singolo_record;
  }

} elseif ($risultati) {
  // die("0 results");
  throw new Exception('0 results');

} else {
  // die("query error");
  throw new Exception('query error');
}
$conn->close();
?>
