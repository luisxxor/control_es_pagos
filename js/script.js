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

	$("#togglenavitems").click(function(){
		let items = $("#navbarCollapsibleItems");

		if(items.css('display') == 'none'){
			items.show('400').css('display','flex');
		}
		else
		{
			items.hide('400');
		}
	})

	$("#buttonSaveProveedor").click(function(){
		$.ajax({
			type: "POST",
			url: "bd/proveedores/insert.php",
			data: {
				nombre: $("#proveedorNombre").val(),
				razonsocial: $("#proveedorRazonSocial").val(),
				email: $("#proveedorEmail").val(),
				telefono1: $("#proveedorTelefono1").val(),
				telefono2: $("#proveedorTelefono2").val(),
				celular: $("#proveedorCelular").val(),
				contacto: $("#proveedorContacto").val(),
				direccion: $("#proveedorDireccion").val(),
				otro: $("#proveedorOtro").val(),
				estado: $("#proveedorEstado").val()
			},
			success: function(data){
				if(data == "1"){
					alert("registro exitoso");
					window.location.href = "index.php?action=list&table=proveedores";
				}else{
					alert("error al registrar el proveedor");
				}
			}
		});
	});

	$("#buttonUpdateProveedor").click(function(){
		$.ajax({
			type: "POST",
			url: "bd/proveedores/update.php",
			data: {
				nombre: $("#proveedorNombre").val(),
				razonsocial: $("#proveedorRazonSocial").val(),
				email: $("#proveedorEmail").val(),
				telefono1: $("#proveedorTelefono1").val(),
				telefono2: $("#proveedorTelefono2").val(),
				celular: $("#proveedorCelular").val(),
				contacto: $("#proveedorContacto").val(),
				direccion: $("#proveedorDireccion").val(),
				otro: $("#proveedorOtro").val(),
				estado: $("#proveedorEstado").val(),
				id: $("#proveedorId").val()
			},
			success: function(data){
				if(data == "1"){
					alert("registro actualizado correctamente");
					window.location.href = "index.php?action=list&table=proveedores";
				}else{
					alert("error al actualizar el proveedor");
				}
			}
		});
	});


});