<?
// file di testo che uso come contatore
$miofile = 'contatore.txt';

// recupero il valore attuale del contatore
$visite = file($miofile);

// verifico che la funzione abbia avuto successo
if ($visite !== false) {
  // Incremento il valore di 1
  $visite[0]++;

  // Apro il file in modalità scrittura
  $fp = fopen($miofile , 'w');

  // Scrivo il valore numerico incrementato
  fputs($fp , $visite[0]);

  // Chiudo
  fclose($fp);
}

// Faccio il redirect dopo aver fatto i conti
header('HTTP/1.1 301 Moved Permanently');
header('Location: https://www.github.com/EnricoBoffetti');
exit;
?>
