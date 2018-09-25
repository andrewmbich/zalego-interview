function validateTextbox(){
	var box = document.getElementById("email");
	var box2 = document.getElementById("message");

	if (box.value.length<5||box2.value.length<5) {
		alert("please enter atleast 5 characters");
		box.focus();
		box.style.border="solid 3px red";
		return false;
	}
	}
