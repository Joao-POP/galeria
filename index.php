<!doctype html>

<html lang="pt-BR">
	<head>
		<title>Galeria digital - Veja suas fotos que compramos do gov.br</title>
		<link rel="stylesheet" href="./style.css" />
		<script src="main.js" type="module" defer></script>
	</head>
	<body>
		<button id="upload-button" class="button-background">
			<div class="vertical-arm"></div>
			<div class="horizontal-arm"></div>
		</button>
		<div id="upload-window">
			<div class="toolbar">
				<label>Enviar arquivos</label>
				<button class="close-button">X</button>
			</div>
			<form method="post" action="" enctype="multipart/form-data">
				<img id="image-preview" class="placeholder" height="500px" />
				<input id="image-upload" type="file" accept="image/*" name="image-upload" />
				<button type="submit" class="upload-control" disabled>Enviar</button>
				<button class="upload-control" disabled>Escolher outra foto</button>
				<button class="upload-control" disabled>Cancelar</button>
			</form>
		</div>
	</body>
</html>