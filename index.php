<!DOCTYPE html>
<html>
<head>
	<title>Programa de cálculo matemático</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Programa de cálculo matemático</title>
</head>
<body>
<h1>Bienvenido al programa de cálculo matemático</h1>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$opcion = $_POST["opcion"];
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$nombre = $_POST["nombre"];
		$nombre2 = $_POST["nombre2"];
		$celular = $_POST["celular"];
		$cedula = $_POST["cedula"];
		$correo = $_POST["correo"];
		$operacion = "";
		$resultado = "";
		switch ($opcion) {
			case 2:
				$resultado = $num1 + $num2;
				$operacion = "Suma";	
				break;
			case 3:
				$resultado = $num1 - $num2;
				$operacion = "Resta";
				break;
			case 4:
				$resultado = $num1 * $num2;
				$operacion = "Multiplicación";
				break;
			case 5:
				if ($num2 == 0) {
					$resultado = "Error: No se puede dividir entre cero.";
				} else {
					$resultado = $num1 / $num2;
				}
				$operacion = "División";
				break;
			default:
				$resultado = "Error: Operación inválida.";
				$operacion = "";
				break;
		}

		echo "<h1>Resultado de la $operacion</h1>";
		echo "<p>El resultado de la $operacion entre $num1 y $num2 es: $resultado</p>";
		echo "<h1>Su nombre es: $nombre</h1>";
		echo "<h1>Su segundo nombre es: $nombre2</h1>";
		echo "<h1>Su celular es: $celular</h1>";
		echo "<h1>Su cedula es: $cedula</h1>";
		echo "<h1>Su correo es: $correo</h1>";
	}
	else {
		?>
		<form method="post" action="">|
				<h1>Datos De Usuario</h1>
				<label for="nombre">Primer Nombre:</label>
				<input type="text" name="nombre" id="nombre">
				<label for="nombre2">Segundo Nombre:</label>
				<input type="text" name="nombre2" id="nombre2">
				<label for="celular">Celular</label>
				<input type="text" name="celular" id="celular">
				<label for="cedula">Cedula</label>
				<input type="text" name="cedula" id="cedula">
				<label for="correo">Correo</label>
				<input type="text" name="correo" id="correo">
				<br><br>
			<label for="opcion">Seleccione una operación:</label>
			<select name="opcion" id="opcion">
				<option value="2">Suma</option>
				<option value="3">Resta</option>
				<option value="4">Multiplicación</option>
				<option value="5">División</option>
			</select>
			<br><br>
			<label for="num1">Primer número:</label>
			<input type="number" name="num1" id="num1">
			<br><br>
			<label for="num2">Segundo número:</label>
			<input type="number" name="num2" id="num2">
			<br><br>
			<input type="submit" value="Calcular">
		</form>
		<?php
			}
		?>
</body>
</html>