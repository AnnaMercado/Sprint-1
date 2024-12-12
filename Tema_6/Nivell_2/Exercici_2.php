<?php


trait Turbo{
    public function boost():void{
        echo "S'ha iniciat el turbo!";
    }

}

class Car{
    public string $marca;
    public string $matricula;
    public string $combustible;
    public int $velocitatMaxima;

    use Turbo; 

    public function __construct(string $marca, string $matricula, string $combustible, int $velocitatMaxima){
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible;
        $this->velocitatMaxima = $velocitatMaxima;
    }


}

?>