$(document).ready(function(){

	$("#submitlogin").click(function(){	
		$.ajax({
			type: "POST",
			url: "bd/check_login.php",
			data: {user: $("#userlogin").val(), password: $("#passwordlogin").val()},
			success: function (data){
				data == "1" ? console.log("Nombre de usuario correcto") : console.log("Nombre de usuario incorrecto");
			}
		});
	});
});