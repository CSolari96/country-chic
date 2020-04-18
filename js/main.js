document.addEventListener("DOMContentLoaded", function(event) {
	// Mobile Hamburger Menu
	var menuClose 	= 	document.getElementById("close-menu"); 				// Store mobile menu close button
	var menuOpen 	= 	document.getElementById("open-mobile-menu");		// Store mobile menu open button
	var mobileMenu 	= 	document.getElementsByClassName("mobile-menu")[0];	// Store mobile menu

	// When the user clickes the mobile menu open button, display the mobile menu and hide the menu open button
	menuOpen.addEventListener("click", function() {
		mobileMenu.style.left = "0";		// Reset right to 0 from where we accounted for added padding when hiding menu
		mobileMenu.style.width = "100%";
		menuOpen.classList.add("hide");
	});

	// When the user clicks the mobile menu close button, hide the mobile menu and display the menu open button
	menuClose.addEventListener("click", function () {
		mobileMenu.style.width = "0";
		mobileMenu.style.left = "0";
		menuOpen.classList.remove("hide");
	});
});

//READ MORE BUTTON ON ABOUT PAGE

//VARIABLES

var readButton = document.getElementById("buttonshow");
var showLess = document.getElementById("buttonhide");
var moreInfo = document.getElementById("moreinfo-about");

//FUNCTION

function revealMore () {
    moreInfo.classList.remove('hide');
    showLess.classList.remove('hide');
    readButton.classList.add('hide');
};

function hideMore () {
  moreInfo.classList.add('hide');
  showLess.classList.add('hide');
  readButton.classList.remove('hide');
};

//EVENT LISTENERS


readButton.addEventListener('click', revealMore);
showLess.addEventListener('click', hideMore);
