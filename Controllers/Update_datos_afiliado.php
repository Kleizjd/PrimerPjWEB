	<?php include "../Conexion/Conexion.php";
	 if ($Conexion->connect_errno) {echo "Problemas en la Conexion a MySQL: " . $Conexion->connect_error;}
	 
	  /* AFILIADO */
	 $sql = "SELECT * FROM afiliado WHERE Documento=?";
	 $sentencia = $Conexion->prepare($sql);
	 if (!$sentencia) {printf("Problemas en la Sentencia Preparada.\n" . $Conexion->error . "\n");}
	 /* Sentencia preparada, etapa 2: vincular parametros y ejecutar */
	 $documento = $_REQUEST['documento'];
	 $sentencia->bind_param("i", $documento);
	 if (!$sentencia) {printf("Problemas en la Vinculación de Parámetros.\n" . $Conexion->error . "\n");}
	 $sentencia->execute();
	 if (!$sentencia) { printf("Problemas en la Ejecución.\n" . $Conexion->error . "\n"); }
	 /* Sentencia preparada, etapa 3: Obtener Resultado */
	 $registros = $sentencia->get_result();
	 if (!$registros) { printf("Problemas en el Select.\n" . $Conexion->error . "\n");}

	  /* BENEFICIARIO */
	 $beneficiario = "SELECT * FROM beneficiario WHERE Documento=?";
	 $senten = $Conexion->prepare($beneficiario);
	 $docu = $_REQUEST['documento'];
	 $senten->bind_param("i", $docu);
	 $senten->execute();
	 $regis = $senten->get_result();

	 // $bene1 = "SELECT * FROM beneficiario1  
	 //   WHERE Documento=?";
	 /* Sentencia Preparada, etapa 1: preparación */
	//  $sentence = $Conexion->prepare($bene1);
	//  $sentence->bind_param("i", $documento);
	//  $sentence->execute();
	//  $regist = $sentence->get_result();