<!DOCTYPE html>
<html>
<?php header("Content-Type: text/html;  charset=utf-8");?>
<meta http-equiv="Content-Type" content="text\html; charset=utf-8"/>
<head>
    <title>my first php page!</title>
</head>
<body>
<h1><?php echo 'Это тег h1 с данными php';?></h1>
    <p><?php echo 'Это тег p с данными php';?></p>
<?php
echo "Hello, world!"; //Вывод содержимого 
?>
<?php
$myVar = 0; //Число
$myVar = 3.14; //Число с плавающей точкой
$myVar = "Текущий год"; //Строка
$myVar = true; //Булева переменная

$myArray = array('Элемент1' => 'Значение1', 'Элемент2' => 'Значение2'); // Массив
$myArray = ['Элемент1' => 'Значение1', 'Элемент2' => 'Значение2']; // Массив сокращенного вида
?>
</body>
</html>

