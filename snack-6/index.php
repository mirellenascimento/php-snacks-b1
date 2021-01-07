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
    foreach ($db['teachers'] as $teacher){
      echo "<p style=\"text-align: center\">" . $teacher['name'] . " " . $teacher['lastname'] . "<p>";
    };
  ?>
</div>

<div style="background-color: green; border: 1px solid black; width: 50%; margin: auto">
  <?php
  //PMs with grey background
    foreach ($db['pm'] as $pm) {
      echo "<p style=\"text-align: center\">" . $pm['name'] . " " . $pm['lastname'] . "<p>";
    };
  ?>
</div>
