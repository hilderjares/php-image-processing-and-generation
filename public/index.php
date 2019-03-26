<?php

require __DIR__ . '../vendor/autoload.php';

// Mostra todos os erros, 0 para desativar todos
error_reporting(-1);		


use Spatie\ImageOptimizer\OptimizerChainFactory;
/*
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Image\ImageInterface;

$imagine = new Imagine\Imagick\Imagine();
$image = $imagine->open('public/images/rapadura.jpg');

$image->resize(new Box(100, 100))
   ->rotate(180)
   ->crop(new Point(0, 0), new Box(150, 150))
   ->save('public/images/new_rapadura.jpg');
*/


echo 'wallpaper.jpg' . ': ' . filesize('images/original.jpg') . ' bytes <br>';

$optimizerChain = OptimizerChainFactory::create();
$optimizerChain->optimize('public/images/wallpaper.jpg');

echo 'wallpaper.jpg' . ': ' . filesize('images/wallpaper.jpg') . ' bytes <br>';
