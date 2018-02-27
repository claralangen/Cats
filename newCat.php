<?php
include('data.php');

$req = $db->query('SELECT nom,comportement,morphologie,pelage,origine,description,caractère FROM infosCats');
$res = $req->fetch ();
    
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="create.css">
    <title>newCat.php</title>
</head>
    
<body>

    <form action="create.php" method="post" class="form">

        <input type='text' name='catname' class="catname" placeholder="Nom de la race"><br/>

        <input type="text" name="origine" class="origine" placeholder="Région d'origine"><br/>
        <input type="text" name="morphologie" class="morphologie" placeholder="Morphologie"><br/>
        <input type="text" name="pelage" class="pelage" placeholder="Pelage"><br/>
        <input type="text" name="comportement" class="comportement" placeholder="Comportement"><br/>

        <input type="text" name="description" class="description" placeholder="Description"><br/>
        <input type="text" name="caractère" class="caractère" placeholder="Caractère"><br/>


        <input type="submit" class="submit" value="créer une nouvelle race"><br/>

    </form>

</body>