<?php
class Lingkaran
{
    public $phi, $jari;
    public function __construct($phi, $jari)
    {
        $this->phi = 22/7;
        $this->jari = $jari;
    }

    public function rumusKeliling()
    {
        // Rumus keliling: 2 * phi * jari-jari
        return 2 * $this->phi * $this->jari;
    }

    public function rumusLuas()
    {
        // Rumus luas: phi * jari-jari kuadrat
        return $this->phi * $this->jari *$this->jari;
    }
}
?>