$(document).ready(function (argument) {
	
	setInterval(function (argument) {
		$.get("/script/log.log", function (data) {
			$('#ouptut_view').text(data);		
		})
	}, 500);
})
