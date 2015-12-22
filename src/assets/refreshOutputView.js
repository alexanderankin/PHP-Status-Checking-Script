$(document).ready(function (argument) {
	
	setInterval(function (argument) {
		$.get("/script/log.log.php", function (data) {
			$('#ouptut_view').text(data);		
		})
	}, 500);
})
