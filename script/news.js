let trigger = document.querySelector("#news-trigger");
let aside = document.querySelector("aside");
/* récupérer la croix dans une variable */
let close = document.querySelector("#close");

function showNews() {
    aside.style.right = "20px";
    trigger.style.opacity = "0";
}

function closeNews() {
    /* remettre les élements de style aux valeurs de départ*/
    aside.style.right = "-33%";
    trigger.style.opacity = "1";
}

trigger.addEventListener("click", showNews);
/* la croix détecte un click et déclenche la fontion closNews */
close.addEventListener("click", closeNews);