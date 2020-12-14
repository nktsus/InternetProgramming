function OpenNewWindow1(){
	window.open("PageForOpen1.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow2(){
	window.open("PageForOpen2.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow3(){
	window.open("PageForOpen3.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow4(){
	window.open("PageForOpen4.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow5(){
	window.open("PageForOpen5.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow6(){
	window.open("PageForOpen6.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow7(){
	window.open("PageForOpen7.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow8(){
	window.open("PageForOpen8.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow9(){
	window.open("PageForOpen9.html", "OpenWindow", "width = '100px', height = '200'");
};
function OpenNewWindow10(){
	window.open("PageForOpen10.html", "OpenWindow", "width = '100px', height = '200'");
}



function PromptInsrt(){
	temp =prompt("Please enter something...");
	textbox1.value = temp;
};
function CloseWindow(){
	window.close();
};

let index = 0;

function changePhoto(){
	if (index == 0) {
		t3Image.src = 'media/Logo.png';
		index = 1;
	}
	else {
		t3Image.src = 'media/ikea.png';
		index = 0;
	}
}

function changePhotoByUrl(){
	t3Image4form.src = textButtonIdUrl.value;
}

function changeBgAndColor(){
	document.body.style.backgroundColor = backGroundColorId.value;
	parag.style.color = textColorId.value;
}

function borderSettings(){
	tableId.style.borderWidth = thicknessId.value;
	tableId.style.borderColor = colorId7.value;
}

function paragSettings(){
	parag8.style.fontWeight = 'bold';
	parag8.style.fontStyle = 'italic';
}

function paragSettings9(event){
	if (event == 0) {
		parag9.style.fontStyle = 'italic';
	}
	else {
		parag9.style.fontStyle = 'normal';
	}
}

function resultFromTwoAreas(){
	spanResult.textContent = parseInt(textIdtag1.value) + parseInt(textIdtag2.value);
}