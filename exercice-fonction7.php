<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php

	function exercice7($age, $genre){
		if($age>=18 && $genre=='Homme'){

			$message ="**Vous êtes un homme et vous êtes majeur**";
		}else if($age<18 && $genre == 'Homme'){

			$message ="**Vous êtes un homme et vous êtes mineur**";
		}

		if($age>=18 && $genre=='Femme'){

			$message ="**Vous êtes une femme et vous êtes majeure**";
		}else if($age<18 && $genre == 'Femme'){

			$message ="**Vous êtes une femme et vous êtes mineure**";
		}
		return $message;
	}


	echo exercice7(21, 'Homme') . '<br />';
	echo exercice7(18, 'Homme') . '<br />';
	echo exercice7(12, 'Homme') . '<br />';
	echo exercice7(21, 'Femme') . '<br />';
	echo exercice7(18, 'Femme') . '<br />';
	echo exercice7(12, 'Femme') . '<br />';


	
	?>
	
</body>
</html>