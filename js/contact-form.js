document.addEventListener("DOMContentLoaded", function(event) {
	// Locate and store contact form and header
	var contactForm = document.getElementsByClassName("wpcf7-form")[0];
	var contactHeading = document.querySelector(".contact-form-section .white-header-three");

	// Locate and store thank you message container div
	var thankYouContainer = document.getElementsByClassName("thank-you")[0];

	// Trigger displayThankYou function when user submits the form
	document.addEventListener("wpcf7submit", displayThankYou);

	// Hide contact form and display thank you message
	function displayThankYou() {

		// Locate and store contact form thank you message
		thankYou = document.getElementsByClassName("wpcf7-mail-sent-ok")[0].innerHTML;

		// Hide contact form and heading
		contactHeading.classList.add("hide");
		contactForm.classList.add("hide");

		// Create paragraph for thank you message
		var messagePara = document.createElement("p");

		// Create text node containing thank you message
		var message = document.createTextNode(thankYou);

		// Add text node to paragraph
		messagePara.appendChild(message);

		// Display paragraph in thank you message container
		thankYouContainer.appendChild(messagePara);
	}
});