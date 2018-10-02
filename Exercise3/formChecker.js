function formValidation(){
	let un = document.getElementById("UN").value;
	let pass=document.getElementById("PASS").value;
	let item1=document.getElementById("Item1").value;
	let item2=document.getElementById("Item2").value;
	let item3=document.getElementById("Item3").value;
	let ship1=document.getElementById("ship1");
	let ship2=document.getElementById("ship2");
	let ship3=document.getElementById("ship3");
	let at = false;
	let dot = false;
	if(un == ""){
		alert("You must enter a username.");
	}
	else if(pass == ""){
		alert("You must enter a password.");
	}
	else if(item1<0 || item1 == "" || item2<0 || item2 == "" || item3<0 || item3 == ""){
		alert("Please make sure all the purchases are positive or 0.");
	}
	else if(!(ship1.checked || ship2.checked ||ship3.checked)){
		alert("You must choose a shipment.");
	}
	else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(un))//I did not figure this part out on my own I had to look it up here is the link https://www.w3resource.com/javascript/form/email-validation.php
	{
		return true;
	}
	else {
		alert("Your username must be an email.")
	}
	return false;
}
function Reset(){
	document.getElementById("UN").value="";
	document.getElementById("PASS").value="";
	document.getElementById("Item1").value="";
	document.getElementById("Item2").value="";
	document.getElementById("Item3").value="";
	document.getElementById("ship1").checked = false;
	document.getElementById("ship2").checked = false;
	document.getElementById("ship3").checked = false;
}
