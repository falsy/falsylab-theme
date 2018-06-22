<?php

    header ("Content-type: image/png");

    $bg = imagecreatefrompng("image-bg.png");
    $im  = imagecreatefrompng("image-1.png");
    $im2 = imagecreatefrompng("image-2.png");
    $im3 = imagecreatefrompng("image-3.png");

    imagecopy($bg, $im, 0, 0, 0, 0, 100, 200);
    imagecopy($bg, $im2, 100, 0, 0, 0, 100, 200);
    imagecopy($bg, $im3, 200, 0, 0, 0, 100, 200);

    imagepng($bg); 
    imagedestroy($bg);

    ?>