<?php

class Postulante{

var $nombre="";
var $atributos=array();
var $resultadoFinal;

function construir($nombreAux, $atributosAux){
	$this->nombre=$nombreAux;
	$this->atributos= $atributosAux;
}

function setResultadoFinal($resFinal){
	$this->resultadoFinal=$resFinal;
}

function getResultadoFinal(){
	return $this->resultadoFinal;
}
function getAtributos(){
	return ($this->atributos);
}
function getNombre(){
	return $this->nombre;
}




}
?>