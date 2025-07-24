<!DOCTYPE html>    
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ici on lit!</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../src/logo.png">
    <script src="../script/test.js"></script>

</head>
<body>
    <!-- ZoneLa bibliothèque de l'E2C du menu, en haut de la page-->
    <nav>

        <img id="logo" src="../src/logo2.png" alt="Logo E2C">
        <div id="nav-bar">
            <a class="nav-button" href="../contr./controller/gameController.phpoller/homeController.php">Accueil</a>
            <a class="nav-button" href="../controller/libraryController.php">Bibliothèque</a>
            <a class="nav-button" href="../controller/gameController.php">Détente</a>
        </div>

    </nav>
    <!-- En tête stylé-->
    <?php
        require_once("../view/_partials/_header.php");
    ?>
    <!-- Zone peincipale -->
   
</body>

</html>