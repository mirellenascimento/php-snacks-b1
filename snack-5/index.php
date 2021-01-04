<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo. -->

<?php

$text = 'Un provvedimento ponte tra il 7 e il 15 gennaio, ovvero tra la data di scadenza del decreto natalizio e quella dell\'ultimo Dpcm. Con un\' ipotesi per il weekend del 9 e 10 in zona rossa: preoccupa la velocità di diffusione della variante inglese."Valutiamo l\'ipotesi per il prossimo fine settimana di applicare le misure da zona rossa per i festivi e prefestivi, con la salvaguardia dei Comuni più piccoli per gli spostamenti. Dopo aver raccolto i contributi dei presidenti domani si tireranno le somme con il Governo". Così -a quanto si apprende - il ministro della Salute, Roberto Speranza, al termine del vertice con le Regioni nella notte. Sempre a quanto si apprende, per i Comuni sotto i 5mila abitanti saranno comunque possibili gli spostamenti entro i 30 km, ad eccezione del Capoluogo di provincia. Il 7 e l\'8 invece ci dovrebbe essere una breve tregua, con l\'Italia tutta gialla, prima di una nuova decisione sulle fasce di rischio. Fra le ipotesi c\'è anche la proroga del divieto di ospitare a casa più di due parenti o amici, minori di 14 anni esclusi. La misura, già prevista nel decreto natalizio in scadenza il 6 gennaio, sarebbe così prorogata fino al 15 del mese. Sono previsti, infine,  l\'8 gennaio i dati della Cabina di regia per il monitoraggio delle Regioni e "un certo numero di regioni che dovrebbero cambiare fascia" w saranno individuate a seguito delle verifiche effettuate sulla base del monitoraggio, il passaggio effettivo alla nuova fascia di assegnazione avverrà l\'11 gennaio. Al vertice Stato-Regioni erano presenti i capidelegazione della maggioranza, i ministri per le Autonomie e per la Salute, Francesco Boccia e Roberto Speranza e membri del Cts. Tra i governatori, erano presenti Toti, Zaia, Bonaccini e Toma.';

$textByDots = explode(".", $text);
?>

<h1>Original Text</h1>
<?= $text . "<br>"?>

<h1>Text Divided by Dots</h1>
<?php
for ($i=0; $i < count($textByDots) -1; $i++) {
  echo "<p>" . $textByDots[$i] . ".<p>";
}
?>
