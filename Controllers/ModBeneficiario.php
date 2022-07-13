<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
 <head>
 <title>Modificar Beneficiario</title> 
 <meta charset="utf-8">
 </head>
<body> <?php
 $conex=new mysqli("localhost","root","","formulario"); 
 $bene ="UPDATE beneficiario SET TipoDocumento=?, NDocumento=?, Sexo=? ,PrimerApellido=?,SegundoApellido=?,PrimerNombre=?,SegundoNombre=?, Parentesco=?,Novedad=?, Nacionalidad=?,
                            DirResidencia=?, Municipio=?, Departamento=?,FechaN=?,Telefono=? ,Celular=? ,Correo=? 
							WHERE Documento=? ";
							 $senten = $conex->prepare($bene);
if ($conex->connect_errno) {
	echo "Problemas en la Conexion a MySQL: " . $Conexion->connect_error;
	}
 if (!$senten) {
	 printf("Problemas en la Sentencia Preparada.\n". $Conexion->error . "\n"); }
	 $senten->bind_param("sisssssssssssssssi",$_POST['tipo0'],$_POST['doc0'],$_POST['sexo0'], $_POST['pap0'], $_POST['sap0'], $_POST['pnombre0'],$_POST['snombre0'],
                                               $_POST['par0'],$_POST['nov0'],$_POST['nacio0'],$_POST['dire0'],$_POST['mu0'],$_POST['dep0'],
											   $_POST['fechan0'], $_POST['tel0'],$_POST['cel0'],$_POST['correo0'],$_POST['documentoAnt0']); 
if (!$senten) { 
 printf("Problemas en la Vinculación de Parámetros.\n". $conex->error . "\n");
 } 
 $senten->execute();
  if (!$senten) {
	 printf("Problemas en el Update.\n". $conex->error . "\n");
	 } 
	 else echo "!!El Beneficiario fue modificado OK!!<br>";	
	 /* se recomienda el cierre explícito de la Sentencia */ $senten->close();$conex->close();
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
 ?>
<br /> <br />
<p><a href='javascript:history.go(-1)'>Anterior</a></p>
<p><a href='javascript:history.go(-2)'>Inicio</a></p>
</body> </html>