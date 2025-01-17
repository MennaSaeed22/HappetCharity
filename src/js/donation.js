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
