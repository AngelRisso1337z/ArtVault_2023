<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/framework7.bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="manifest" href="./manifest.json" />


	<title>ArtVault</title>
</head>

<body>
	<div id="app">

		<div class="login-screen modal-in" id="modal-login">
			<div class="view">
				<div class="page login-screen-page">
					<div class="page-content login-screen-content">

						<div class="login-screen-title"><img src="images/Logo_UNITEC.png" class="img-fluid" alt=""
								width="300" height="300"></div>
						<h1 class="title">Iniciar Sesión</h1>

						<form action="includes/login.inc.php" method="post" id="form-login">
							<div class="list">

								<ul>
									<li class="item-content item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="text" name="e-mail"
													placeholder="Correo Electrónico Institucional" required>
												<span class="input-clear-button"></span>
											</div>
										</div>
									</li>

									<li class="item-content item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="text" name="nucuenta"
													placeholder="Ingresar Número de Cuenta" required>
												<span class="input-clear-button"></span>
											</div>
										</div>
									</li>

									<li class="item-content item-input">
										<div class="item-inner">
											<div class="item-input-wrap">
												<input type="password" name="password" placeholder="Ingresar Contraseña"
													required>
												<span class="input-clear-button"></span>
											</div>
										</div>
									</li>
								</ul>
							</div>

							<div class="list block">

								<ul>
									<li>
										<button type="submit" name="submit" class="button button-fill"
											id="btnLogin">Ingresar</button>
									</li>
									<li>
                                                                        <div class="block-footer"><a
                                                                                class="button button-fill" onclick="openWin()">Regístrate aquí</a>

                                                                        </div>
									</li>
								</ul>
								<?php
								if (isset($_GET['error'])) {
									if ($_GET['error'] == "CamposVacios") {
										echo "<p>Olvidaste llenar un campo</p>";
									} elseif ($_GET['error'] == "NumeroCuentaInvalido") {
										echo "<p>Numero de cuenta invalido</p>";
									} elseif ($_GET['error'] == "emailinvalido") {
										echo "<p>Correo electronico invalido</p>";
									} elseif ($_GET['error'] == "NumeroCuentaExistente") {
										echo "<p>Numero de cuenta ya existe</p>";
									} elseif ($_GET['error'] == "contraseñamala") {
										echo "<p>Contraseñas no coinciden</p>";
									} elseif ($_GET['error'] == "CuentaExistente") {
										echo "<p>Correo electronico ya existe/p>";
									} elseif ($_GET['error'] == "datosincorrectos") {
										echo "<p>datos de login incorrectos</p>";
									} elseif ($_GET['error'] == "none") {
										echo "<p>Te registraste exitosamente</p>";
									}
								}
								?>


							</div>

						</form>

					</div>
				</div>
			</div>
		</div>


		<script src="js/framework7.bundle.min.js"></script>
		<script src="js/app.js"></script>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
			crossorigin="anonymous"></script>
		<script src="js/serviceWorker.js"></script>
		<script>
			function openWin() {
				abrirventana = window.open("https://docs.google.com/forms/d/e/1FAIpQLSc6nEWNjr3btzjGz_DSZAGivR2fmmTrDCh1fgI1RYxB3pZj_A/viewform?pli=1", "_blank");   // Opens a new window
			}
		</script>
</body>

</html>