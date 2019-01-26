<?php

function print_arr(array $param) {
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

print(phpversion());
print_arr(gd_info());

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP image processing and generation </title>
</head>
<body>
	<ul>
		<li> <a href="figures.php"> Figuras </a> </li>
	</ul>  
</body>
</html>
