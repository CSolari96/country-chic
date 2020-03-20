document.addEventListener("DOMContentLoaded", function(event) {
	// Mobile Hamburger Menu
	var menuClose 	= 	document.getElementById("close-menu"); 				// Store mobile menu close button
	var menuOpen 	= 	document.getElementById("open-mobile-menu");		// Store mobile menu open button
	var mobileMenu 	= 	document.getElementsByClassName("mobile-menu")[0];	// Store mobile menu

	// When the user clickes the mobile menu open button, display the mobile menu and hide the menu open button
	menuOpen.addEventListener("click", function() {
		mobileMenu.style.top = "0";		// Reset right to 0 from where we accounted for added padding when hiding menu
		mobileMenu.style.height = "100%";
		menuOpen.classList.add("hide");
	});

	// When the user clicks the mobile menu close button, hide the mobile menu and display the menu open button
	menuClose.addEventListener("click", function () {
		mobileMenu.style.height = "0";
		mobileMenu.style.top = "-20%";
		menuOpen.classList.remove("hide");
	});
});