'use strict';

var timer = null;

function bigDecoration() {
	
   /* document.getElementById('txtArea').style.fontSize = "24pt";*/
	
	var font = parseInt(document.getElementById('txtArea').style.fontSize || 20);
	//alert(font);
	if (font < 35) { 
	   font = font + 2;
	}	
	else {
	 font = 20;
	}
	
	document.getElementById('txtArea').style.fontSize = font + "px";
		
}
	
function f_bling() {
	if(document.getElementById('chkBox').checked){
    document.getElementById('txtArea').style.fontWeight = "bold";
    document.getElementById('txtArea').style.color = "green";
    document.getElementById('txtArea').style.textDecoration = "underline";	
	document.body.style.backgroundImage = "url(decoratemytext_files/hundred-dollar-bill.jpg)";
	}
	else{
	document.getElementById('txtArea').style.fontWeight = "normal";
	document.getElementById('txtArea').style.color = "black";
    document.getElementById('txtArea').style.textDecoration = "none";
	document.body.style.backgroundImage = "none";
	}
}

function countdown(){
if(timer === null) {
	timer = setInterval(bigDecoration, 1000);

}
	else {
		clearInterval(timer);
		timer=null;
}
	
}

function txtToLatin() {
var gatherText = document.getElementById('txtArea').value;
if(gatherText[0] === 'a' ||
  gatherText[0] === 'e' ||
  gatherText[0] === 'i' ||
  gatherText[0] === 'o' ||
  gatherText[0] === 'u'){
  document.getElementById('txtArea').value = gatherText + "ay";
}
	else {
		document.getElementById('txtArea').value = gatherText.substring(1, gatherText.length) + gatherText[0] + "ay";
	}
}

function txtReplace() {
var sentence =  document.getElementById('txtArea').value.trim();
var split = sentence.split(" ");
var temp = new Array();
	for(var i=0; i <split.length; i++){
		if(split[i].length >= 5){
			temp.push("Malkovitch"); 
			continue;
		}else{
		temp.push(split[i]);
				  }
	}
document.getElementById('txtArea').value = temp.join(" ");
	
}

window.onload = function () {
  document.getElementById('btnBiggerDecoration').onclick = countdown;
  document.getElementById('chkBox').onchange = f_bling;
  document.getElementById('txtToLatin').onclick = txtToLatin;
  document.getElementById('txtReplace').onclick = txtReplace;
}
