<?php
// Inclure la classe Test
require_once 'test.php';
$a = 89;
$b= 8;
// Créer une instance de Test avec des valeurs
$monTest = new Test($a, $b);

// Appeler les méthodes et afficher les résultats
echo "Addition: " . $monTest->addition() . "\n";  // Affichera 8
echo "Multiplication: " . $monTest->factorielle() . "\n"; // Affichera 15
?>