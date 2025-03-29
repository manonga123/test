<?php
declare(strict_types=1);

class Test {
    public float $a;
    public float $b;

    // Constructeur
    public function __construct(float $a, float $b) {
        $this->a = $a;
        $this->b = $b;
    }

    // Fonction addition
    public function addition(): float {
        $somme = $this->a + $this->b;
        return $somme;
    }

    // Fonction multiplication
    public function factorielle(): float {
        $valiny = $this->a * $this->b;
        return $valiny;
    }
}
?>
