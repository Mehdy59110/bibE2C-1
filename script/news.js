let trigger = document.querySelector("#news-trigger");
let aside = document.querySelector("aside");

function showNews() {
    aside.style.right = "20px";
}

trigger.addEventListener("click", showNews);