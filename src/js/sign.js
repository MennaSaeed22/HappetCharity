let open = document.getElementById("open");
let close = document.getElementById("close");
let nav = document.querySelector(".cont");

close.onclick = function () {
	nav.classList.add("hide");
	this.classList.add("hide");
	open.classList.remove("hide");
};
onresize = function () {
	nav.classList.add("hide");
	close.classList.add("hide");
	open.classList.remove("hide");
};
open.onclick = function () {
	this.classList.add("hide");
	close.classList.remove("hide");
	nav.classList.remove("hide");
};

// form validation

let btn = document.querySelector(".submit-btn");
btn.onclick= function validation(){
	let x = document.forms["sign"]["name"].value;
	let y = document.forms["sign"]["password"].value;
	let mass1 = document.querySelector(".massege1");
	let mass2 = document.querySelector(".massege2");
	let mass3 = document.querySelector(".massege3");
	mass1.innerHTML = "";
	mass2.innerHTML = "";
	if (x == "") {
		mass1.innerHTML = "name must be filled";
		return false;
	}else if (y == "") {
		mass2.innerHTML = "password must be filled";
		return false;
	}else if(x == "" && y == "" ){
		mass3.innerHTML = "all data must be filled";	
	}
			
};