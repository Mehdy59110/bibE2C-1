<?php
    $pageTitle = "Espace détente";
    $pageSubtitle = "Je kiff le JavaScript!";
    $navList = [
        [
            "label" => "Bilbliothèque",
            "path" => "../controller/libraryController.php"
        ],
        [
            "label" => "Accueil",
            "path" => "../controller/homeController.php"
        ]
    ];
    //var_dump($navList);
    $navList[] = [
        "label" => "Connecter",
        "path" => "#"
    ];

    require_once("../view/gameView.php");
?>

