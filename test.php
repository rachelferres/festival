<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>qub rent</title>
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
	<link rel="stylesheet" href="css/mystyle.css">
</head>

<body>

	

	<div class="container customwidth">
		<h3>What is your favourite car brand?<h3>
				<form method='POST' action='testresult.php'>
					<div class="form-group">
						<label class="form-label" for="input-example-1">Name</label>
						<input class="form-input" type="text" id="input-example-1" placeholder="your name" name="carname" required>

						<label class="form-label" for="input-example-2">Email</label>
						<input class="form-input" type="email" id="input-example-2" placeholder="your email" name="caremail" required>

						<div class="form-group">
							<select class="form-select" name="carbrand" required>
								<option>Choose an option</option>
								<option value="volvo">Volvo</option>
								<option value="skoda">Skoda</option>
								<option value="ford">Ford</option>
								<option value="toyota">Toyota</option>
							</select>
						</div>

						<div class="input-group">
							<input type='submit' class='btn' value='vote'>
							<!-- <input type='submit' button class="btn btn-primary input-group-btn" value='vote'></button> -->
						</div>
					</div>
					<div>
					

				</form>





	</div>

</body>

</html>