<HTML>
  <HEAD>
    <title>  Registro  </title>
    <link rel="stylesheet" title="estilos" type="text/css" href="estilo.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="jquery/jquery-3.1.1.min.js"></script>
  </HEAD>
    <BODY background="fondo3.jpg">
        <h1> <center> <font size=10 face="algerian" > REGISTRO DE USUARIO </font></center> </h1>
		<center> <IMG SRC="estudiando.gif" width="100" height "100"> </center>
		
		<form name='areas' action='registro2.php' method='POST'>  
		<fieldset>
			   <legend> <font size=2 face="MS Sans Serif" color="navy" center> LLENE LOS DATOS </font></legend>
			   <table border= "1">
			   <td width = 170> <B> USUARIO: </td> <td> <input type="text" name="usuario" value= "" /required></td >
			   <td width = 170> <B> CLAVE: </td> <td> <input type="password" name="clave" value= ""/required></td>
			<td width = 170> <B>CONFIRMAR CLAVE: </td> <td> <input type="password" name="confirmar" value= ""/ required></td >
				<br>
				</table>
			    <table border= "1">
				
					<td width = 170> <B> NOMBRE: </td> <td> <input type="text" name="nombre" value= ""required></td >
					<td width = 170> <B> APELLIDO: </td> <td> <input type="text"  name="apellido" value= ""required></td >
					<td> <B> DOCUMENTO: </td> <td> <input type="TEXT" name="documento" value= ""required></td >
					<td> <B> CORREO: </td> <td> <input type="text" name="correo" value= ""required></td >
				</tr>
			    
			   <legend> <font size=2 face="MS Sans Serif" color="navy" center> DATOS PRINCIPALES </font></legend>
			   </table>
			   <table border= "1">
				<tr>
					<td width = 170> <B> INSTITUCION: </td> <td> <input type="text" name="institucion" value= ""/></td>
					<td width = 170> <B> CARRERA O GRADO: </td> <td> <input type="text"  name="carrera" value= ""/></td >
					<td> <B> EDAD: </td> <td> <input type="text" name="edad" value= ""/></td >
					<td> <B> TELEFONO: </td> <td> <input type="text" name="telefono" value= ""/ ></td >
				</tr>
				
			   <legend> <font size=2 face="MS Sans Serif" color="navy" center> DATOS SEGUNDARIOS </font></legend>
			   </table>
			   </div>

			   
			   <div id="loescrito"></div>


			  
			 </fieldset>
			<br>
			<center> <input type="submit" name="grabar" value="GRABAR" /> </center>
		</form>
		
		<br> <br>
		<center> <IMG SRC="logo1.jpg" width="110" height "150"> </center><br>
		<center><a href="menu requerimientos.html"><img src="imagenes/atras.png" ></a></center>
   </BODY>
</HTML>