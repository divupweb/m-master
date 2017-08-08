$(document).ready(function() {
	$("#form_1").submit(function() {
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/m-master/modules/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#win2"
			$("#form_1").trigger("reset");
		});
		return false;
	});
	$("#form_2").submit(function() {
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/m-master/modules/mail_2.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#win2"
			$("#form_2").trigger("reset");
		});
		return false;
	});
	$("#form_3").submit(function() {
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/m-master/modules/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#win2"
			$("#form_3").trigger("reset");
		});
		return false;
	});
	$("#form_4").submit(function() {
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/m-master/modules/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#win2"
			$("#form_4").trigger("reset");
		});
		return false;
	});
});
