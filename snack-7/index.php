<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
  [
    'name' => 'John',
    'surname' => 'McMurphy',
    'grades' => [
      'English' => 6,
      'Math' => 4,
      'Biology' => 8,
      'Geography' => 6,
      'History' => 8,
      'Arts' => 4,
      'Spanish' => 3
    ]
  ],
  [
    'name' => 'Marie',
    'surname' => 'Lorens',
    'grades' => [
      'English' => 10,
      'Math' => 7,
      'Biology' => 8,
      'Geography' => 9,
      'History' => 10,
      'Arts' => 8,
      'Spanish' => 5
    ]
  ],
  [
    'name' => 'Anna',
    'surname' => 'Springs',
    'grades' => [
      'English' => 7,
      'Math' => 9,
      'Biology' => 2,
      'Geography' => 4,
      'History' => 6,
      'Arts' => 8,
      'Spanish' => 5
    ]
  ],
  [
    'name' => 'Paul',
    'surname' => 'Jordan',
    'grades' => [
      'English' => 6,
      'Math' => 9,
      'Biology' => 8,
      'Geography' => 10,
      'History' => 7,
      'Arts' => 10,
      'Spanish' => 6
    ]
  ],
];

for ($i=0; $i < count($students); $i++) {
  $students[$i]['median'] = 0;
  $gradesSum = 0;
  foreach ($students[$i]['grades'] as $key => $value) {
    $gradesSum += $value;
  }
  $media = $gradesSum/count($students[$i]['grades']);
  $students[$i]['median'] = round($media, 2);

  $mediaColor = 0;
  if ($media > 6) {
    $mediaColor = 'blue';
  } else {
    $mediaColor = 'red';
  }

  echo "<h3> Alunno: " . $students[$i]['name'] . " " . $students[$i]['surname'] . "</h3>";
  echo "<h3 style=\"color: " . $mediaColor . "\">Media: " . $students[$i]['median'] . "</style></h3> <hr>";
}

?>
