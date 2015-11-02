var root= "http://jsonplaceholder.typicode.com/users";

$(function(){
	
	$.ajax({
		'url' : root, 
		'type' : "GET", 
		'success' : processSuccess, 
		'error' : processFailure
						
		
	});
});

function processSuccess(data){
	
	$.each(data, function(i, element){
		
		var name = element.name +"\n";
		//console.log(name);
		$("#lbl").append(name);
		//$(name).appendTo("#lbl");
	})
}

function processFailure(xhr, status, exception){
	
	console.log(xhr + " " + status + " " + exception);
}

