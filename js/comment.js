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
				$('#error').append('<p class="msg_error">'+ result.message +'</p>');
				$('#error').hide(7000);
			}
			else {	
				var comment = $("#comment");
				var html = '<div class="msg border">'+
						'<p id="msg-date" class="inline-right partition-dashed">'+ result.date +"</p>"+
						'<p id="msg-name" class="inline-left partition-dashed">'+ result.author +' ('+ result.mail +')'+"</p>"+
						'<p id="msg-text" class="inflow-left font-green">'+ result.text +"</p>"+
					'</div>';
				comment.append(html);				
			}
		}).error(function() {
			console.log("new error");
		});
		
		return false;
	});
});