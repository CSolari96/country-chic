window.addEventListener("load", function(event) {
	// Create new link
	var newLink = document.createElement("a");
	var linkText = document.createTextNode("Go to the previous page");
	newLink.appendChild(linkText);

	// Set link attributes
	newLink.href = document.referrer;
	newLink.id = "back-link";

	// Locate and store product or collection container
	var collectionContainer = document.getElementsByClassName("wps-collection-single")[0];
	var productContainer = document.getElementsByClassName("wps-product-single")[0];

	// Create variable to hold page container
	var pageContainer = null;

	// Check if it is a single product or single collection page and set appropriate page container
	if (typeof(collectionContainer) != 'undefined' && collectionContainer != null) {
		pageContainer = collectionContainer.parentElement;
		addLink(collectionContainer);
	} else if (typeof(productContainer) != 'undefined' && productContainer != null) {
		pageContainer = productContainer.parentElement;
		addLink(productContainer);
	}

	// Add link above product information
	function addLink(container) {
		pageContainer.insertBefore(newLink, container);
	}
});