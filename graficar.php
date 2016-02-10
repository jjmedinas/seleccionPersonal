<?php
   require ('/home/a2082481/public_html/seleccion-personal/OperacionesPostulante.php');
   require_once ('/home/a2082481/public_html/seleccion-personal/src/jpgraph.php');
   require_once ('/home/a2082481/public_html/seleccion-personal/src/jpgraph_line.php');
   
  
  $operacionesPostulante= new OperacionesPostulante();
  $operacionesPostulante->obtenerDatos();

  $datosPostulante =formatearArreglo($operacionesPostulante->arregloPostulanteSeleccionado); //Se optionen los datos del postulante seleccionado
  $valoresReferencia=formatearArreglo($operacionesPostulante->valoresReferencia);             //Se optionen los valores de referencia
  $campos = $operacionesPostulante->campos;                                 //Se optinen las atributos a evaluar por la empresa (nombre de los valores de referencia)
  $nombrePostulante= $operacionesPostulante->nombrePostulanteSeleccionado;                       
  


  //echo"<br/>Losssssssssss datos postulante son: ".var_dump($datosPostulante)."<br/>";
  //echo"losssss valore de referencia son: ".var_dump($valoresReferencia)." <br/>";




 	$graph = new Graph(820, 350, "auto");    
	$graph->SetScale( "textlin");

	$graph->img->SetMargin(40, 20, 20, 40);
	$graph->img->SetAntiAliasing();
	$graph->title->Set("Comparacion con Valores de Referencia");
	$graph->yaxis->title->Set("Valores");
	$graph->xaxis->SetTickLabels($campos);
	 
	$lineplot1 = new LinePlot($datosPostulante);
	$lineplot1->SetColor("blue");
	$lineplot1->setLegend($nombrePostulante);
	$lineplot2 = new LinePlot($valoresReferencia);
	$lineplot2->SetColor("red");
	$lineplot2->setLegend("Valores de Referencia");
	 
	$graph->Add($lineplot1);
	$graph->Add($lineplot2);
	$graph->Stroke();


function formatearArreglo($arreglo){

	for($i=0;$i<=count($arreglo);$i++){
		$arregloSalida[$i]=(float)$arreglo[$i];

	}
	return $arregloSalida;


}

?>