<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once "includes/dbh.inc.php";
  session_start();

$query = "SELECT * FROM usuarios";
    $result = $conn->query($query);

     if (!$result) die("Fatal Error");
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $_SESSION['id'] = $row['ID'];

if (isset($_POST['submit'])) {
		$_SESSION['id'];
	if (count($_FILES) > 0){
		//Aqui se hace la validacion si la funcion is_uploaded_fle es mayor que 0 se mete al if de lo contrario se mete al else 
		//y se direcciona al header.
		if (is_uploaded_file($_FILES['foto']['tmp_name']) > 0) {
        	require_once "includes/dbh.inc.php";
        	$imgData = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        	$imageProperties = getimageSize($_FILES['foto']['tmp_name']);
        	$foto = $_FILES['foto']['name'];
                $sql = "INSERT INTO usuarios(nombre, apellido, num_cuenta, num_telefono, correo, contrasenia, foto, banner, imgType, bio)";
        	
            	
		}
                                }
                              }
                              
                          
?>
