<?php
echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
echo $choice = (int) readline("Enter your choice (1-4) : ");
switch($choice){
    case 1:
        $r = (int) readline("Enter the radius of the circle: ");
        $circleArea = M_PI * $r * 2;
        if($r < 0){
            echo "You can not use negative values. " . PHP_EOL;
        }else{
            echo $circleArea  . PHP_EOL;
        }
        break;
    case 2:
        $length = (int) readline("Enter the length of a rectangle: ");
        if($length < 0){
            echo "You can not use negative values. " . PHP_EOL;
        }
        $width = (int) readline("Enter the width of a rectangle: ");
        $rectangleArea = $width * $length;
        if($width < 0){
            echo "You can not use negative values. " . PHP_EOL;
        }else{
            echo $rectangleArea . PHP_EOL;
        }
        break;
    case 3:
        $base = (int) readline("Enter the length of a triangle’s base: ");
        if($base < 0){
            echo "You can not use negative values. " . PHP_EOL;
        }
        $height = (int) readline("Enter the triangle’s height: ");
        $triangleArea = $base * $height * 0.5;
        if($base < 0 || $height < 0){
            echo "You can not use negative values. " . PHP_EOL;
        }else{
            echo $triangleArea . PHP_EOL;
        }
        break;
    case 4:
        break;
    default:
        echo "Invalid input.";
}











