<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">

    <title>CATS</title>
</head>

<body>
    <header class="header">
        <h1 class="header-title">Les races de Chats</h1>
        <div class="header-logos">
            <a href="" class="header-edit"><img src="Images/logo-edit.svg" alt="" class="header-editLogo"></a>
            <a href="" class="header-edit"><img src="Images/logo-delete.svg" alt="" class="header-deleteLogo"></a>
        </div>
    </header>

    <?php
    include('data.php');

    $req = $db-> query('SELECT MAX(id) FROM infosCats');
    $res = $req-> fetch();
    $maxId = $res['MAX(id)'];

    ?>

    <section class="cats">

        <?php
        for ($id=1; $id<=$maxId; $id++){
            $req = $db-> query('SELECT nom FROM infosCats WHERE id='.$id);
            $res = $req-> fetch();
            echo '<div class="cats-fullSquare">
                <a href="read.php?id='.$id.'">'.$res['nom'].'</a>
                   </div>';
        }
        ?>

        <div class="cats-emptySquare">
            <a href="newCat.php"><img src="Images/logo-plus.svg" alt=""></a>
        </div>



    </section>




</body>
</html>