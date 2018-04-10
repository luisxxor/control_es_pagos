<h1 class="text-center text-light mt-4">Modificar Proveedor #<?= $_GET['id']; ?></h1>


<div class="jumbotron">
	<form>
		<div class="row">
			<div class="col-12 col-sm-2">		
				<div class="form-group text-center">
					<label for="proveedorId" class="sr-only">ID</label>
					<input type="text" class="form-control text-center" id="proveedorId" placeholder="id">
				</div>
			</div>
			<div class="col-12 col-sm-10">
				<div class="form-group text-center">
					<label for="proveedorNombre">Nombre</label>
					<input type="text" class="form-control text-center" id="proveedorNombre">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group text-center">
					<label for="proveedorRazonSocial">Razón Social</label>
					<input type="text" class="form-control text-center" id="proveedorRazonSocial">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-4">			
				<div class="form-group text-center">
					<label for="proveedorEmail">Email</label>
					<input type="email" class="form-control text-center" id="proveedorEmail">
				</div>
			</div>
		</div>
	</form>
</div>