<!DOCTYPE html>
<html lang="en">
<head>
    <body>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a rectangle</title>

    <?php

function calculateArea($length, $width) {
    
    $area = $length * $width;
    return $area;
}

$length = 4;
$width = 2;
$area = calculateArea($length, $width);

echo "The area of a rectangle with a width of $length and $width is $area";
?>

</head>
</body>
</html>