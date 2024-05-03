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

/* $isThereParking;

if ($hotel['parking'] = true) {
    $isThereParking = 'sì';
}  else {
    $isThereParking = 'no';
} */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance to center</th>
            </tr>
        </thead>
        <?php foreach ($hotels as $hotel) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $hotel ['name'] ?></th>
                    <td><?php echo $hotel ['description'] ?></td>
                    <td><?php echo $hotel ['parking'] ? 'si' : 'no'; ?></td>
                    <td><?php echo $hotel ['vote'] ?></td>
                    <td><?php echo $hotel ['distance_to_center'] ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>


</body>

</html>