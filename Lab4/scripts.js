function calcular(){
	totalvalue.value = parseInt(acc.value) - parseInt(ret.value);
};
function ButtonOne(){
 	Field1.disabled = false;
 	Field2.disabled = true;
 	Field3.disabled = true;
 	RadioButtonOne.checked = true;
 	RadioButtonTwo.checked = false;
 	RadioButtonThree.checked = false; 
};
function ButtonTwo(){
 	Field1.disabled = true;
 	Field2.disabled = false;
 	Field3.disabled = true; 
 	RadioButtonOne.checked = false
 	RadioButtonTwo.checked = true;
 	RadioButtonThree.checked = false; 
};
function ButtonThree(){
 	Field1.disabled = true;
 	Field2.disabled = true;
 	Field3.disabled = false; 
 	RadioButtonOne.checked = false;
 	RadioButtonTwo.checked = false;
 	RadioButtonThree.checked = true; 
};
function ActivateCheckbox(){
 	if (ChkActv.checked){
 		ActiveList.disabled = false;
 	}
 	else {
 		ActiveList.disabled = true;
 	}
};		 		
function ListOnChange(){
 	alert(ActiveList.selectedIndex + ": " + ActiveList.value);
};
function MoveToButton(){
	Button1.value = TextBox1.value
};