<?php
try {
	require('controller/controller.php');
		connection();
		
}

catch(Exception $e) {
    // Si une erreur se produit, on arrive ici
    echo "Une erreur est survenue.<br>Détails : $e";
}