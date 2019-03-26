<?php

function print_arr(array $param) 
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

function compress_image($src, $dest , $quality) 
{
	$info = getimagesize($src);
 
	if ($info['mime'] == 'image/jpeg') {
		$image = imagecreatefromjpeg($src);
	} elseif ($info['mime'] == 'image/gif') {
		$image = imagecreatefromgif($src);
	} elseif ($info['mime'] == 'image/png') {
		$image = imagecreatefrompng($src);
	} else {
		die('Unknown image file format');
	}
 
	//compress and save file to jpg
	imagejpeg($image, $dest, $quality);
 
	//return destination file
	return $dest;
}
 