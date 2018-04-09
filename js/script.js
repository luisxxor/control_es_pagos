$(document).ready(function(){

	$("#submitlogin").click(function(){	
		$.ajax({
			type: "POST",
			url: "bd/user/authenticate.php",
			data: {user: $("#userlogin").val(), password: $("#passwordlogin").val()},
			success: function(data){
				if(data == "1"){
					$("#loginerror").hide();
					window.location.reload();
				}else{
					$("#loginerror").show();
				}
			}
		});
	});

	$("#containerlogoutbutton > button").click(function(){
		$.ajax({
			type: "POST",
			url: "bd/user/logout.php",
			success: function(){
				window.location.reload();
			}
		});
	});
});