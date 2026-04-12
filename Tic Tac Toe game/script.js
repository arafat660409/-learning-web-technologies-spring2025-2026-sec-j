const cells = document.querySelectorAll(".cell");
const statusText = document.getElementById("status");
const resetBtn = document.getElementById("resetBtn");

let board = ["","","","","","","","",""];
let currentPlayer = "X";
let running = true;

const winConditions = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

cells.forEach(cell => {
cell.addEventListener("click", cellClicked);
});

resetBtn.addEventListener("click", resetGame);


function cellClicked(){

const index = this.getAttribute("data-index");

if(board[index] != "" || !running){
return;
}

board[index] = currentPlayer;
this.innerHTML = currentPlayer;

checkWinner();
}


function checkWinner(){

let won = false;

for(let i=0;i<winConditions.length;i++){

let a = winConditions[i][0];
let b = winConditions[i][1];
let c = winConditions[i][2];

if(board[a] && board[a] == board[b] && board[a] == board[c]){
won = true;
break;
}

}

if(won){
statusText.innerHTML = "Player " + currentPlayer + " Wins!";
running = false;
return;
}

if(!board.includes("")){
statusText.innerHTML = "It's a Draw!";
running = false;
return;
}

changePlayer();
}


function changePlayer(){

if(currentPlayer === "X"){
currentPlayer = "O";
}else{
currentPlayer = "X";
}

statusText.innerHTML = "Current Player: " + currentPlayer;
}


function resetGame(){

board = ["","","","","","","","",""];
currentPlayer = "X";
running = true;

cells.forEach(cell => {
cell.innerHTML = "";
});

statusText.innerHTML = "Current Player: X";
}