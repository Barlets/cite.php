<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/web/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/web/lib/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="/web/css/style.css">

	<title>Просто сайт</title>
</head>

<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="/"><h1 class="text-center">Мой домашний сайт</h1></a>
				<hr>
			</div>
		</div>
	</div>
</header>

<?php include(ROOT . '/app/views/' . $content_view); ?>

<footer>

</footer>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="/web/lib/fancybox/jquery.fancybox.pack.js"></script>
<script src="/web/js/common.js"></script>
</body>
</html>