// JavaScript Document
var acc = document.getElementsByClassName("aside-accordion-item-heading");
var i;
var helpbutton = document.getElementById("helpbutton");

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		/* Toggle between adding and removing the "active" class, 
		to highlight the button that controls the panel */
		this.classList.toggle("active");
		
		/* Toggle between hiding and showing the active panel */
		var panel = this.nextElementSibling;
		var toggle = this.firstElementChild;
		var icon = toggle.firstElementChild;
		if (panel.style.display === "block") {
			panel.style.display = "none";
			icon.className = "fas fa-chevron-down";
		} else {
			panel.style.display = "block";
			icon.className = "fas fa-chevron-up";
		}
	});
}