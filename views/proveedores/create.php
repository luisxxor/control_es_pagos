<h1 class="text-center text-light mt-4">Crear Proveedor</h1>

<div class="jumbotron">
	<form>

		<div class="row">
			<div class="col-12 col-sm-10">
				<div class="form-group text-center">
					<label for="proveedorNombre" class="sr-only">Nombre</label>
					<input type="text" class="form-control text-center" id="proveedorNombre" placeholder="Nombre">
				</div>
			</div>

			<div class="col-12 col-sm-2">
				<div class="form-group text-center">
					<label for="proveedorEstado" class="sr-only">Estado</label>
					<select name="proveedorEstado" id="proveedorEstado" class="form-control">
						<option value="" selected disabled hidden>Estado</option>
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group text-center">
					<label for="proveedorRazonSocial" class="sr-only">Razón Social</label>
					<input type="text" class="form-control text-center" id="proveedorRazonSocial" placeholder="Razón Social">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-6">			
				<div class="form-group text-center">
					<label for="proveedorEmail" class="sr-only">Email</label>
					<input type="email" class="form-control text-center" id="proveedorEmail" placeholder="Email">
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="form-group text-center">
					<label for="proveedorContacto" class="sr-only">Contacto</label>
					<input type="text" class="form-control text-center" id="proveedorContacto" placeholder="Contacto">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-4">
				<div class="form-group text-center">				
					<label for="proveedorTelefono1" class="sr-only">Telefono 1</label>
					<input type="tel" class="form-control text-center" id="proveedorTelefono1" placeholder="Telefono 1">
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<div class="form-group text-center">		
					<label for="proveedorTelefono2" class="sr-only">Telefono 2</label>
					<input type="tel" class="form-control text-center" id="proveedorTelefono2" placeholder="Telefono 2">
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<div class="form-group text-center">
					<label for="proveedorCelular" class="sr-only">Celular</label>
					<input type="tel" class="form-control text-center" id="proveedorCelular" placeholder="Celular">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="form-group text-center">
					<label for="proveedorDireccion" class="sr-only">Dirección</label>
					<textarea class="form-control" name="proveedorDireccion" id="proveedorDireccion" cols="30" rows="10" placeholder="Dirección"></textarea>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="form-group text-center">
					<label for="proveedorOtro" class="sr-only">Otro</label>
					<textarea class="form-control" name="proveedorOtro" id="proveedorOtro" cols="30" rows="10" placeholder="Otro"></textarea>
				</div>
			</div>
		</div>
	</form>
		<div class="row">
			<div class="col-12 col-sm-2 offset-md-5">
				<button class="btn btn-block btn-primary" id="buttonSaveProveedor">Guardar</button>
			</div>
		</div>
</div>