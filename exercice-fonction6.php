<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php
	function exercice6($nom, $prenom, $age){
		return('Bonjour '. $nom . ' ' . $prenom . ', tu as ' . $age . ' ans');


	}
	echo exercice6('Pailha', 'Géna', 47);

	?>
	
</body>
</html>