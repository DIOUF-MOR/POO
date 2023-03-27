<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . 'boostrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . 'css/kfbootstrapkf.css' ?>">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . 'css/layout.style.css' ?>">


    <title>poo</title>
</head>

<body>

    <?php require_once($Constantes::ROOT() . "templates/layout/navebar.html.php") ?>

    <div class="container">
        <?= $content_for_views ?>
    </div>


</body>
<script src="<?= $Constantes::WEB_ROOT . 'boostrap/js/bootstrap.js' ?>"></script>

</html>