<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('php/main.php');

$fotoSRC = array ('.jpg','.png','.gif','.ico','.btm');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <title>Perfil</title>
</head>
<body>
	<!------------------------------sidebar ------------------- Angelica----------------------------------->
	<nav id="navbar-side">
            <ul>
                <li>
                    <a href="main.php" class="logo-sidebar">
                        <img src="images/logo1.png" class="img-fluid logo-unitec" alt="unitec_mini"width="50" height="50" maxheight="50%">
                    </a>
                </li>
                <li class="nav-1">
                    <a href="perfil.php" class="logo">
                         <img src="images/img_usuario.jpg" class="img-fluid">
                         <span class="nav-item"><?php echo $_SESSION['Nom']." ".$_SESSION['Apel'];?></span>
                    </a>
                </li>
                <li class="nav-2"><a href="main.php" class="icon-sidebar">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li class="nav-3"><a href="calendario/calendarioMasReciente.php" class="icon-sidebar">
                    <i class="fas fa-calendar "></i>
                    <span class="nav-item">Calendario</span>
                </a></li>
                <li class="nav-5"><a href="#" class="icon-sidebar log-out" onclick="botonSalir()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Cerrar Sesion</span>
                </a></li>
            </ul>
        </nav>








        <!--Pop up de botonSalir -->
        <div id="ventanaSalir" class="modal container-fluid" style="display: none;">
            <div class="contenidoSalir">
                <h4>¿Estás seguro que quieres cerrar sesión?</h4>
                <div class="opcionesSalir">
                    <a href="index.php" class="botonSi">SI</a>
                    <a onclick="botonSalir()" href="#" class="botonNo">NO</a>
            </div>
            </div>
        </div>


        <!-- POP UP PUBLICACION NUEVO-->

        <div class="modal fade" id="subir-publicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <div class="modal-dialog m-container" role="document">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ion-ios-close"><i class="fas fa-times"></i></span>
                  </button>

                    <div class="modal-content m-content">
                        <div class="modal-body p-4 p-md-5">


                            <form method="post" action="insbloppost.php" class="form-container" enctype="multipart/form-data">
                                <div class="container subir-img">
                                    <h1 class="titulo">Subir imagen</h1>
                                        <div class="container upload-container" >
                                              <!--Se agrego el required para que el usuario este forzado a agregar una img-->
                                              <input type="file" name="postImage" class="uploadFile" value="Upload Photo" required>
                                        </div>
                                </div>
                                <div class="container post-descripcion">
                                    <label for="descripcion"><b>Descripción del post</b></label>
                                    <br>
                                    <textarea name="descripcion" rows="5" cols="30"></textarea>
                                    <br>
                                    <button type="submit" name="submit" value="submit" class="btn btn-blue">Listo</button>
                                    <input href="#" type="submit" data-dismiss="modal" aria-label="Close" value="Cancelar" class="btn-red cerrar">
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
        </div>


         <!-- POP UP HISTORIA NUEVO-->

        <div class="modal fade" id="subir-historia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <div class="modal-dialog m-container" role="document">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ion-ios-close"><i class="fas fa-times"></i></span>
                  </button>

                    <div class="modal-content m-content">
                        <div class="modal-body p-4 p-md-5">


                        <div class="container">
                            <h1 class="titulo">Nueva Historia</h1>
                        </div>

                        <div class="container">

                             <div class="container">
                                <p>Seleccione un archivo de foto.</p>
                            </div>
                            <div class="seleccionados">

                                <!--BOTON de SELECCIONAR Archivos-->


                                <form name="frmImage" enctype="multipart/form-data" action="inserthistoria.php"
                                  method="post" class="frmImageUpload">
                                  <label>Subir Archivo de Imagen:</label><br>
                                  <input name="userImage" type="file" class="inputFile">
                                  <input type="submit" value="Submit" class="btnSubmit" />
                                </form>
                            </div>
                        </div>



                        <div class="publicarCancelar">

                            <!--Botones para PUBLICAR o CANCELAR el post-->



                            </div>



                        </div>
                    </div>
            </div>
        </div>








        <section id="columnacentral">


			<!---Perfil hero---------------------------------------------->
			<!---Angelica---------------------------------------------->

			<section id="hero">
				<!----<div class="row">

				<article class="col-lg-3 col-sm-4 col-12">
					<div class="colum">
					    <p class="color-perfil">00</p>
					    <p class="color-perfil">Publicaciones</p>
					</div>
				</article>



				<article class="col-lg-3 col-sm-4 col-12">
					<div class="colum">
					    <p class="color-perfil">00</p>
					    <p class="color-perfil">Seguidores</p>
					</div>
				</article>


				<article class="col-lg-3 col-sm-4 col-12">
					<div class="colum">
					     <p class="color-perfil">00</p>
					     <p class="color-perfil">Seguidos</p>
					</div>-!>
				</article>
