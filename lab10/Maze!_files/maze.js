"use strict";

var flag = false;
var wrongTrack =false;

$(function () {
	
	$("#start").click(processStartClick); //On Start Click
	$("#end").click(processEndClick); //On End Click
	//$("#maze").on('mouseleave', processMouseLeave); //On Mouse Leave Event
	
	
});

function processStartClick() {
	$(".boundary").removeClass("youlose"); // Remove Previously Mouse On over css class i.e. '.youlose'
	$(".boundary").on('mouseover', processMouseOver); //On Mouse Over Div  ? 
	
	//alert("flag before" + flag);
	flag = true;
	//alert("flag before" + flag);
	//startClicked = true;
}

function processEndClick() {
	
	
	if (flag == true) {
		$(".boundary").off('mouseover'); //off Mouse Over Div
		//alert('Congratulations You Win !!!');
		$("#status").text('You Win :[');
		flag = false;
	} else {
		//alert("You Cheated Play Again !!!");
		$("#status").text('You Cheated Play Again !!!');
		$(".boundary").removeClass("youlose"); // Remove Previously Mouse On over css class i.e. '.youlose'
	}
}

function processMouseOver() {
	$(".boundary").addClass("youlose");
	//alert('You Loose');
	$("#status").text('You Loose :]');
	$(".boundary").off('mouseover'); //off Mouse Over Div
	flag = false;
}

/*function processMouseLeave() {
	//alert('Mouse Leave');
	if(endClicked){//alert('Mouse Leave');
	
	}
if(wrongTrack == false){
	else {
$("#status").text('You Took the wrong path !!!');
	$("#maze").off('mouseleave');
	wrongTrack = false;
	}
	
	}
}*/