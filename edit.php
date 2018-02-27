<?php

include('data.php');

$id = $_GET['id'];
$req = $db->query('SELECT nom,comportement,morphologie,pelage,origine,description,caractère FROM infosCats WHERE id='.$id);
$res = $req->fetch ();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="rowContainer">
        <div class="carac"></div>
        <form action="update.php" method="post">
            <input type="text" name="catName">
        </form>
    </div>

</body>
</html>


