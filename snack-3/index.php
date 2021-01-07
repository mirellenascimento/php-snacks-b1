<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->


<?php

$posts = [
  '31-12-2020' => [
      [
          'title' => 'Oltre 32mila i vaccinati in Italia. Tutti i dati sul sito del commissario per l\'emergenza',
          'author' => 'repubblica.it',
          'text' => 'Consegnate finora 480mila dosi. Friuli Venezia Giulia, Bolzano e Lazio al momento hanno la percentuale più alta rispetto alla popolazione'
      ],
      [
          'title' => 'È morto Robert Hossein, protagonista del cinema e del teatro francese',
          'author' => 'repubblica.it',
          'text' => 'L\'attore e regista aveva 93 anni. Noto per aver aver interpretato il ruolo di Jeoffroy de Peyrac nella serie di film "Angelica", ha recitato anche nel musical "I miserabili" e "Nell\'anno del Signore" di Luigi Magni'
      ],
      [
          'title' => 'Alimentari, bollette della luce, banche: nel 2021 aumenti per 795 euro',
          'author' => 'repubblica.it',
          'text' => 'La stima è di Federconsumatori: "Lievitazione delle tariffe e dei prezzi cadrà in un momento difficile per tante famiglie, saranno accentuate le disparità"'
      ]
  ],
  '02-01-2021' => [
      [
          'title' => 'Scuola, le Regioni frenano sulla riapertura. Attesa per la decisione sulle fasce di rischio. L\'Abruzzo dal 7 tornerà zona gialla',
          'author' => 'di Laura Mari per repubblica.it',
          'text' => 'Dal Lazio al Veneto, si levano diversi allarmi sul ritorno in classe degli studenti. La ministra Azzolina: "Non possiamo arrenderci e non lo faremo". Sci, Speranza firma l\'ordinanza: impianti e piste aperte dal 18 gennaio. Ma si attende il report della cabina di regia sui monitoraggi dei contagi del coronavirus: in base ai dati, il governo deciderà se tutta l\'Italia sarà gialla dopo l\'Epifania'
      ],
      [
          'title' => 'La solitudine di Micol: "Un anno in trappola, ridatemi i miei prof"',
          'author' => 'di di Maria Novella De Luca repubblica.it',
          'text' => 'Quindici anni, studentessa del liceo classico "Tasso" di Roma, racconta il suo anno di "Dad" e il rientro a scuola il 7 gennaio prossimo. "Mi spaventa tornare in una classe dimezzata. Il Governo ha trattato gli studenti come l\'ultima ruota del carro. La pandemia ci ha rubato un pezzo di giovinezza, ma ce la faremo, adesso c\'è il vaccino"'
      ],
      [
          'title' => 'Melissa Greta Marchetto: "Da Quelli che il calcio a Magazzini Musicali seguendo il mio modello: Simona Ventura"',
          'author' => 'di Silvia Fumarola per repubblica.it',
          'text' => 'La conduttrice presenta con Gino Castaldo il nuovo programma in onda dal 2 gennaio su Rai 2: classifiche e interviste agli artisti che si esibiscono dal vivo. Tra i primo ospiti Pinguini tattici nucleari e Diodato'
      ]
  ],
    '03-01-2021' => [
        [
            'title' => 'Carmelo Bene, un genio immateriale',
            'author' => 'di Anna Bandettini per repubblica.it',
            'text' => 'Luisa Viglietti, compagna dell’attore e regista negli ultimi otto anni di vita, offre un ritratto intimo e sentimentale di uno degli artisti più complessi e controversi (e incompresi) della cultura italiana del Novecento'
        ],
        [
            'title' => 'Il Papa: "Mi addolora chi va in vacanza per sfuggire al lockdown"',
            'author' => 'repubblica.it',
            'text' => 'Il pontefice al termine dell\'Angelus: avrebbero dovuto pensare a chi è stato buttato a terra dalla pandemia'
        ],
        [
            'title' => 'Covid, l\'appello di Mori: "Vaccinare prima i politici e i giovani"',
            'author' => 'di Concetto Vecchio per repubblica.it',
            'text' => 'Il presidente della Consulta di bioetica: "Chi deve assumere decisioni importanti deve essere immunizzato per primo"'
        ]
    ],
];

foreach ($posts as $date => $items) {
  echo "<h1>" . $date . "</h1><br>";
  foreach ($items as $text){
    echo "<h2>" . $text['title'] . "</h2>";
    echo "<h4>" . $text['author'] . "</h4>";
    echo "</p>" . $text['text'] . "<p><br>";
  }
  echo "<hr><br><br><br>";
}
?>
