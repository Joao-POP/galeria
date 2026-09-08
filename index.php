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
			<label>Enviar arquivos</label>
			<button class="close-button"><div class="cross"></div></button>
			<form method="post" action="" enctype="multipart/form-data">
				<input type="file" accept="image/*" name="image-upload" />
				<button>Enviar</button>
				<button>Escolher outra foto</button>
				<button>Cancelar</button>
			</form>
		</div>
	</body>
</html>