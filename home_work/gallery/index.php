<?php

require __DIR__ . '/images.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 2</title>
</head>
<body>

<?php


foreach ($image as $id => $img) { ?>
    <a href="http://profitphp1.local/lesson_3/home_work/gallery/image.php?id=<?php echo $id; ?>">
        <img src="http://profitphp1.local/lesson_3/home_work/gallery/img/<?php echo $img; ?>" style="width: 300px; ">
    </a>
<?php
}
?>
</body>
</html>