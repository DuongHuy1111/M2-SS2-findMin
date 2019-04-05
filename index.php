<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

function findMin($arr)
{
    $min = $arr[0];
    for ($index = 0; $index < count($arr); $index++) {
        if ($min > $arr[$index]) {
            $min = $arr[$index];
        }
    }
    echo "Giá trị nhỏ nhất trong mảng: ". $min;
}
$arr = [2, 4, 5, 7, 5, 3];
findMin($arr);

?>
</body>
</html>