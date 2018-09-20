function openOverlay() {
	document.getElementById("menuoverlay").style.display = "block";

	document.getElementById("menubutton").style.display = "none";
	document.getElementById("closemenubutton").style.display = "block";
}

function closeOverlay() {
	document.getElementById("menuoverlay").style.display = "none";

	document.getElementById("menubutton").style.display = "block";
	document.getElementById("closemenubutton").style.display = "none";


	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

	if (width > 670) {
		document.getElementById("menubutton").style.display = "none";
	}
}
