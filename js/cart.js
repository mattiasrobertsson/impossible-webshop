window.addEventListener("load", init, false);

function init(){
	/*var addToCart = document.querySelector(".addButton");
	addEventListener("click", addItemToCart, false); */
	/*var displayInfo = document.querySelector(".listItem");
	displayInfo.addEventListener("click", toggleInfo, false); */
	var selectGenre = document.querySelector("#toggleText"); //klar!
	selectGenre.addEventListener("click", select, false);

	var selectGenre2 = document.querySelector("#displayText"); //klar!
	selectGenre2.addEventListener("click", select2, false);

	var sendOrder = document.querySelector("#order-btn"); //klar!
	sendOrder.addEventListener("click", send, false);

	var fValidationSubscribe = document.querySelector(".contact-btn");
	fValidationSubscribe.addEventListener("click", fValidSub, false);
}

function select(e) {
	var deep = document.querySelector("#item-list");
	deep.style.display='none';
	var electronic = document.querySelector("#another-item-list");
	electronic.style.display='block';

}

function select2(e) {
	var deep = document.querySelector("#item-list");
	deep.style.display='block';
	var electronic = document.querySelector("#another-item-list");
	electronic.style.display='none';

}

function addItemToCart(btn) {
	var dataPrice = btn.parentNode.getAttribute("data-price");
	var listItem = btn.parentNode.getAttribute("data-title");
	var createNode = document.createElement("li");
	createNode.appendChild(document.createTextNode(listItem));
	document.querySelector("#cart").appendChild(createNode);

	var listItem2 = parseFloat(dataPrice);
	var calcPriceElement = document.querySelector("#calcPrice");
	var currentPrice = calcPriceElement.valueAsNumber;
	if(isNaN(currentPrice)) currentPrice = 0;
	var newPrice = currentPrice + listItem2;
	calcPriceElement.value = newPrice;
	
	var deleteButton = document.createElement("button");
	var buttonText = document.createTextNode("-");
	deleteButton.appendChild(buttonText);
	createNode.appendChild(deleteButton);
	deleteButton.setAttribute("data-price", dataPrice);
	
	deleteButton.addEventListener("click", deleteFromCart, false);
}


function deleteFromCart() {
	this.parentNode.parentNode.removeChild(this.parentNode);
		var listItemDel = parseFloat(this.getAttribute("data-price"));
		var calcPriceElement2 = document.querySelector("#calcPrice");
		var currentPrice = calcPriceElement2.valueAsNumber;
		var newPrice2 = currentPrice - listItemDel;
			if(newPrice2 < 0.01) {
				newPrice2 = 0;
			}
			calcPriceElement2.value = newPrice2;
}

function toggleInfo(parent){
	var element = parent.querySelector(".showMore");
       if(element.style.display == 'none')
          	element.style.display = 'block';
       else
          	element.style.display = 'none';
}

function send() {
	var button = document.querySelector("#order-btn");
	button.value='Order Sent';
	alert("Thank you for your order! Check your e-mail for details.");
}

function fValidSub() {
	console.log("test");
	var x = document.forms["myForm"]["fname"].value;
    	if (x == null || x == "") {
        	alert("Name must be filled out");
        return false;
    }
}