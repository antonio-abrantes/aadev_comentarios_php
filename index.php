<!DOCTYPE html>
<html>
<head>
	<title>Comentários</title>

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav>
		<h1>Sistema de Comentários PHP e AJAX com Javascript puro</h1>
	</nav>
	<section class="content">
		<div class="box_form">
			<h1>Deixe seu Comentário:</h1>
			<form id="form1">
				<label for="name">Nome</label><br>
				<input type="text" name="name" id="name"/><br><br>

				<label for="comment">Comentário</label><br>
				<textarea name="comment" id="comment"></textarea><br><br>

				<input type="submit" form="form1" class="btn-sub" value="Enviar Comentário"/><br><br>
			</form>
		</div>

		<div class="box_comment" id="box_comment">
			
		</div>
	</section>
	
	<script src="assets/js/script.js"></script>
</body>
</html>