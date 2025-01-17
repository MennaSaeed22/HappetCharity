// slider functions

const myslide = document.querySelectorAll(".myslider");
const dot = document.querySelectorAll(".dot");

let counter = 1;
slidefun(counter);
let timer = setInterval(autoSlide, 8000);

function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}
function slidefun(n) {
	let i;
	for (i = 0; i < myslide.length; i++) {
		myslide[i].style.display = "none";
	};
	for (i = 0; i < dot.length; i++) {
		dot[i].className = dot[i].className.replace(" actv", "");
	};
	if (n > myslide.length) {
		counter = 1;
	};
	if (n < 1) {
		counter = myslide.length;
	};
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " actv";
}

// function to change header background

function changebg()
{
	var navbar = document.getElementById('navbar');
	var scrollValue = window.scrollY;
	var border = document.querySelector(".container");
	var linkColor = document.getElementsByClassName('color-w');
	if(scrollValue < 50)
	{
		navbar.classList.remove("navbar");
		border.classList.add("border");
		for (let i = 0; i < linkColor.length;i++)
		{
			linkColor[i].style.color='white'
		}	
	}
	else
	{
		navbar.classList.add('navbar');
		border.classList.remove('border');
		for (let i = 0; i < linkColor.length; i++) 
		{
			linkColor[i].style.color = "black";
		}
	}
}
window.addEventListener("load", changebg);
window.addEventListener('scroll', changebg);


// function to scroll up

let btn = document.getElementById("up");

onscroll = function () {
	if (scrollY >= 400) {
		btn.style.display = "block";
	} else {
		btn.style.display = "none";
	}
};

btn.onclick = function () {
	scroll({
		left: 0,
		top: 0,
		behavior: "smooth",
	});
};

//  side bar function

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

// gallary

document.querySelectorAll(".img-cont img").forEach(image=>{
	image.onclick = ()=> {
		document.querySelector('.pop-up').style.display='block';
		document.querySelector(".pop-up img").src = image.getAttribute('src');
	};
});
document.querySelector(".pop-up span").onclick=function(){
document.querySelector(".pop-up").style.display = "none";
};

// box products

const prouct_containers = [...document.querySelectorAll(".product-container")];
const nxt_btn = [...document.querySelectorAll(".next-button")];
const pre_btn = [...document.querySelectorAll(".pre-button")];
console.log(prouct_containers)
console.log(nxt_btn)
console.log(pre_btn);

prouct_containers.forEach((item, i) => {

	let container_dim = item.getBoundingClientRect();
	let container_width = container_dim.width;
	
	nxt_btn[i].addEventListener('click', () => {
		item.scrollLeft += container_width;
	});
	
	pre_btn[i].addEventListener("click", () => {
		item.scrollLeft -= container_width;
	});
});
