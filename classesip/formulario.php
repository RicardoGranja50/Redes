<!DOCTYPE html>
<html>
<head>
	<title>Fomulario</title>
</head>
<body>
	<h3>Classes IP</h3>
	<h4>Digite o endereço IP que pretende verificar</h4>
	<form action="processar_class">
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="text" name="c">
		<input type="text" name="d"><br><br>
		<input type="submit" value="Confirmar">
	</form>
	<br><br>
	<h3>Protocolos</h3>
	<h4>Selecione o protocolo</h4>
	<form action="processar_protocolo.php">
  		<select name="protocolo" id="cars">
		    <option value="dns">DNS</option>
		    <option value="ftp">FTP</option>
		    <option value="http">HTTP</option>
		    <option value="ip">IP</option>
  		</select>
  		<br><br>
  		<input type="submit" value="Confirmar">
	</form>
</body>
</html>