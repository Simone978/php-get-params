//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
 <div class="green">
   <ul>
   <?php
    $pm = $db[pm];
    for ($i=0; $i < count($pm); $i++) {
     echo "<li>" . $pm[$i][name] . " " . $pm[$i][lastname] . "</li>";
   } ?>
 </ul>
 </div>
 <div class="grey">
   <ul>
   <?php
   $teacher = $db[teachers];
    for ($i=0; $i < count($teacher); $i++) {
     echo "<li>" . $teacher[$i][name] . " " . $teacher[$i][lastname] . "</li>";
   } ?>
   </ul>
 </div>

</body>
</html>
