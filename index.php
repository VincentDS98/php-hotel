<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    for($i = 0; $i < count($hotels); $i++ ){
        echo '<div>Nome: '.$hotels[$i]['name'].'</div>';
        echo '<div>Descrizione: '.$hotels[$i]['description'].'</div>';
        if($hotels[$i]['parking'] == true){
            echo '<div>Parcheggio:Si</div>';
        }
        else{
            echo '<div>Parcheggio:No</div>';
        }
        echo '<div>Parcheggio: '.$hotels[$i]['parking'].'</div>';
        echo '<div>Voto: '.$hotels[$i]['vote'].'</div>';
        echo '<div>Distanza_Dal_Centro: '.$hotels[$i]['distance_to_center'].'</div>';
        echo '<hr>';

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <header>

    </header>

    <main>
    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza_Dal_Centro</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    for($i = 0; $i < count($hotels); $i++ ){
    ?>
            <tr>
            <th ><?php echo $hotels[$i]['name'];?></th>
            <td><?php echo $hotels[$i]['description'];?></td>
            
            <td><?php if($hotels[$i]['parking'] == true){
            echo '<div>Si</div>';
        }
        else{
            echo '<div>No</div>';
        } ?></td>
            <td><?php echo $hotels[$i]['vote'];?></td>
            <td><?php echo $hotels[$i]['distance_to_center'];?></td>
            </tr>
    <?php
    }
    ?>
   
  </tbody>
</table>
    </main>

    <footer>

    </footer>
</body>
</html>