</div>

					<!---Kenia---------------------------------------------->


			
	    <div class="container perfil-container">
	    	<div class="row">
                        <div class="col-mg-1 col-xs-2">
                        <img src="<?php echo $foto; ?>" class="img-fluid">
                        </div>
                           <br>     
	    		<article class="col-md-3 col-xs-10" >
	    			<span class="nav-item"><?php echo $_SESSION['Nom']." ".$_SESSION['Apel'];?></span>
	    		</article>
	    		<article class="col-md-7 col-xs-10">
	    			<p class="info-perfil"><br><?php echo $_SESSION['bio'];?></p>
	    		</article>
	    		<article class="col-md-2 col-xs-2">
	    			<button type="button" class="btn btn-trans" data-toggle="modal" data-target="#editarperfil">
						<img src="images/settings.png" class="img-fluid" alt="square">
					</button>
	    		</article>
	    	</div>





		</div>
	</section>



<!-------------------------------------------editar perfil---------------------------------------------->

<div class="modal fade" id="editarperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

	<div class="modal-dialog m-container" role="document">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="ion-ios-close"><i class="fas fa-times"></i></span>
		  </button>

		<div class="modal-content m-content">
		    <div class="modal-body p-4 p-md-5">



		      	<div class="header-edit">
                    <h1 class="titulo">Editar Perfil</h1>
                </div>
                
                
                
                <form method="POST" action="guardar.php">
                         <div class="container editar-info">
                         	<h2 class="titulo-2">Cambiar foto de perfil</h2>
                         	<img src="<?php echo $fileSRC;?>" class="img-fluid">
                            <input id="file" type="file" name="foto" onchange="loadFile(event)">
                        </div>

                        <div class="container editar-info">
                            <h2 class="titulo-2">Cambiar banner</h2>
                            <img src="<?php echo $fileSRC;?>" class="img-fluid">
                            <input id="file" type="file" onchange="loadFile(event)"/>
                        </div>
                        
                        
                        <div class="container editar-info">
                            <h2 class="titulo-2">Numero de Cuenta</h2>
                            <input id="cuenta"  type="cuenta" name="cuenta" value="<?php echo $_SESSION['N_Cuenta'];?>">
                        </div>
                        
                         <div class="container editar-info">
                            <h2 class="titulo-2">Nombre</h2>
                            <input id="nombre"  type="nombre" name="nombre" value="<?php echo $_SESSION['Nom'];?>">
                        </div>
                        <div class="container editar-info">
                            <h2 class="titulo-2">Apellido</h2>
                            <input id="apellido"  type="apellido" name="apellido" value="<?php echo $_SESSION['Apel'];?>">
                        </div>
                        
                        <div class="container editar-info">
                            <h2 class="titulo-2">Biografía</h2>
                            <input id="bio"  type="text" name="bio" value="<?php echo $_SESSION['bio'];?>" maxlength="300">
                        </div>

                        <div class="container editar-info">
                            <h2 class="titulo-2">Numero de celular</h2>
                            <input id="numCelular"  type="number" name="numCelular" value="<?php echo $_SESSION['N_Tel'];?>"  maxlength="8">
                        </div>

                       
                       <div class="container editar-info">
                            <h2 class="titulo-2">Correo</h2>
                            <input id="email"  type="e-mail" name="email" value="<?php echo $_SESSION['Correo'];?>"  maxlength="24">
                        </div>
                       
                        <input type="submit" name="editar" value="editar">
                         <div class="container editar-info">
                         
                        	<button onclick="location.href='perfil.php'" class="BotonCancelar" type="button">Cancelar</button>
                        </div>
</form>
  





		     </div>
		</div>
	</div>
</div>






			<!---Post------------Angelica---------------------------------->

			<section id="Galeria" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="row">

				<article class="col-lg-4 col-sm-12 col-12">
					<div class="Cont">
						
						<a href="images/panda3.png"><img src="images/panda3.png" class="img-fluid" alt="square"></a>
						<a href="images/escena1.png"><img src="images/escena1.png" class="img-fluid" alt="square"></a>
						<a href="images/1.png"><img src="images/1.png" class="img-fluid" alt="square"></a>


					</div>
				</article>

				<article class="col-lg-4 col-sm-12 col-12">
					<div class="Cont">
						<a href="images/escena2color.png"><img src="images/escena2color.png" class="img-fluid" alt="square"></a>
						<a href="images/propcolor.png"><img src="images/propcolor.png" class="img-fluid" alt="square"></a>
						<a href="images/2do street bleend.png"><img src="images/2do street bleend.png" class="img-fluid" alt="square"></a>
					</div>
				</article>

				<article class="col-lg-4 col-sm-12 col-12">
					<div class="Cont">
						<a href="images/luffy luz.png"><img src="images/luffy luz.png" class="img-fluid" alt="square"></a>
						<a href="images/3rd mar blend.png"><img src="images/3rd mar blend.png" class="img-fluid" alt="square"></a>
						<a href="images/escena a color1.png"><img src="images/escena a color1.png" class="img-fluid" alt="square"></a>
						<a href="images/Artboard 1.png"><img src="images/Artboard 1.png" class="img-fluid" alt="square"></a>


					</div>
				</article>


				</div>
            </div>
        </div>
    </div>
</section>

	</section>




    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>



</body>
</html>
