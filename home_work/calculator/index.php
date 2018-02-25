<?php

require __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1</title>
</head>
<body>

<?php
if(isset($_GET['x'])) {

    $x = $_GET['x'];
    // добавила ветку else
} else {
    $x = false;
}

if(isset($_GET['y'])) {

    $y = $_GET['y'];
    // добавила ветку else
} else {
    $y = false;
}

if(isset($_GET['operation'])) {

    $operation = $_GET['operation'];
    // также добавила ветку else
} else {
    $operation = false;
}

?>
<form method="get" action="http://profitphp1.local/lesson_3/home_work/calculator/index.php">
    <input type="number" name="x" value="<?php echo $x; ?>">
    <select name="operation">
        <option value="+"<?php if('+' == $operation ) { ?> selected <?php }?>>+</option>
        <option value="-"<?php if('-' == $operation ) { ?> selected <?php }?>>-</option>
        <option value="*"<?php if('*' == $operation ) { ?> selected <?php }?>>*</option>
        <option value="/"<?php if('/' == $operation ) { ?> selected <?php }?>>/</option>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
</form>
Результат: <?php echo calc($x, $y, $operation); ?>
</body>
</body>
</html>