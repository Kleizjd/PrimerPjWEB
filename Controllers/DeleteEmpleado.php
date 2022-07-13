<!DOCTYPE HTML PUBLIC"> <html> <head> 
<title>Borrado de registros de una tabla </title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> </head>
<body> <?php include "../Conexion/Conexion.php";

  $sql = "SELECT TipoDocumento,Documento,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,DirResidencia,Municipio,Departamento,
                         Barrio,Telefono,Celular,Correo,MunNacimiento,DepNacimiento,FechaN,Ocupacion,Riesgo,1Apellido,2Apellido,1Nombre,2Nombre,
						 Sexo,Ndocumento,TipDocumento,FechaExpe

						 FROM afiliado WHERE Documento='$_REQUEST[documento]'";

$registros=$Conexion->query($sql);
 if (!$registros){
	 printf("Problemas en el Select.\n". $Conexion->error . "\n"); 
	 }
if ($reg=$registros->fetch_assoc()) {
	
	echo  "<table border=2 bgcolor=#d9697c></tr><tr>
       <td style=color:#ffffff bgcolor=#797575>DATOS ACTUALES DEL AFILIADO</td></tr>
  <tr><td>
     TipoDocumento:".$reg['TipoDocumento']."</td><td>Documento: ".$reg['Documento'].
	"</td></tr><tr><td>Primer Nombre : ".$reg['PrimerNombre'].
	"</td><td>Segundo Nombre: ".$reg['SegundoNombre'].
    "</td></tr><tr><td>Primer Apellido:".$reg['PrimerApellido'].
	"</td><td>Segundo Apellido:".$reg['SegundoApellido'].
	"</td></tr></td><td style=color:#ffffff bgcolor=#797575>
	A.DATOS UBICACION AFILIADO</td>
     <tr><td colspan=3>Direccion de Residencia:".$reg['DirResidencia'].
	"</td></tr><tr><td>Municipio: ".$reg['Municipio'].
	"</td><td>Departamento:".$reg['Departamento'].
	"</td><td>Barrio y/o vereda:".$reg['Barrio'].
	"<tr></td><td>Telefono:".$reg['Telefono'].
	"</td><td>Celular:".$reg['Celular'].
	"</td><tr></td><td>Correo Electronico:".$reg['Correo'].
	"</td></tr><tr>
	<td style=color:#ffffff bgcolor=#797575 colspan=3>B.FECHA Y/O LUGAR DE NACIMIENTO</td>
	</tr><tr><td>Municipio de Nacimiento:".$reg['MunNacimiento'].
	"</td><td>
	Departamento de Nacimiento:".$reg['DepNacimiento']."</td>
	<td>Fecha de Nacimiento:".$reg['FechaN']."</td>
	</tr><tr><td style=color:#ffffff bgcolor=#797575>C. OCUPACION U OFICIO
	<td>Ocupacion:".$reg['Ocupacion']."<td>
	 Riesgo:".$reg['Riesgo']."</td>
	</tr><tr><td style=color:#ffffff bgcolor=#797575 colspan=3>D. NOMBRES Y/O SEXO DEL AFILIADO</td></tr><tr><td>
	Primer Apellido :".$reg['1Apellido']."</td><td>
	Segundo Apellido :".$reg['2Apellido']."</td></tr><tr><td>
	Primer Nombre :".$reg['1Nombre']."</td><td>
	Segundo Nombre :".$reg['2Nombre']."</td><td>
	 Sexo :".$reg['Sexo'].
	"</td></tr><tr><td style=color:#ffffff bgcolor=#797575>E. TIPO Y/O NÚMERO DE DOCUMENTO</td></tr><tr><td>
	 N.documento Anterior:".$reg['Ndocumento']."</td><td>
	 TipDocumento :".$reg['TipDocumento']."</td></td><td>
    Fecha de Expedicion:".$reg['FechaExpe']."</td></tr></table>"; 
	
	
	 $sql = "delete FROM afiliado WHERE Documento='$_REQUEST[documento]'";
	 
		if (!$Conexion->query($sql)) {
		printf("Problemas en el Delete.\n". $Conexion->error . "\n"); 
		} echo "<br><strong>REGISTRO ELIMINADO !OK!</strong><br>";
   } else {
   echo "NO existe empleado con ese codigo"."<br>";  }
    $bene= "SELECT Documento,TipoDocumento,NDocumento,Sexo,PrimerApellido,SegundoApellido,PrimerNombre,SegundoNombre,Parentesco,Novedad,Nacionalidad,
	                          DirResidencia,Municipio,Departamento,FechaN,Telefono,Celular,Correo
						           FROM beneficiario
								   WHERE Documento='$_REQUEST[documento]'";
   $registros=$Conexion->query($bene);
 if (!$registros){
	 printf("Problemas en el Select.\n". $Conexion->error . "\n"); 
	 }
