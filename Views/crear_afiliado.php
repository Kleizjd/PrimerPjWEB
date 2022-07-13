   <!DOCTYPE html>
   <html lang="es">

   <head>
   	<meta charset="utf-8" />
   	<title> Formulario Parcial</title>
   </head>

   <body bgcolor="#eee8e8">
   	<h2>
   		<center>FORMULARIO DE COTIZANTE AFILIADO</center>
   	</h2>
   	<h3>
   		<center>Sistema general de pensiones</center>
   	</h3>
   	<form name="insertar" action="../Controllers/Crear_Empleado.php" method="post">
   		<div class="Afiliado">
   			<input type="radio" name="selec" value="empleador">Empleador
   			<input type="radio" name="selec" value="afiliado">Afiliado
   			<table border="1" bgcolor="#d9697c">
   				<p><strong>1.INFORMACION A ACTUALIZAR</strong>
   				<p>
   					<tr>
   						<td>
   							A.<input type="radio" name="a" value="Dato">Datos ubicación Afiliado<br>
   							E.<input type="radio" name="a" value="Tipo">Tipo de dato y/o numero de documento<br>
   							I.<input type="radio" name="a" value="empleado">Fallecimiento del empleado<br>
   						</td>
   						<td>
   							B.<input type="radio" name="b" value="fecha">Fecha y/o lugar de nacimiento<br>
   							F.<input type="radio" name="b" value="expedicion">Fecha de expedicion cedula de ciudadania<br>
   							J.<input type="radio" name="b" value="emplea">Actualizacion de datos empleador<br>
   						<td>
   							C.<input type="radio" name="c" value="ocupacion">Ocupacion u oficio<br>
   							G.<input type="radio" name="c" value="beneficiarios">Beneficiarios<br>
   							<br>
   						</td>
   						<td>
   							D.<input type="radio" name="d" value="Nys">Nombre y/o sexo del afiliado<br>
   							H.<input type="radio" name="d" value="nationality">Nacionalidad<br>
   							<br>
   						</td>

   					</tr>
   			</table>

   			<table border="1" bgcolor="#d9697c">
   				<tr>
   					<td style="color:#ffffff" bgcolor="#797575">2. DATOS ACTUALES DEL AFILIADO</td>
   				</tr>
   				<tr>
   					<td>
   						Tipo de Documento
   						<input type="radio" name="docto" value="RC">Registro civil
   						<input type="radio" name="docto" value="TI">Tarjeta de identidad
   						<input type="radio" name="docto" value="CC">Cedula de Ciudadania
   					</td>
   					<td>Numero de Documento Registrado<input type="text" name="documento"></td>
   				</tr>
   				<tr>
   					<td>Primer Nombre: <input type="text" name="Pnombre" id="Pnombre"></td>
   					<td>Segundo nombre:<input type="text" name="Snombre" id="snombre"></td>
   				</tr>
   				<tr>
   					<td>Primer apellido:<input type="text" name="pApellido" id="pApellido"></td>
   					<td>Segundo apellido:<input type="text" name="sApellido" id="sApellido"></td>
   				</tr>
   				<tr>
   					</td>

   			</table><br>
   			<table border="1" bgcolor="#d9697c">
   				<tr>
   					<td bgcolor="#797575" style="color:#ffffff">3.DETALLE DE LA INFORMACION ACTUALIZAR</td>
   				</tr>
   				<tr>
   					<td style="color:#ffffff" bgcolor="#797575">A.DATOS UBICACION AFILIADO</td>
   				</tr>
   				<tr>
   					<td colspan="3">Dirección de Residencia<input type="text" name="direccion" id="direccion"></td>
   				</tr>
   				<tr>
   					<td>
   						Municipio
   						<SELECT name="mun">
   							<option value="Cali">Cali</option>
   							<option value="Palmira">Palmira</option>
   							<option value="Jamundi">Jamundi.</option>
   						</SELECT>Departamento<SELECT name="departamento">
   							<option value="Valle">Valle</option>
   							<option value="Cauca">Cauca</option>
   							<option value="Narino">Nariño</option>
   						</SELECT>
   					</td>
   					<td>Barrio y/o Vereda<input type="text" name="barrio" id="barrio"></td>
   				<tr>
   					<td>Telefono <input type="text" name="telefono" id="telefono"></td>
   					<td>Celular<input type="text" name="celular" id="celular"></td>
   					<td>Correo Electronico<input type="text" name="correo" id="correo">
   					</td>
   				</tr>
   			</table>
   			<br>
   			<table border="1" bgcolor="#d9697c">
   				<tr>
   					<td style="color:#ffffff" bgcolor="#797575">B.FECHA Y/O LUGAR DE NACIMIENTO</td>
   				</tr>
   				<tr>
   					<td>Municipio
   						<SELECT name="ciudadn">
   							<option value="cali">Cali</option>
   							<option value="palmira">Palmira</option>
   							<option value="jamundi">Jamundi.</option>
   						</SELECT>
   						Departamento<SELECT name="departamenton">
   							<option value="Valle">Valle</option>
   							<option value="Cauca">Cauca</option>
   							<option value="Narino">Nariño</option>
   						</SELECT>
   					</td>
   					<td>Fecha de Nacimiento <input type="date" name="fecha"></td>
   				</tr>
   			</table>
   			<br>
   			<table border="1" bgcolor="#d9697c">
   				<tr>
   					<td style="color:#ffffff" bgcolor="#797575">C. OCUPACION U OFICIO</td>
   				<tr>
   					<td>Ocupacion u oficio<input type="text" name="ocu" id="ocu"></td>
   					<td>Clase de riesgo
   						<input type="radio" name="riesgo" value="bajo">Bajo
   						<input type="radio" name="riesgo" value="medio">Medio
   						<input type="radio" name="riesgo" value="alto">Alto
   					</td>
   				</tr>
   			</table>
   			</tr>
   			<tr>
   				<td>
   					<br>
   					<table border="1" bgcolor="#d9697c">
   						<tr>
   							<td style="color:#ffffff" bgcolor="#797575">D. NOMBRES Y/O SEXO DEL AFILIADO</td>
   						</tr>
   						<tr>
   							<td>Primer apellido:<input type="text" name="papellidop" id="apellidop"></td>
   							<td>Segundo apellido:<input type="text" name="sapellidos" id="apellidos"></td>

   							<td>
   								<center>Sexo<center><br> <input type="radio" name="tipo" value="Masculino">Masculino<input type="radio" name="tipo" value="Femenino">Femenino
   							</td>
   						</tr>
   						<tr>
   							<td>Primer Nombre:<input type="text" name="Pnombrep" id="nombre"></td>
   							<td>Segundo nombre:<input type="text" name="Snombres" id="snombre"></td>
   						</tr>
   					</table>
   					<br>
   					<table border="1" bgcolor="#d9697c">
   						<tr>
   							<td style="color:#ffffff" bgcolor="#797575">
   								E. TIPO Y/O NÚMERO DE DOCUMENTO</td>
   						</tr>
   						<tr>
   							<td>Número de Documento anterior<input type="text" name="ingreso" id="ingreso"></td>
   							<td>Tipo de Documento Anterior
   								<input type="radio" name="docto1" value="RC">RC
   								<input type="radio" name="docto1" value="TI">TI
   								<input type="radio" name="docto1" value="CC">CC
   							</td>
   				</td>
   				<td>Fecha expedicion cédula<input type="date" name="expedicion">
   				</td>
   			</tr>
   			</table>
   		</div>
   		<br>
   		<table border="1" bgcolor="#d9697c">
   			<tr>
   				<td style="color:#ffffff" bgcolor="#797575">

   					BENEFICIARIO 1</td>
   			</tr>
   			<tr>
   				<td> Tipo de Documento
   					<input type="radio" name="dt" value="RC">RC
   					<input type="radio" name="dt" value="TI">TI
   					<input type="radio" name="dt" value="CC">CC
   				</td>
   				<td>
   					Número de documento<input type="text" name="ND" id="ND"></td>
   				<td>
   					<center>Sexo<center><br> <input type="radio" name="tip" value="Masculino">Masculino<input type="radio" name="tip" value="Femenino">Femenino
   				</td>
   			<tr>
   			<tr>
   				<td>Primer Apellido:
   					<input type="text" name="apellido0" id="a">
   				</td>
   				<td>Segundo Apellido:<input type="text" name="apellido2" id="b"></td>
   			</tr>
   			<tr>
   				<td>Primer Nombre:<input type="text" name="nombre0" id="c"></td>
   				<td>Segundo Nombre:<input type="text" name="nombre1" id="d"> </td>
   			</tr>
   			<br>
   			<td>Parentesco
   				1<input type="checkbox" name="caja1" value="1" />
   				2<input type="checkbox" name="caja2" value="2" />
   				3<input type="checkbox" name="caja3" value="3" />
   				4<input type="checkbox" name="caja4" value="4" />
   				5<input type="checkbox" name="caja5" value="5" />
   				6<input type="checkbox" name="caja6" value="6" />
   			</td>
   			<td>
   				Tipo de Novedad:<input type="radio" name="obj" value="Ingreso">
   				Ingreso<input type="radio" name="obj" value="Actualizacion">
   				Actualización<input type="radio" name="obj" value="Retiro">Retiro</td>
   			</tr>
   			<td>Nacionalidad
   				<input type="text" name="nacionalidad" id="nacionalidad">
   			</td>
   			<td>
   				Direccion Residencia
   				<input type="text" name="direccionr" id="direccionr">
   			</td>
   			</tr>
   			<td>Municipio
   				<SELECT name="municipiox">
   					<option value="cali">Cali</option>
   					<option value="palmira">Palmira</option>
   					<option value="jamundi">Jamundi.</option>
   				</SELECT>Departamento<SELECT name="departamentox">
   					<option value="Valle">Valle</option>
   					<option value="Cauca">Cauca</option>
   					<option value="Narino">Nariño</option>
   				</SELECT>
   			</td>
   			<td>Fecha de Nacimiento <input type="date" name="fechad"></td>
   			</tr>
   			<tr>
   				<td>Telefono <input type="text" name="tel" id="telef"></td>
   				<td>
   					Celular<input type="text" name="cel" id="cel"></td>
   				<td>Correo Electronico<input type="text" name="email" id="email"></td>
   			</tr>
   		</table>
   		<br>
   		<!-- <table border="1" bgcolor="#d9697c">
   			<tr>
   				<td style="color:#ffffff" bgcolor="#797575">

   					BENEFICIARIO 2</td>
   			</tr>
   			<tr>
   				<td> Tipo de Documento
   					<input type="radio" name="dt1" value="RC">RC
   					<input type="radio" name="dt1" value="TI">TI
   					<input type="radio" name="dt1" value="CC">CC
   				</td>
   				<td>
   					Número de documento<input type="text" name="ND1" id="ND1"></td>
   				<td>
   					<center>Sexo<center><br> <input type="radio" name="tip1" value="Masculino">Masculino<input type="radio" name="tip1" value="Femenino">Femenino
   				</td>
   			<tr>
   			<tr>
   				<td>Primer Apellido:
   					<input type="text" name="apellido01" id="a">
   				</td>
   				<td>Segundo Apellido:<input type="text" name="apellido02" id="b"></td>
   			</tr>
   			<tr>
   				<td>Primer Nombre:<input type="text" name="nombre01" id="c"></td>
   				<td>Segundo Nombre:<input type="text" name="nombre11" id="d"> </td>
   			</tr>
   			<br>

   			<td>Parentesco
   				1<input type="checkbox" name="caja01" value="1" />
   				2<input type="checkbox" name="caja02" value="2" />
   				3<input type="checkbox" name="caja03" value="3" />
   				4<input type="checkbox" name="caja04" value="4" />
   				5<input type="checkbox" name="caja05" value="5" />
   				6<input type="checkbox" name="caja06" value="6" />
   			</td>
   			<td>
   				Tipo de Novedad:<input type="radio" name="obj1" value="Ingreso">
   				Ingreso<input type="radio" name="obj1" value="Actualizacion">
   				Actualización<input type="radio" name="obj1" value="Retiro">Retiro</td>

   			</tr>
   			<td>Nacionalidad
   				<input type="text" name="nacionalidad1" id="nacionalidad1">
   			</td>
   			<td>
   				Direccion Residencia
   				<input type="text" name="direccionr1" id="direccionr1">
   			</td>
   			</tr>
   			<td>Municipio
   				<SELECT name="municipioxx">
   					<option value="cali">Cali</option>
   					<option value="palmira">Palmira</option>
   					<option value="jamundi">Jamundi.</option>
   				</SELECT>Departamento<SELECT name="departamentoxx">
   					<option value="Valle">Valle</option>
   					<option value="Cauca">Cauca</option>
   					<option value="Narino">Nariño</option>
   				</SELECT>
   			</td>
   			<td>Fecha de Nacimiento <input type="date" name="fechad1"></td>
   			</tr>
   			<tr>
   				<td>Telefono <input type="text" name="tel1" id="tele"></td>
   				<td>
   					Celular<input type="text" name="celu" id="celu"></td>
   				<td>Correo Electronico<input type="text" name="email1" id="email1"></td>
   			</tr>
   		</table> -->




   		<input type="submit" value="confirmar">
   		<a href="../index.php"><em>Pagina Principal</em></a>

   </body>

   </html>