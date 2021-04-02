<?php
    header("Content-Type:image/jpeg");

    $img = imageCreateTrueColor(600,500);
    imagefilledrectangle($img,0,0,600,500,imagecolorallocate($img,255,255,200));
    
    $black = imagecolorallocate($img,0,0,0);
    $grey = imagecolorallocate($img,153,153,153);
    $pink = imagecolorallocate($img,248,186,187);
    

    // Тело

    ImageFilledPolygon($img, array(
        61, 411,
        247, 444,
        229, 182
    ), 3, $grey);

    // Голова

    ImageFilledPolygon($img, array(
        155, 149,
        325, 305,
        309, 89
    ), 3, $grey);

    // Уши

    $ears = [
        [ "x" => 316, "y" => 64, "r" => 100, "color" => $grey ],
        [ "x" => 309, "y" => 80, "r" => 47, "color" => $pink ],
        [ "x" => 139, "y" => 133, "r" => 100, "color" => $grey ],
        [ "x" => 155, "y" => 138, "r" => 47, "color" => $pink ]
    ];

    foreach ($ears as $ear) {
        imageFilledEllipse($img, $ear["x"], $ear["y"], $ear["r"], $ear["r"], $ear["color"]);
    }
    
    // Глаза

    $eyes_coords = [
        [ "x" => 238, "y" => 178 ],
        [ "x" => 278, "y" => 165 ]
    ];

    foreach ($eyes_coords as $eye) {
        imageFilledEllipse($img, $eye["x"], $eye["y"], 10, 10, $black);
    }

    // Нос

    imageFilledEllipse($img, 325, 305, 17, 17, $black);

    // Усики

    $mustache = [
        [ "x" => 341, "y" => 279 ],
        [ "x" => 355, "y" => 306 ],
        [ "x" => 316, "y" => 334 ],
        [ "x" => 291, "y" => 314 ]
    ];

    foreach ($mustache as $item) {
        imageLine($img, 325, 305, $item["x"], $item["y"], $black);
    }

    // Хвост

    imageSetThickness($img, 2);
    imageArc($img, 134, 403, 70, 70, 0, 180, $black);
    imageArc($img, 66, 403, 70, 70, 250, 360, $black);
      
    imageJPEG($img,NULL,100);

    imagedestroy($img);
?>