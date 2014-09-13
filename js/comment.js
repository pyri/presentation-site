$(document).ready(function() {
	$("#send").click(function() {
		var author = $("#author");
		var mail = $("#mail");
		var text = $("#text");
		
		$.ajax({
			data: {
				author: author.val(),
				mail: mail.val(),
				text: text.val()
			},
			url: "comment.php",
			method: "POST"
		}).success(function(data) {						
			var result = JSON.parse(data);
						
			if (result.status == 'error') {
				text.addClass("new error");				
				$('.msg_error').css({"visibility": "hidden";});
				$('#error').append('<p id="msg_error">'+ result.message +'</p>');				
			}
			else {	
				var comment = $("#comment");
				var html = '<div class="msg border">'+
						'<p id="msg-date" class="inline-right partition-dashed">'+ result.date +"</p>"+
						'<p id="msg-name" class="inline-left partition-dashed">'+ result.author +' ('+ result.mail +')'+"</p>"+
						'<p id="msg-text" class="inflow-left font-green">'+ result.text +"</p>"+
					'</div>';
				comment.prepend(html);				
			}
		}).error(function() {
			console.log("new error");
		});
		
		return false;
	});
});