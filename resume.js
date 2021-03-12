// Récupération des blocs
var mainMenu = document.querySelector("#resumepage");
var burgerMenu = document.querySelector("#resume");

var clickedEvent = "click"; 
window.addEventListener('touchstart', function detectTouch() {
	clickedEvent = "touchstart"; 
	window.removeEventListener('touchstart', detectTouch, false);
}, false);


burgerMenu.addEventListener(clickedEvent, function(evt) {
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