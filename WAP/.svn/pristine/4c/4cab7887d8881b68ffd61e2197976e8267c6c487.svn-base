var timer = null;
var speed = 250;

window.onload = function() {
document.getElementById('btnStart').onclick = start;
document.getElementById('btnStop').onclick = stop;
//document.getElementById('animations').onchange = animation;
document.getElementById('size').onchange = size;
document.getElementById('chkbox').onchange = chkbox;
}



function start() {
document.getElementById('btnStart').disabled = true;
document.getElementById('animations').disabled = true;
document.getElementById('btnStop').disabled = false;
	

var animationType = document.getElementById('animations').value;
clearInterval(timer);
var splitted = ANIMATIONS[animationType].split("=====\n");

	timer = setInterval(animationFxn, speed);
var i =0;
	function animationFxn() {
	if(i == splitted.length){
	i =0;
	}
	
	document.getElementById('txtarea').value = splitted[i]; 
	i++;
}

}

function stop() {
document.getElementById('btnStop').disabled = true;
document.getElementById('btnStart').disabled = false;
document.getElementById('animations').disabled =false;
clearInterval(timer);
timer = null;
}


function size() {

var fntSize =  document.getElementById('size').value;
var arraySizes = new Array();
arraySizes['Tiny'] = "7pt";
arraySizes['Small'] = "10pt";
arraySizes['Medium'] = "12pt";
arraySizes['Large'] = "16pt";
arraySizes['ExtraLarge'] = "24pt";
arraySizes['XXL'] = "32pt";

document.getElementById('txtarea').style.fontSize = arraySizes[fntSize];

}

function chkbox() {

	if(document.getElementById('chkbox').checked){
	speed = 30;
	}
	else {
	speed = 250;
	}	
	start();
}
