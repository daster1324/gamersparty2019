<?php
class Horario{
    private $runs;

    public function __construct(){
        $this->runs = array();
    }

    public function addRun($duracion, $runner, $juego, $descripcion){
        $run = array("duracion"     => $duracion,
                     "runner"       => $runner,
                     "juego"        => $juego,
                     "description"  => $descripcion);

        array_push($this->runs, $run);
    }

    public function addDescanso($duracion){
        $run = array("duracion"     => $duracion,
                     "runner"       => "",
                     "juego"        => "descanso",
                     "description"  => "");
        array_push($this->runs, $run);
    }

    public function print(){

    }
}
