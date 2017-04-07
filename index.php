<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
	<link rel="stylesheet" href="./style/style.css">
	<title>PHP TEST</title>
</head>
<body>
        <nav>
		<div class="nav-wrapper orange">
			<a href="./index.php" class="brand-logo center">Home</a>
		</div>
	</nav>
        <div class="container">

<?php
require_once 'libs/Parsedown.php';

$parsedown = new Parsedown();
if (isset($_GET['p']) && file_exists('md/' . $_GET['p'] . '.md')){
	$text = file_get_contents('md/' . $_GET['p'] . '.md');
}else {
	$text=file_get_contents('md/Home.md');
}

echo $parsedown->setMarkupEscaped(true)->text($text);

?>

</div>
</html>
