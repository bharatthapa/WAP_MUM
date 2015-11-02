$(function () {
	$.ajax({
			'url': 'fetch-trips.php',
			'type': 'GET',
			'dataType': 'JSON'
		})
		.done(processSuccess)
		.fail(processFailure);


	$("#addPost").click(function () {
		$.ajax({
			'url': 'trip-submit.php',
			'type': 'POST',
			'dataType': 'JSON',
			'data': {
				'tripText': $("#txtArea").val()
			}
		}).done(function (item) {
			//alert(item.trip_id + item.created_date + item.trip_text + item.user_id);
		var tripContainer = $("<div>").addClass("tripContainer").attr("id", "tripContainer_" + item.trip_id);
		var favoriteContainer = $("<div>").addClass("favoriteContainer").append($("<img>").addClass("favoriteIcon").attr("src", "favorite.png"));
		var tripTextContainer = $("<div>").addClass("tripTextContainer").attr("id", "trip_" + item.trip_id).append($("<h4>").addClass("tripHeading").text(item.trip_text + ' User Id : ' + item.user_id + 'trip_id : ' + item.trip_id + ' Date : ' + item.created_date));
		var commentContainer = $("<div>").addClass("commentContainer");
		var hiddenInput = $("<input>").val(item.trip_id).addClass("hiddenInput").attr({
			"type": "hidden"
		});
		var commentLabel = $("<div>").append($("<label>").addClass("commentLabel").attr("id", "commentLabel_" + item.trip_id));
		var areaButtonDiv = $("<div>");
		var commentArea = $("<textarea>").addClass("commentArea").attr({
			'placeholder': 'Write a comment...',
			'rows': '1',
			'cols': '81'
		});
		var commentButton = $("<button>").text("comment").on("click", processComment).addClass("commentButton");
		$("#trips")
			.prepend(tripContainer
				.append(favoriteContainer)
				.append(tripTextContainer)
				.append(commentContainer
					.append(commentLabel.append(hiddenInput))
					.append(areaButtonDiv.append(commentArea).append(commentButton))));


			$("#txtArea").val("");
			$("#hidePost").click();
		});

	});
});

function processSuccess(data) {
	
	alert('on load comments');
	
	$.each(data, function (idx, item) {

		var tripContainer = $("<div>").addClass("tripContainer").attr("id", "tripContainer_" + item.trip_id);
		var favoriteContainer = $("<div>").addClass("favoriteContainer").append($("<img>").addClass("favoriteIcon").attr("src", "favorite.png"));
		var tripTextContainer = $("<div>").addClass("tripTextContainer").attr("id", "trip_" + item.trip_id).append($("<h4>").addClass("tripHeading").text(item.trip_text + ' User Id : ' + item.user_id + 'trip_id : ' + item.trip_id + ' Date : ' + item.created_date));
		var commentContainer = $("<div>").addClass("commentContainer");
		var hiddenInput = $("<input>").val(item.trip_id).addClass("hiddenInput").attr({
			"type": "hidden"
		});
		var commentLabel = $("<div>").append($("<label>").addClass("commentLabel").attr("id", "commentLabel_" + item.trip_id).text('bandhu'));
		var areaButtonDiv = $("<div>");
		var commentArea = $("<textarea>").addClass("commentArea").attr({
			'placeholder': 'Write a comment...',
			'rows': '1',
			'cols': '81'
		});
		var commentButton = $("<button>").text("Comment").on("click", processComment).addClass("commentButton");
		$("#trips")
			.append(tripContainer
				.append(favoriteContainer)
				.append(tripTextContainer)
				.append(commentContainer
					.append(commentLabel.append(hiddenInput))
					.append(areaButtonDiv.append(commentArea).append(commentButton))));
	});
}

function processFailure(xhr, status, exception) {
	console.log(xhr, status, exception);
}

function processComment() { // Comment Handler
	var trip_id = $(this).parent().prev().children('.hiddenInput').val();
	var comment_text = $(this).prev().val();
	var this_object = $(this);
	//var postComment = this_object.parent().prev().children().val();
	$.ajax({
			'url': 'comment-submit.php',
			'type': 'POST',
			'data': {
				'tripID': trip_id,
				'commentText': comment_text
			}
		})
		.done(function processCommentSuccess() {
			$(".commentArea").val("");
		    var commentElement = this_object.parent().prev().children('.commentLabel');
			commentElement.append(comment_text).append($('<br>'));
			//$(".commentLabel").append(postComment).append($("<br>"));
		})
		.fail(processCommentFailure);
}

function processCommentFailure(xhr, status, exception) {
	console.log(xhr, status, exception);
}