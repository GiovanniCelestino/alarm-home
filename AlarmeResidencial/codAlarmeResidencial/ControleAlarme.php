<?php

require_once 'Controlador.php';

class ControleAlarme implements Controlador{
    //Atributos
    private $alarmeLigado;
    private $statusBateria;
    private $alarmeTocando;
    private $portas;
    

    //Metodos Especiais
    function __construct() {
        $this->alarmeLigado = false;
        $this->statusBateria = true;
    }
    
    //Getters e Setter (Metodos)
    private function getAlarmeLigado(){
        return $this->alarmeLigado;
    }    
    private function setAlarmeLigado($ligado){
        $this->alarmeLigado = $ligado; 
    }
    
    private function getStatusBateria(){
        return $this->statusBateria; 
    }
    private function setStatusBateria($bateria){
        $this->statusBateria = $bateria;
    }
    private function getAlarmeTocando(){
        return $this->alarmeTocando;
    }
    private function setAlarmeTocando($tocando){
        $this->alarmeTocando = $tocando;
    }
    
    private function getPortas(){
        return $this->portas;
    }
    private function setPortas($porta){
        $this->portas = $porta;
    }
            

    //Metodos
    public function ligar(){
        if ($this->getAlarmeLigado()){
            echo "O alarme já está ligado!";
        }
        if ($this->getStatusBateria()== false){
            echo "Controle sem bateria ou descarregado";
        }
        if ($this->getAlarmeLigado()==false && $this->getStatusBateria()==true && $this->getAlarmeTocando()==false){
            $this->setAlarmeLigado(true);
            echo "Alarme Ativado!!";
        }
        
        }
    public function desligar(){
        if ($this->getStatusBateria()== false){
            echo "Controle sem bateria ou descarregado";
        }
        elseif ($this->getAlarmeLigado() && $this->getStatusBateria()==true || $this->getAlarmeTocando()==true){
            $this->setAlarmeLigado(false);
            echo "Alarme Desativado!!";
        }
        else{
            echo "ERRO! Entrar em contato com a fabricante!";
        }
    }
    public function tirarBateria(){
        
        $this->setStatusBateria(false);
        echo "Controle sem bateria!";
        
    }
    
    public function portaAberta(){
        if($this->getPortas() == true && $this->getAlarmeLigado()== true){
            $this->setAlarmeTocando(true);
        }
    }
    
}


