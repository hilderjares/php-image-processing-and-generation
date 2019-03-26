<?php

/*
/Ativa verificação de tipos 
*/
declare(strict_types=1);

/*
/ Mostra todos os erros, 0 para desativar todos
*/
error_reporting(E_ALL);
ini_set('display_errors', "1");


// include Composer's autoloader
$vendor = __DIR__.'/../vendor/autoload.php'; 

if (!file_exists($vendor)) {
    throw new RuntimeException('Install dependencies to run this script.');
}

require_once $vendor;

use Spatie\ImageOptimizer\OptimizerChainFactory;

print_arr(gd_info());

$date = ((new DateTime())->format('u'));

$pathImage = "images/nasa.jpg";
$pathNewImage = "images/compressed/nasa_compressed${date}.jpg";

printf("<p> %s : %f bytes </p>", $pathImage, filesize($pathImage));

$optimizerChain = OptimizerChainFactory::create();

$optimizerChain->optimize($pathImage, $pathNewImage);

printf("<p> %s : %f bytes </p>", $pathNewImage, filesize($pathNewImage));

$compressed = compress_image($pathImage, $pathNewImage, 60); 
echo $compressed;
