<?php

include('data.php');

$req= $db -> prepare ('INSERT INTO infosCats(nom,comportement,morphologie,pelage,origine,description,caractère) VALUES (:nom,:comportement,:morphologie,:pelage,:origine,:description,:caractère)');
$req->execute([
    'nom' => $_POST['catname'],
    'origine' => $_POST['origine'],
    'morphologie' => $_POST['morphologie'],
    'pelage' => $_POST['pelage'],
    'comportement' => $_POST['comportement'],
    'description' => $_POST['description'],
    'caractère' => $_POST['caractère']
]);

