<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Ejercicio C</h2>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="num1">Primer número:</label>
				<input type="number" class="form-control" id="num1" name="num1" required>
			</div>
			<div class="form-group">
				<label for="num2">Segundo número:</label>
				<input type="number" class="form-control" id="num2" name="num2" required>
			</div>
			<button type="submit" class="btn btn-primary">Calcular</button>
		</form>
		<br>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			if ($num2 == 0) {
				echo "<p>El segundo número no puede ser cero</p>";
			} elseif ($num1 > $num2) {
				$suma = $num1 + $num2;
				$diferencia = $num1 - $num2;
				echo "<p>La suma de los dos números es: $suma</p>";
				echo "<p>La diferencia entre los dos números es: $diferencia</p>";
			} else {
				$producto = $num1 * $num2;
				$division = $num1 / $num2;
				echo "<p>El producto de los dos números es: $producto</p>";
				echo "<p>La división del primer número respecto al segundo número es: $division</p>";
			}
		}
		?>
	</div>
</body>
</html>
