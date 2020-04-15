document.addEventListener("DOMContentLoaded", function(event) {
	// Locate and store contact form and header
	var contactForm = document.getElementsByClassName("wpcf7-form")[0];
	var contactHeading = document.querySelector(".contact-form-section .white-header-three");

	// Locate and store thank you message container div
	var thankYouMessage = document.getElementsByClassName("thank-you")[0];

	// Trigger displayThankYou function when user submits the form
	document.addEventListener("wpcf7mailsent", displayThankYou);

	// Hide contact form and display thank you message
	function displayThankYou() {

		// Hide contact form and heading
		contactHeading.classList.add("hide");
		contactForm.classList.add("hide");

		// Show thank you message
		thankYouMessage.classList.remove("hide");
	}
});