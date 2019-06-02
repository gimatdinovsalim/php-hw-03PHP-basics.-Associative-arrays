<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03.Основы PHP. Ассоциативные массивы</title>
</head>
<body>
	<?php 

	$bookList = array (
		"Рей Брэдбери" => "451° по Фаренгейту",
		"Михаил Афанасьевич Булгаков" => "Мастер и Маргарита", 
		"Оскар Уайльд" => "Портрет Дориана Грея", 
		"Даниел Киз" => "Цветы для Элджернона", 
		"Антуан де Сент-Экзюпери" => "Маленький принц"
	);

	foreach ($bookList as $key => $value) {
		echo "<ol>";
		echo "$key => $value";
		echo "</ol>";
	}









	 ?>
	
</body>
</html>