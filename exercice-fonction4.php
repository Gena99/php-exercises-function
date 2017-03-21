<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php
	function exercice4($nombre1, $nombre2){
		if($nombre1>$nombre2){
			return('**Le premier nombre est plus grand**');

		}else if ($nombre1<$nombre2){
			return('**Le premier nombre est plus petit** ');

		}else{
			return('**Les deux nombres sont identiques**');

		}
		
	}
	echo exercice4(37, 21).'<br/>';
	echo exercice4(12, 21).'<br/>';
	echo exercice4(37, 37).'<br/>';
	?>


</body>
</html>