<?php
require_once 'mamifero.php';

class Canguru extends Mamifero {
    public function locomover() {
        echo "<p>Pulando</p>";
    }

    public function usarBolsa() {
        echo "<p>Filhote na bolsa</p>";
    }
}
?>