<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Calculadora de suma y producto</h2>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="num1">Primer número:</label>
				<input type="number" class="form-control" id="num1" name="num1" required>
			</div>
			<div class="form-group">
				<label for="num2">Segundo número:</label>
				<input type="number" class="form-control" id="num2" name="num2" required>
			</div>
			<div class="form-group">
				<label for="num3">Tercer número:</label>
				<input type="number" class="form-control" id="num3" name="num3" required>
			</div>
			<div class="form-group">
				<label for="num4">Cuarto número:</label>
				<input type="number" class="form-control" id="num4" name="num4" required>
			</div>
			<button type="submit" class="btn btn-primary">Calcular</button>
		</form>
		<br>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];
			$num4 = $_POST['num4'];

			$suma = $num1 + $num2;
			$producto = $num3 * $num4;

			echo "<p>La suma de los dos primeros números es: $suma</p>";
			echo "<p>El producto del tercer y cuarto número es: $producto</p>";
		}
		?>
	</div>
</body>
</html>
