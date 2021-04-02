<?php
    //Устанавливаем тип содержимого 
    header('content-type: image/png');
    
    //Определяем размеры изображения 
    //125px width, 125px height
    $image = imagecreate(125, 125);
    
    //Выбираем цвет фона
    $blue = imagecolorallocate($image, 0, 0, 255);
    
    //Устанавливаем еще один цвет – красный для построения квадрата
    //Обратите внимание – цвет созданный первым, будет цветом фона.
    $red = imagecolorallocate($image, 255, 0, 0);
    
    //Строим закрашенный квадрат красным цветом
    ImageFilledRectangle($image, 50, 50, 75, 75, $red);  
    
    //Сохраняем файл в формате png и выводим его 
    imagepng($image);
    
    //Чистим использованную память
    imagedestroy($image);
?>