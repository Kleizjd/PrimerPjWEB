<!DOCTYPE html ">
 <html xmlns=" http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<title>Form Update con Dos Tablas</title>
</head>

<body> <?php
		include "../Conexion/Conexion.php";

		$sql = "UPDATE afiliado SET TipoDocumento=?, Documento=?, PrimerNombre=?, SegundoNombre=?, PrimerApellido=?, SegundoApellido=?, DirResidencia=?, Municipio=?, Departamento=?,Barrio=? 
                                  ,Telefono=? ,Celular=? ,Correo=? ,MunNacimiento=? ,DepNacimiento=? ,FechaN=? ,Ocupacion=? ,Riesgo=? ,1Apellido=? ,2Apellido=? ,1Nombre=?, 2Nombre=?,
						           Sexo=? ,Ndocumento=?,TipDocumento=?,FechaExpe=?
							WHERE Documento=? ";

		/* Sentencia Preparada, etapa 1: preparación */
		$sentencia = $Conexion->prepare($sql);
		if (!$sentencia) {
			printf("Problemas en la Sentencia Preparada.\n" . $Conexion->error . "\n");
		}
		/* Sentencia preparada, etapa 2: vincular parametros y ejecutar */     /*afiliado*/
		$sentencia->bind_param(
			"sissssssssssssssssssssssssi",
			$_POST['tipo'],
			$_POST['doc'],
			$_POST['pnombre'],
			$_POST['snombre'],
			$_POST['pap'],
			$_POST['sap'],
			$_POST['dir'],
			$_POST['mu'],
			$_POST['dep'],
			$_POST['ba'],
			$_POST['tel'],
			$_POST['cel'],
			$_POST['correo'],
			$_POST['mun'],
			$_POST['depn'],
			$_POST['fechan'],
			$_POST['ocu'],
			$_POST['riesgo'],
			$_POST['1ap'],
			$_POST['2ap'],
			$_POST['1nom'],
			$_POST['2nom'],
			$_POST['sexo'],
			$_POST['ndoc'],
			$_POST['tip'],
			$_POST['fechae'],
			$_POST['documentoAnt']
		);
		if (!$sentencia) {
			printf("Problemas en la Vinculación de Parámetros.\n" . $Conexion->error . "\n");
		}
		$sentencia->execute();
		if (!$sentencia) {
			printf("Problemas en el Update.\n" . $Conexion->error . "\n");
		} else echo "!!El Afiliado fue modificado OK!!<br>";
		/* se recomienda el cierre explícito de la Sentencia */
		$sentencia->close();
		$Conexion->close();
		/*----------------------------------------------------------*/
		$conex = new mysqli("localhost", "root", "", "formulario");
		$bene = "UPDATE beneficiario SET Documento=?,TipoDocumento=?, NDocumento=?, Sexo=? ,PrimerApellido=?,SegundoApellido=?,PrimerNombre=?,SegundoNombre=?, Parentesco=?,Novedad=?, Nacionalidad=?,
                            DirResidencia=?, Municipio=?, Departamento=?,FechaN=?,Telefono=? ,Celular=? ,Correo=? 
							WHERE Documento=? ";
		$senten = $conex->prepare($bene);
		if ($conex->connect_errno) {
			echo "Problemas en la Conexion a MySQL: " . $Conexion->connect_error;
		}
		if (!$senten) {
			printf("Problemas en la Sentencia Preparada.\n" . $Conexion->error . "\n");
		}
		$senten->bind_param(
			"ssisssssssssssssssi",
			$_POST['doc'],
			$_POST['tipo0'],
			$_POST['doc0'],
			$_POST['sexo0'],
			$_POST['pap0'],
			$_POST['sap0'],
			$_POST['pnombre0'],
			$_POST['snombre0'],
			$_POST['par0'],
			$_POST['nov0'],
			$_POST['nacio0'],
			$_POST['dire0'],
			$_POST['mu0'],
			$_POST['dep0'],
			$_POST['fechan0'],
			$_POST['tel0'],
			$_POST['cel0'],
			$_POST['correo0'],
			$_POST['documentoAnt']
		);
		$docum = $_POST['tipo'];
		if (!$senten) {
			printf("Problemas en la Vinculación de Parámetros.\n" . $conex->error . "\n");
		}
		$senten->execute();
		if (!$senten) {
			printf("Problemas en el Update.\n" . $conex->error . "\n");
		} else echo "!!El Beneficiario fue modificado OK!!<br>";
		/* se recomienda el cierre explícito de la Sentencia */
		$senten->close();
		$conex->close();
		/*-----------------------------------------------------------*/
		// $conexi = new mysqli("localhost", "root", "", "formulario");
		// $bene1 = "UPDATE beneficiario1 SET Documento=?,TipoDocumento=?, NDocumento=?, Sexo=? ,PrimerApellido=?,SegundoApellido=?,PrimerNombre=?,SegundoNombre=?, Parentesco=?,Novedad=?, Nacionalidad=?,
        //                     DirResidencia=?, Municipio=?, Departamento=?,FechaN=?,Telefono=? ,Celular=? ,Correo=? 
		// 					 WHERE Documento=? ";
		// $sent = $conexi->prepare($bene1);
		// if ($conexi->connect_errno) {
		// 	echo "Problemas en la Conexion a MySQL: " . $Conexion->connect_error;
		// }
		// if (!$sent) {
		// 	printf("Problemas en la Sentencia Preparada.\n" . $conexi->error . "\n");
		// }
		// $sent->bind_param(
		// 	"ssisssssssssssssssi",
		// 	$_POST['doc'],
		// 	$_POST['tipo1'],
		// 	$_POST['doc1'],
		// 	$_POST['sexo1'],
		// 	$_POST['pap1'],
		// 	$_POST['sap1'],
		// 	$_POST['pnombre1'],
		// 	$_POST['snombrea'],
		// 	$_POST['par1'],
		// 	$_POST['nov1'],
		// 	$_POST['nacio1'],
		// 	$_POST['dire1'],
		// 	$_POST['mu1'],
		// 	$_POST['dep1'],
		// 	$_POST['fechan1'],
		// 	$_POST['tel1'],
		// 	$_POST['cel1'],
		// 	$_POST['correo1'],
		// 	$_POST['documentoAnt']
		// );
		// if (!$sent) {
		// 	printf("Problemas en la Vinculación de Parámetros.\n" . $conexi->error . "\n");
		// }
		// $sent->execute();
		// if (!$sentencia) {
		// 	printf("Problemas en el Update.\n" . $Conexion->error . "\n");
		// } else echo "!!El beneficiario1 fue modificado OK!!<br>";
		// /* se recomienda el cierre explícito de la Sentencia */
		// $sent->close();
		// $conexi->close();
		// /*------------------------------------------------------------------------*/

		?>
	<br /> <br />
	<p><a href='javascript:history.go(-1)'>Anterior</a></p>
	<p><a href='javascript:history.go(-2)'>Inicio</a></p>
</body>

</html>