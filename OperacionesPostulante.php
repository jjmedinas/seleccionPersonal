<?php

                    
   require ('postulante.php');
                  



                              
class OperacionesPostulante{

           var $contadorLineas =0; 
           var $contadorPostulantes=0;
           var $valoresReferencia = array();
           var $campos = array();
           var $arregloAux= array();
           var $arregloPostulantes = array();
           var $linea;
           var $postulante;
           var $postulanteSeleccionado;
           var $arregloPostulanteSeleccionado;
           var $nombrePostulanteSeleccionado;


    function subirArchivo(){
            
       
      $updirArchivo="/home/a2082481/public_html/seleccion-personal/uploads/";
      $uploadfileArchivo = $updirArchivo.basename("datos.txt");     
      move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadfileArchivo);

    }

    function leerArchivo(){
        $contPos=0;
        $contLin=0;

            $archivo = fopen("/home/a2082481/public_html/seleccion-personal/uploads/datos.txt",r);  //Se abre en archivo en modo de solo lectura
                 
                      if (!$archivo) {echo '<font color:Red>ERROR: No ha sido posible abrir el archivo. Revisa que tenga el formato y la estructura solicitada.'; exit;}
                
                while(!feof($archivo)){        // se recorre el archivo hasta que no tenga  mas datos 
                         $this->linea = fgets($archivo)."<br/>"; // Se optiene cada linea del txt

                           if ($this->contadorLineas==0) { //Si contadorLineas = 0 entonces estamos en la primera linea 
                               $this->campos = explode(";", $this->linea); // Dividimos la primera linea con el caracter (;) y nos queda el vector de campos

                           }

                            if ($this->contadorLineas==1) { //Si contadorLineas = 1 entonces estamos en la segunda linea 
                               $this->valoresReferencia = explode(";", $this->linea); // Dividimos la primera linea con el caracter (;) y nos queda el vector de campos
                               
                           }

                            if ($this->contadorLineas>1) {
                               $arregloAux = explode("-", $this->linea); // Dividimos la primera linea con el caracter (;) y nos queda el vector de campos
                               $nombre = $arregloAux[0];
                               $atributos = explode(";",$arregloAux[1]);
                               $this->postulante = new Postulante();
                               $this->postulante->construir($nombre, $atributos); // por medio del constructor de postulante le envio el nombre y los valores de los campos                            
                              
                               $this->arregloPostulantes[$contPos]=$this->postulante; // se agrega el postulante al arreglo de postulantes
                              



                             
                               $contPos++; 
                           }
                    
                    
                    $this->contadorLineas++;
                    $contLin++;
                 
                }
                fclose($archivo);

 

 
  //       var_dump($this->arregloPostulantes);
        $sas=$this->arregloPostulantes[2];
        



    }

                //una vez ejecutado el while, se tiene un arreglo con el nombre de los campos, 
                // uno con los valores de referencia, y uno con todos los datos de los postulantes


     function calcularPostulante(){
        $acumuladorAtributos=0.0;
        $contPos=0;
                foreach ($this->arregloPostulantes as $postulanteAux) { // recorremos todos los valores del arrglo de postulantes
                    $acumuladorAtributos=0; //Creamos un acumulador de atributos quien guardará el resultado de las operacions
                    $contadorAtributos=0;  //Creamos un contador de atributos que servirá para relacionar los indices de los atributos
                    $atributosPostulante=$postulanteAux->getAtributos(); // obtenemos el array de atributos de cada postulante
                                      
                            for ($i=0;$i<count($this->valoresReferencia);$i++) {
                            
                            $resta= $atributosPostulante[$i] - ($this->valoresReferencia[$i]); // restamos el valor de cada atributo del postulante por el respectibo valor de referencia  
                            
                            $acumuladorAtributos=$acumuladorAtributos+abs($resta); //acumulamos el resultado de la resta
                            
                                        
                            }
                      
                            $acumuladorAtributos=number_format($acumuladorAtributos/(count($this->valoresReferencia)),2);  //dividimos el acumulador en la cantidad de valores de referenncia                           
                            $postulanteAux->setResultadoFinal($acumuladorAtributos); //Agregamos el resultado final a la propiedad resultado final del objeto postulante
                            $this->arregloPostulantes[$contPos]=$postulanteAux;  //agregamos el objeto postulante a el arreglo de postulantes
                           
                           
                            $contPos++;

                }



        $comparador=1;
        $indicePostulante=0;

            for ($i=0;$i<($this->contadorLineas-2);$i++) {  // se recorre el arreglo de postulantes
                $postulante=$this->arregloPostulantes[$i];    // se obtiene cada postulante
                    if ($postulante->resultadoFinal<$comparador) { //se comparan los valores finales de todos los postulantes
                        $comparador=$postulante->resultadoFinal;   //Se optione el indice del postulante con el valo final menor
                        $indicePostulante=$i;
                    }      
            }
     $this->postulanteSeleccionado=$this->arregloPostulantes[$indicePostulante];  // se saca el postulante con el menor valor final  del arreglo de postulantes
     $this->arregloPostulanteSeleccionado=$this->postulanteSeleccionado->atributos;
     $this->nombrePostulanteSeleccionado=$this->postulanteSeleccionado->nombre;
   
    }

    function imprimirResultado(){
        
        header("Location: mostrarResultado.php?nombre=".$this->postulanteSeleccionado->nombre."&resultado=".$this->postulanteSeleccionado->resultadoFinal); 
     

    }

    function obtenerDatos(){                                //Funcion que se utilizará para opetener los datos del postulante mas apto y ayudar a graficar el resultado
        $this->leerArchivo();
        $this->calcularPostulante();
       
        
        
   

    }
    

}




         if (isset($_FILES['archivo']['name'])){
                        $operacionesPostulante= new OperacionesPostulante(); //se crea objeto operaciones postulante y se hacen las operaciones necesarias
                        $operacionesPostulante->subirArchivo();
                        $operacionesPostulante->leerArchivo();
                        $operacionesPostulante->calcularPostulante();
                        $operacionesPostulante->imprimirResultado();




                     }



 ?>