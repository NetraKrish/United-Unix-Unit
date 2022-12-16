// Quiz validation function

// Validator for first question, each quiz will need its own validator as well as different id names
function question1Validate() {

	if (document.getElementById('que1opt1').checked) {
		document.getElementById('que1opt1').style.border = '3px solid red';
		document.getElementById('que1result').style.color = 'red';
		document.getElementById('que1result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que1opt2').checked) {
		document.getElementById('que1opt2').style.border = '3px solid red';
		document.getElementById('que1result').style.color = 'red';
		document.getElementById('que1result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que1opt3').checked) {
		document.getElementById('que1opt3').style.border = '3px solid blue';
		document.getElementById('que1result').style.color = 'red';
		document.getElementById('que1result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que1opt4').checked) {
		document.getElementById('que1opt4').style.border = '3px solid red';
		document.getElementById('que1result').style.color = 'blue';
		document.getElementById('que1result').innerHTML = 'Correct! &#x2714';
	}
}

function question2Validate() {

	if (document.getElementById('que2opt1').checked) {
		document.getElementById('que2opt1').style.border = '3px solid red';
		document.getElementById('que2result').style.color = 'red';
		document.getElementById('que2result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que2opt2').checked) {
		document.getElementById('que2opt2').style.border = '3px solid red';
		document.getElementById('que2result').style.color = 'red';
		document.getElementById('que2result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que2opt3').checked) {
		document.getElementById('que2opt3').style.border = '3px solid red';
		document.getElementById('que2result').style.color = 'red';
		document.getElementById('que2result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que2opt4').checked) {
		document.getElementById('que2opt4').style.border = '3px solid blue';
		document.getElementById('que2result').style.color = 'blue';
		document.getElementById('que2result').innerHTML = 'Correct! &#x2714';
	}
}


function question3Validate() {

	if (document.getElementById('que3opt1').checked) {
		document.getElementById('que3opt1').style.border = '3px solid red';
		document.getElementById('que3result').style.color = 'red';
		document.getElementById('que3result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que3opt2').checked) {
		document.getElementById('que3opt2').style.border = '3px solid red';
		document.getElementById('que3result').style.color = 'red';
		document.getElementById('que3result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que3opt3').checked) {
		document.getElementById('que3opt3').style.border = '3px solid red';
		document.getElementById('que3result').style.color = 'red';
		document.getElementById('que3result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que3opt4').checked) {
		document.getElementById('que3opt4').style.border = '3px solid blue';
		document.getElementById('que3result').style.color = 'blue';
		document.getElementById('que3result').innerHTML = 'Correct! &#x2714';
	}
}

function question4Validate() {

	if (document.getElementById('que4opt1').checked) {
		document.getElementById('que4opt1').style.border = '3px solid red';
		document.getElementById('que4result').style.color = 'red';
		document.getElementById('que4result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que4opt2').checked) {
		document.getElementById('que4opt2').style.border = '3px solid red';
		document.getElementById('que4result').style.color = 'red';
		document.getElementById('que4result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que4opt3').checked) {
		document.getElementById('que4opt3').style.border = '3px solid red';
		document.getElementById('que4result').style.color = 'red';
		document.getElementById('que4result').innerHTML = 'Incorrect!';
	}

	if (document.getElementById('que4opt4').checked) {
		document.getElementById('que4opt4').style.border = '3px solid blue';
		document.getElementById('que4result').style.color = 'blue';
		document.getElementById('que4result').innerHTML = 'Correct! &#x2714';
	}
}