<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">

	<style type="text/css">
		input[type=text], textarea {
		    width: 100%;
		    padding: 12px;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		    margin-top: 6px;
		    margin-bottom: 16px;
		    resize: vertical;
		    font-family: monospace;
		}

		textarea{
			height: 500px;
		}
	</style>
</head>
<body>
	<form>

		<input type="text" name="news_title" placeholder="Título de la noticia"> <br>
		<input type="text" name="news_brief" placeholder="Breve descripción"> <br>
		<input type="file" name="news_image" accept="image/*"> <br>
		<textarea name="news_content" placeholder="Contenido de la noticia..."></textarea>
	</form>
</body>
</html>