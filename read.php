<?php

include('data.php');

$id = $_GET['id'];
$req = $db->query('SELECT id,nom,comportement,morphologie,pelage,origine,description,caractère FROM infosCats WHERE id='.$id);
$res = $req->fetch ();
$id = $res['id'];


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="read.css">
    <title>read.php</title>
</head>

<body>



    <div class="container">
        <a href="edit.php?=<?php echo $id;?>" class="edit">
            <img src="Images/logo-edit.svg" class="logo">
        </a>

        <h1 class="container-title"><?php echo $res['nom']; ?></h1>

        <p class="container-carac">Région d'origine</p>
        <p class="container-text"><?php echo $res['origine']; ?></p>

        <p class="container-carac">Morphologie</p>
        <p class="container-text"><?php echo $res['morphologie']; ?></p>

        <p class="container-carac">Pelage</p>
        <p class="container-text"><?php echo $res['pelage']; ?></p>

        <p class="container-carac">Comportement</p>
        <p class="container-text"><?php echo $res['comportement']; ?></p>
        <p class="container-text"><?php echo $res['description']; ?></p>

        <p class="container-carac">Caractère</p>
        <p class="container-text"><?php echo $res['caractère']; ?></p>

    </div>


</body>
</html>
