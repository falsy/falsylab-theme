<?php

    header ("Content-Type: image/png");

    $font = "./nanum.ttf";
    $im  = imagecreatefrompng("image.png");

    $tc  = imagecolorallocate($im, 0, 0, 0);

    imagettftext($im, 15, 0, 80, 50, $tc, $font, "테스트 텍스트");

    imagepng($im); 
    imagedestroy($im);

    ?>