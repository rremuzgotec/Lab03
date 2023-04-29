<!DOCTYPE html>
<html>
<head>
	<title>Notas del Alumno</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Promedio de Notas</h2>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="nota1">Nota 1:</label>
				<input type="number" class="form-control" id="nota1" name="nota1" min="0" max="20" step="0.1" required>
			</div>
			<div class="form-group">
				<label for="nota2">Nota 2:</label>
				<input type="number" class="form-control" id="nota2" name="nota2" min="0" max="20" step="0.1" required>
			</div>
			<div class="form-group">
				<label for="nota3">Nota 3:</label>
				<input type="number" class="form-control" id="nota3" name="nota3" min="0" max="20" step="0.1" required>
			</div>
			<button type="submit" class="btn btn-primary">Calcular</button>
		</form>
		<br>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
            $nota1 = $_POST['nota1'];
			$nota2 = $_POST['nota2'];
			$nota3 = $_POST['nota3'];

			$promedio = ($nota1 + $nota2 + $nota3) / 3;

			if ($promedio >= 13) {
				echo "<p>El alumno aprobó con un promedio de $promedio</p>";
			} else {
				echo "<p>El alumno reprobó con un promedio de $promedio</p>";
			}
		}
		?>
	</div>
</body>
</html>
