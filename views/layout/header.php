<div class="container-fluid" id="banner">
	<a href="index.php" class="logo">
		<img src=<?PHP echo ROOT."img/logo.png"; ?> alt="Logo Esteno">
	</a> 
	

	<div class="navcontent" id="navbarCollapsibleItems">
		
		<?PHP if($userIsLogged): ?>
			<nav id="menuitems">
				<ul>	
					<li>
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" id="proveedoresdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Proveedores
							</button>

							<div class="dropdown-menu" aria-labelledby="proveedoresdropdown">
								<a class="dropdown-item" href="index.php?action=list&table=proveedores">Listado</a>
								<a class="dropdown-item" href="index.php?action=create&table=proveedores">Crear Nuevo</a>							
							</div>						
						</div>
					</li>
					<li>
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" id="usuariosdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Usuarios
							</button>

							<div class="dropdown-menu" aria-labelledby="usuariosdropdown">
								<a class="dropdown-item" href="index.php?action=list&table=users">Listado</a>
								<a class="dropdown-item" href="index.php?action=create&table=users">Crear Nuevo</a>							
							</div>						
						</div>
					</li>
				</ul>
			</nav>
		<?PHP endif; ?>

		<?PHP if(!$userIsLogged): ?>

			<div id="containerloginbutton">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginform">Iniciar Sesión &nbsp; <i class="fas fa-sign-in-alt"></i></button>
			</div>

		<?PHP else: ?>

			<div id="containerlogoutbutton">
				<button type="button" class="btn btn-primary">Cerrar Sesión &nbsp; <i class="fas fa-sign-out-alt"></i></button>
			</div>

		<?PHP endif; ?>

	</div>

	<button class="btn d-lg-none" id="togglenavitems" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars"></i>
	</button>

	<?PHP if(!$userIsLogged): ?>
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
	<?PHP endif; ?>
</div>