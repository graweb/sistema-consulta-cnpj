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
	<div class="container">
		<div class="row">
			<h1>Resultado</h1>
			<table class="table">
				<tr>
					<td><strong>Nome</strong></td>
					<td><?php echo $dados['nome'];?></td>
				</tr>
				<tr>
					<td><strong>CNPJ</strong></td>
					<td><?php echo $dados['cnpj'];?></td>
				</tr>
				<tr>
					<td><strong>Atividade Principal</strong></td>
					<td><?php echo $dados['atividade_principal'][0]['text'];?></td>
				</tr>
				<tr>
					<td><strong>Situação</strong></td>
					<td><?php echo $dados['situacao'];?></td>
				</tr>
				<tr>
					<td><strong>Município</strong></td>
					<td><?php echo $dados['municipio'];?></td>
				</tr>
				<tr>
					<td><strong>UF</strong></td>
					<td><?php echo $dados['uf'];?></td>
				</tr>
			</table>
		</div>
		<div class="d-grid gap-2 d-md-block">
			<a href="<?php base_url();?>welcome" class="btn btn-danger">Voltar</a>
		</div>
	</div>
</body>
</html>