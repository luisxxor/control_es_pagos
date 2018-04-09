<div class="container" id="banner">
	<a href="index.php" class="logo">
		<img src=<?PHP echo ROOT."img/logo.png"; ?> alt="">
	</a> 

	<?PHP if($userIsLogged): ?>
		<nav id="menuitems">
			<li>
				<a href="index.php?goto=proveedores">Proveedores</a>
			</li>
		</nav>
	<?PHP endif;

	if(!$userIsLogged): ?>
		<div id="containerloginbutton">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginform">Iniciar Sesión &nbsp; <i class="fas fa-sign-in-alt"></i></button>
		</div>

		<div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="loginlabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="loginlabel">Iniciar Sesión</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="userlogin">Nombre de Usuario:</label>
								<input type="text" id="userlogin" class="form-control" placeholder="Ej: fito_paez">
							</div>
							<div class="form-group">
								<label for="passwordlogin">Contraseña:</label>
								<input type="password" id="passwordlogin" class="form-control" placeholder="********">
							</div>
						</form>
						<div class="alert alert-danger" role="alert" id="loginerror" style="display: none;">
						 	Usuario o contraseña incorrectos.
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" id="submitlogin">Ingresar</button>
					</div>
				</div>
			</div>
		</div>
	<?PHP else: ?>
		<div id="containerlogoutbutton">
			<button type="button" class="btn btn-primary">Cerrar Sesión &nbsp; <i class="fas fa-sign-out-alt"></i></button>
		</div>
	<?PHP endif; ?>
</div>