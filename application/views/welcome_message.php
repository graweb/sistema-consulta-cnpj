<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="padding-top: 10%;">
	<div class="container col-md-6 col-md-offset-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h4>Consultar CNPJ</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php base_url()?>consultar" autocomplete="off">
					<div class="input-group mb-3">
						<input type="text" id="cnpj" name="cnpj" class="form-control" required="true" autofocus="true" placeholder="digite aqui..." aria-label="digite aqui..." aria-describedby="button-addon2">
						<button id="btn-consultar" class="btn btn-success">Consultar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>