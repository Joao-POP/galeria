<!doctype html>

<html lang="pt-BR">
	<head>
		<title>Galeria digital - Veja suas fotos que compramos do gov.br</title>
		<link rel="stylesheet" href="./style.css" />
		<script src="main.js" type="module" defer></script>
	</head>
	<body>
		<?php
		require_once 'config.php';
		
		$image_paths = preg_grep("/^([^.])/", scandir($upload_dir));
		?>
		<form id="upload-dialog"
			class="hidden"
			action="upload.php"
			name="image-upload"
			method="post"
			enctype="multipart/form-data">
			<label for="upload">Enviar fotos</label>
			<div id="container">
				<input id="upload" name="upload" type="file" accept="image/png, image/jpeg" />
			</div>
			<button id="upload-button" disabled>Fazer upload</button>
		</form>
		
		<?php foreach ($image_paths as $image_path): ?>
		<div class="photo-panel">
			<img src="<?= $upload_dir . $image_path ?>"/>
			<p><?= $image_path ?></p>
		</div>
		<?php endforeach; ?>
	</body>
</html>