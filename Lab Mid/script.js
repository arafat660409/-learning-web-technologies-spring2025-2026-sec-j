let display = document.getElementById("display");
let buttons = document.querySelectorAll("button");

let value = "";

buttons.forEach(button => {

button.addEventListener("click", function(){

let btn = this.innerText;

if(btn === "C"){
value = "";
display.value = "";
}

else if(btn === "="){
display.value = eval(value);
value = display.value;
}

else{
value += btn;
display.value = value;
}

});

});