<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque E2C</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../src/logo.png">
    <script src="../script/news.js" defer></script>
</head>







<body>
    <!-- Zone du menu, en haut de la page-->
    <nav>

        <img id="logo" src="../src/logo2.png" alt="Logo E2C">
        <div id="nav-bar">
            <a class="nav-button" href="../contr./controller/gameController.phpoller/homeController.php">Accueil</a>
            <a class="nav-button" href="../controller/libraryController.php">Bibliothèque</a>
            <a class="nav-button" href="../controller/gameController.php">Détente</a>
        </div>

    </nav>

    <?php
        require_once("../view/_partials/_header.php");
    ?>
    
   
    <!--Zone principale -->
    <div id="main-game">
        <div id="user-interface">
            <div>
                <label for="user-number">Entrez un nombre entre 1 et 100</label>            
                <input id="user-number" name="user-number" type="number" placeholder="Votre nombre ici" min="1" max="100" >
            </div>
               
            <input id="send-button" type="submit" value="Proposer"> 
        </div>
            
               
            
        <div id="game-display">

        </div>
    </div>
   
</body>
</html>
               
            