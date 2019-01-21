<?php
  /*
  Esercizio due
  Censuratore in php
  */

  $paragrafo = "Come parte di una ristrutturazione delle finanze della Formula 1 dall'inizio del 2013, la FIA ha calcolato la quota di iscrizione per le squadre in base al numero di punti ottenuti nella stagione precedente.";

  $lunghezzaStringa = strlen($paragrafo);

  $badword = $_GET['parola'];

  echo $paragrafo;

  echo "<br />";

  echo "<br />";

  echo "La lunghezza della stringa è: $lunghezzaStringa";

  echo "<br />";

  echo "<br />";
  //cerco ora la string da Censurare

  $ricerca = strpos($paragrafo, $badword);
  //controllo il valore di uscita di ricerca
  echo $ricerca;

  echo "<br />";

  echo "<br />";

  if($ricerca !== false) {
    //stringa trovata
    $paragrafoCensurato = str_replace($badword,"***",$paragrafo);
    echo "FRASE CENSURATA";

    echo "<br />";

    echo "<br />";

    echo $paragrafoCensurato;

  }
  else {
    //string non trovata
    echo "non ho trovato nessuna parola da censurare";
  }

 ?>
