<?php 

Class Coche{
    protected $color;

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    public function printCaracteristicas(){
        echo "Color: " . $this->getColor() ;
    }

}

Class CochedeLujo extends Coche{
    protected $extras;

    public function setExtras($extras){
        $this->extras = $extras;
    }

    public function getExtras(){
        return $this->extras;
    }

    public function printCaracteristicas(){
        echo "Color: " . $this->color;
        echo '<hr/>';
        echo "Extras: " . $this->extras;
    }
}

$miCoche = new CochedeLujo();
$miCoche->setColor("Negro");
$miCoche->setExtras("TV");
$miCoche->printCaracteristicas();