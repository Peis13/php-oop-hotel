<!-- Partiamo dal diagramma della tabella stanze nel db hotel (usate phpmyadmin per vedere le caratteristiche della tabella) e creiamo una classe che rifletta la tabella stanze, poi la usiamo per stampare in pagina i dati.
I dati anche qui non arrivano da db ma da un array. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>boolean hotel</title>
  </head>
  <body>
    <h1>boolean hotel</h1>

    <?php
    require_once(__DIR__ . '/server.php');
    require_once(__DIR__ . '/Stanza.php');

    try {
      foreach ($stanze as $stanza) {
        $singola_stanza = new Stanza(
          $stanza['id'],
          $stanza['room_number'],
          $stanza['floor'],
          $stanza['beds'],
          $stanza['created_at'],
          $stanza['updated_at']
        );
    ?>

    <h3><?php echo 'stanza numero: ' . $stanza['room_number']; ?></h3>
    <ul>
      <li><?php echo 'id: ' . $stanza['id']; ?></li>
      <li><?php echo 'piano: ' . $stanza['floor']; ?></li>
      <li><?php echo 'letti: ' . $stanza['beds']; ?></li>
      <li><?php echo 'data creazione: ' . $stanza['created_at']; ?></li>
      <li><?php echo 'data aggiornamento: ' . $stanza['updated_at']; ?></li>
    </ul>

    <?php
      }
    } catch (Exception $exception) {
      echo 'errore: ' . $exception->getMessage();
    }
    ?>
  </body>
</html>
