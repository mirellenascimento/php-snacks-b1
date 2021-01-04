<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>


<div style="background-color: grey; border: 1px solid black; width: 50%; margin: auto">
  <?php
  //Teachers with grey background
    for ($i=0; $i < count($db['teachers']); $i++) {
      echo "<p style=\"text-align: center\">" . $db['teachers'][$i]['name'] . " " . $db['teachers'][$i]['lastname'] . "<p>";
    };
  ?>
</div>

<div style="background-color: green; border: 1px solid black; width: 50%; margin: auto">
  <?php
  //PMs with grey background
    for ($i=0; $i < count($db['pm']); $i++) {
      echo "<p style=\"text-align: center\">" . $db['pm'][$i]['name'] . " " . $db['pm'][$i]['lastname'] . "<p>";
    };
  ?>
</div>
