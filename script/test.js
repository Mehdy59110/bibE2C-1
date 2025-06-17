let trigger = document.querySelector('#send-button');
let numberZone = document.querySelector('#user-number');
let displayZone = document.querySelector('#game-display');

let targetNumber = Math.floor(Math.random()*100)+1;

console.log(trigger, numberZone, displayZone,targetNumber);

function compareNumber() {
    //console.log("ça marche");
    let userNumber = numberZone.value;
    let result;
    //console.log(userNumber);
    if (userNumber==targetNumber) {
        result='gagné';
    } else if(userNumber > targetNumber) {
        result=`C'est trop grand!`;
    } else {
        result=`C'est trop petit!`;
    }

    let resultZone = document.createElement('p');
    resultZone.innerHTML = result;
    resultZone.style.padding = "10px";
    resultZone.classList.add('result-line');
    

    //console.log(resultZone);

    displayZone.appendChild(resultZone);

}

trigger.addEventListener('click', compareNumber);












