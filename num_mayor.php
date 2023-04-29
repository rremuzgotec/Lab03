<!DOCTYPE html>
<html>
<head>
	<title>Mayor de Tres Números</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Numero mayor</h2>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="numero1">Número 1:</label>
				<input type="number" class="form-control" id="numero1" name="numero1" required>
			</div>
			<div class="form-group">
				<label for="numero2">Número 2:</label>
				<input type="number" class="form-control" id="numero2" name="numero2" required>
			</div>
			<div class="form-group">
				<label for="numero3">Número 3:</label>
				<input type="number" class="form-control" id="numero3" name="numero3" required>
			</div>
			<button type="submit" class="btn btn-primary">Calcular</button>
		</form>
		<br>
		<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
            $numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];
			$numero3 = $_POST['numero3'];
			
            $mayor = $numero1;
			
            if ($numero2 > $mayor) {
				$mayor = $numero2;
			}
			
            if ($numero3 > $mayor) {
				$mayor = $numero3;
			}
			echo "<p>El número mayor es $mayor</p>";
		}
		?>
	</div>
</body>
</html>