if ($reg=$registros->fetch_assoc()) {
	
	 echo "<br><table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>
      BENEFICIARIO 1</td></tr>
       </tr><tr><td>TipoDocumento: ".$reg['TipoDocumento'].
	"</td><td>N.Documento: ".$reg['NDocumento'].
	"</td><td>Sexo: ".$reg['Sexo'].
    "</td></tr><tr><td>Primer Apellido:".$reg['PrimerApellido'].
	"</td><td>Segundo Apellido: ".$reg['SegundoApellido'].
	"</td></tr><tr><td>Primer Nombre : ".$reg['PrimerNombre'].
	"</td><td>Segundo Nombre: ".$reg['SegundoNombre'].
	"</td><td>Parentesco: ".$reg['Parentesco'].
	"</td></tr><tr><td>Parentesco: ".$reg['Novedad'].
	"</td><td>Novedad: ".$reg['Novedad']."</td></tr><tr><td>Nacionalidad:".$reg['Nacionalidad'].
	"</td><td>Direccion: ".$reg['DirResidencia'].
	"</td></tr><tr><td>Municipio: ".$reg['Municipio']."</td><td>Departamento:".$reg['Departamento'].
	"</td></tr><tr><td>Fecha de Nacimiento:".$reg['FechaN'].
	"</td><td>Telefono: ".$reg['Telefono'].
	"</td><td>Celular: ".$reg['Celular'].
	"</td></tr><tr><td>Correo: ".$reg['Correo']."</tr></td></table>";
	   $bene = "delete FROM beneficiario WHERE Documento='$_REQUEST[documento]'";
	
		if (!$Conexion->query($bene)) {
		printf("Problemas en el Delete.\n". $Conexion->error . "\n"); 
		} echo "<br><strong>REGISTRO ELIMINADO !OK!</strong>";
   } else {
   echo "NO existe empleado con ese codigo"."<br>";  }
   
   $bene1= "SELECT Documento,TipoDocumento,NDocumento,Sexo,PrimerApellido,SegundoApellido,PrimerNombre,SegundoNombre,Parentesco,Novedad,Nacionalidad,
	                          DirResidencia,Municipio,Departamento,FechaN,Telefono,Celular,Correo
						           FROM beneficiario1
								   WHERE Documento='$_REQUEST[documento]'";
   $regist=$Conexion->query($bene1);
 if (!$regist){
	 printf("Problemas en el Select.\n". $Conexion->error . "\n"); 
	 }
if ($reg=$regist->fetch_assoc()) {
	
	 echo "<br><table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>
        BENEFICIARIO 2</td></tr>
       </tr><tr><td>TipoDocumento: ".$reg['Tipodocumento'].
	"</td><td>N.Documento: ".$reg['NDocumento'].
	"</td><td>Sexo: ".$reg['Sexo'].
    "</td></tr><tr><td>Primer Apellido:".$reg['PrimerApellido'].
	"</td><td>Segundo Apellido: ".$reg['SegundoApellido'].
	"</td></tr><tr><td>Primer Nombre : ".$reg['PrimerNombre'].
	"</td><td>Segundo Nombre: ".$reg['SegundoNombre'].
	"</td><td>Parentesco: ".$reg['Parentesco'].
	"</td></tr><tr><td>Parentesco: ".$reg['Novedad'].
	"</td><td>Novedad: ".$reg['Novedad']."</td></tr><tr><td>Nacionalidad:".$reg['Nacionalidad'].
	"</td><td>Direccion: ".$reg['DirResidencia'].
	"</td></tr><tr><td>Municipio: ".$reg['Municipio']."</td><td>Departamento:".$reg['Departamento'].
	"</td></tr><tr><td>Fecha de Nacimiento:".$reg['FechaN'].
	"</td><td>Telefono: ".$reg['Telefono'].
	"</td><td>Celular: ".$reg['Celular'].
	"</td></tr><tr><td>Correo: ".$reg['Correo']."</tr></td></table>";
	   $bene1 = "delete FROM beneficiario1 WHERE Documento='$_REQUEST[documento]'";
	
		if (!$Conexion->query($bene1)) {
		printf("Problemas en el Delete.\n". $Conexion->error . "\n"); 
		} echo "<br><strong>REGISTRO ELIMINADO !OK!</strong>";
   } else {
   echo "NO existe empleado con ese codigo"."<br>";  }
   

   $Conexion->close(); ?> 
   <br> <a href="../index.php"><em>Pagina Principal</em></a>
</body> </html>