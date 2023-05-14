<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('connect.php');
    $query = $db->query('SELECT * from users');
    $results = $query->fetchAll();
    foreach ($results as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nom: " . $row['name'] . "<br>";
        echo "<hr>";
    }
    ?>


</body>

</html>