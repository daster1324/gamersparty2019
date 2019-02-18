<?php
class Horario{

    //Días
    const lunes = "lunes";
    const martes = "martes";
    const miercoles = "miercoles";
    const jueves = "jueves";
    const viernes = "viernes";
          

    private $dias;

    public function __construct(){
        $this->dias = array();
        $this->dias[self::lunes] = array();
        $this->dias[self::martes] = array();
        $this->dias[self::miercoles] = array();
        $this->dias[self::jueves] = array();
        $this->dias[self::viernes] = array();
    }

    public function addRun($dia, $inicio, $fin, $runner, $juego, $descripcion){
        $run = array("inicio"       => $inicio,
                     "fin"          => $fin,
                     "runner"       => $runner,
                     "juego"        => $juego,
                     "description"  => $descripcion);

        array_push($this->dias[$dia], $run);
    }

    public function addDescanso($dia, $inicio, $fin){
        $run = array("inicio"       => $inicio,
                     "fin"          => $fin,
                     "runner"       => "",
                     "juego"        => "",
                     "description"  => "");
        array_push($this->dias[$dia], $run);
    }

    public function print(){
        $i = 0;
        $c_dia= 0;
        foreach ($this->dias as $dia) 
        {
            echo '<div class="col-lg text-center">';
            $this->printDia($c_dia);
           
            foreach ($dia as $run) {
                echo '<div class="text-center run-entry container py-3 my-1 <?= '.$this->getColor($i++).'">';
                echo $run['inicio'] .'<br/>-<br/>'. $run['fin'] .'<br/><br/>';
                echo $run['juego']; 

                if($run['juego'] != ""){
                    echo "<hr>";
                    echo $run['runner'] .'<br/>';

                    echo "<hr>";
                    echo $run['description'].'<br/>';
                }

                echo '</div>';
            }
        echo '</div>';
        $i+=2;
        $c_dia++;
        }
    }

    private function printDia($dia){
        echo '<div class="mt-5 mb-3">';
        switch ($dia) {
            case 0: echo "Lunes 25"; break;
            case 1: echo "Martes 26"; break;
            case 2: echo "Miér. 27"; break;
            case 3: echo "Jueves 28"; break;
            case 4: echo "Viernes 1"; break;
            
            default: break;
        }
        echo "</div>";
    }

    private function getColor($i){
        switch ($i%5) {
            case 0: return "run-azul";
            case 1: return "run-rojo";
            case 2: return "run-verde";
            case 3: return "run-amarillo";
            case 4: return "run-blanco";
            
            default: return "";
        }
    }
}
