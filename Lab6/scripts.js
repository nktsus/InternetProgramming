function openWindow1(){
	window.open("firstWindow.html", "OpenWindow", "width = '200px, height = '200px''")
}
function openWindow2(){
	window.open("secondWindow.html", "OpenWindow", "width = '200px, height = '200px''")	
}
function openWindow3(){
	window.open("thirdWindow.html", "OpenWindow", "width = '200px, height = '200px''")
}

function getRandom() {
	return Math.random() * 10;
}


function bless(){	
	let sp = document.getElementById('writeSpan');
	let string = "";
	for (var i = 1; i <= getRandom(); i++) {
		string = "Будьте здоровы! " + string;
	}
	sp.textContent = string;
}

function spaceAfterPunctuationMarks(str) {
    return str.replace(/\s{2,}/g, " ").replace(/([.,;:!?]+)(?=\S)/g, "$1 ");
}

function checkFunction (argument) {
	let str = document.getElementById('checkButtonId2');
	let spanCheck = document.getElementById('spanIdCheck');

	spanCheck.textContent = spaceAfterPunctuationMarks(str.value);
}

function isBetween () {
	let firstDate = document.getElementById('firstDateId').value;
	let secondDate = document.getElementById('secondDateId').value;
	let betweenId = document.getElementById('betweenId').value;

	if (betweenId > firstDate && betweenId < secondDate) {
		resultIdSpan.textContent = 'Result : Yes';
	}
	else {
		resultIdSpan.textContent = 'Result : No';
	}



	/*console.log(firstDate);
	console.log(secondDate);
	console.log(betweenId);*/


}