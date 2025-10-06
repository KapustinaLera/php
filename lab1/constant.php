<?php
// ЗАДАНИЕ 1
define('CONSTANT', 'Константа');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	// ЗАДАНИЕ 2
	if (defined('CONSTANT')) {
	    echo 'Константа CONSTANT существует: ' . CONSTANT . '<br>';
	} else {
	    echo 'Константа CONSTANT не существует.<br>';
	}
	
	// ЗАДАНИЕ 3
	// Версия PHP
	echo 'Текущая версия PHP: ' . PHP_VERSION . '<br>';
	// Директория скрипта
	echo 'Директория скрипта: ' . __DIR__ . '<br>';
	?>
</body>
</html>