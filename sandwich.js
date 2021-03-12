
var burgerMenu = document.querySelector("#menu-sd");
var clickedEvent = "click";
var mainMenu = document.querySelector("#menu");
var $message = document.querySelector(".message");



window.addEventListener('touchstart', function dh() {
	clickedEvent = "touchstart"; 
	window.removeEventListener('touchstart', dh, false);
}, false);

// Créé un "toggle class" en Javascrit natif (compatible partout)
burgerMenu.addEventListener(clickedEvent, function(evenement) {
	console.log(clickedEvent);
	
	if(!this.getAttribute("class")) {
		this.setAttribute("class", "clicked");
	} else {
		this.removeAttribute("class");
	}
	if(mainMenu.getAttribute("class") != "visible") {
		mainMenu.setAttribute("class", "visible");
	} else {
		mainMenu.setAttribute("class", "invisible");
	}
	
}, false);
