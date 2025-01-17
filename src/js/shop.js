// function to side nav bar
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

// shop functions

// open & close cart

const cart_icon = document.querySelector("#cart-icon");
const cart = document.querySelector(".cart");
const closeCart = document.querySelector(".cart-close");

cart_icon.addEventListener('click', () => {
	cart.classList.add("active");
});

closeCart.addEventListener('click', () => {
	cart.classList.remove("active");
});

if(document.readyState == 'loading'){
	document.addEventListener('DOMContentLoaded', start());
}else{
	start();
};

function start(){
	addEvents();
};

function update(){
	addEvents();
	update_total();
};

function addEvents(){
	// remove items
	let cart_remove_btn = document.querySelectorAll(".cart-remove");
	cart_remove_btn.forEach((btn) => {
		btn.addEventListener("click", Remove_CartItem);
	});
	// change item quantity
	let cart_quantity = document.querySelectorAll(".cart-quantity");
	cart_quantity.forEach((input) => {
		input.addEventListener("change", changeQuantity);
	});
	// add item to the cart
	let addCart_btns = document.querySelectorAll(".add-cart");
	addCart_btns.forEach(btn => {
		btn.addEventListener("click", addCartItem);
	});
	// buy order
	const buy_btn = document.querySelector(".btn-buy");
	buy_btn.addEventListener('click', buyOrder);
};


// hendel events functions

function Remove_CartItem(){
	this.parentElement.remove();
	itemsAdded = itemsAdded.filter(
		(el) => el.title != this.parentElement.querySelector(".cart-product-title").innerHTML
		);
	update();
};

function changeQuantity(){
	if(isNaN(this.value) || this.value < 1){
		this.value = 1;
	}else{
		this.value = Math.floor(this.value);
	}
	update();
}

let itemsAdded = [];

function addCartItem(){
	let product = this.parentElement;
	let title = product.querySelector(".product-title").innerHTML;
	let price = product.querySelector(".product-price").innerHTML;
	let img_src = product.querySelector(".product-img").src;
	let new_ToAdd = { title, price, img_src };
	
	// check if the element is exist
	if(itemsAdded.find( el => el.title == new_ToAdd.title)){
		window.alert("this item is already exist!");
		return;
	}else{
		itemsAdded.push(new_ToAdd);
	}
	// add
	let cartBox_element = CartBox(title, price, img_src);
	let newNode = document.createElement('div');
	newNode.innerHTML = cartBox_element;
	const cartContent = cart.querySelector(".cart-content");
	cartContent.appendChild(newNode);
	update();
}
function buyOrder(){
	if(itemsAdded <= 0){
		alert('Make an order first');
		return;
	}else{
		const cartContent = cart.querySelector(".cart-content");
		cartContent.innerHTML = '';
		itemsAdded = [];
		alert('your order is placed successfully')
	}
	update();
}
// update functions

function update_total(){
	let cart_boxs = document.querySelectorAll(".cart-box");
	const total_element = document.querySelector(".total-price");
	let total = 0;
	cart_boxs.forEach(cart_box => {
		let priceElement = cart_box.querySelector(".cart-price");
		let price = parseFloat(priceElement.innerHTML.replace('$', ""));
		let quantity = cart_box.querySelector(".cart-quantity").value;
		total += price * quantity;
	});
	total = total.toFixed(2);
	total_element.innerHTML = "$" + total;
}

// html element
function CartBox(title,price,img_src){
	return`					
	<div class="cart-box">
        <img src="${img_src}" alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title}</div>
            <div class="cart-price">${price}</div>                    
            <input type="number" min="1" name="" id="" value="1" class="cart-quantity">
        </div>
        <!-- remove cart -->
        <i class='bx bxs-trash-alt cart-remove'></i>
    </div>`;
}

