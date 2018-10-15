<?php

$dato = $_POST['caja_decimal']; 
	echo "Numero decimal $dato <br>";
	
	echo"Numero binario ". decbin($dato)."<br>";	 
		 

		 function prim($cadena,$posicion){
		return $cadena{$posicion};
	}



	
function complemento($d){
	$bin=decbin($d);
	$cara;
	$cad="";
for ($i = 0; $i < strlen($bin); $i++) {
	$cara=prim($bin,$i);
	if ($cara==1) {

		$cad=$cad."0";
		//$cara=0;
		//echo $cara;
		
	}else{
			$cad=$cad."1";
			//$cara=1;
		//echo $cara;
		
		
	}

	}///for

	$c;
	/*
	for ($i = strlen($bin); $i >0; $i--) {
		$c=prim($cad,$i);

		if ($c==1&& $i=strlen($bin)) {

		$cad=$cad."0";
		$cara=0;
		//echo $cara;
		
	}else{
			$cad=$cad."1";
			$cara=1;
		//echo $cara;
		
		
	}

	}
*/
//echo " <br> Total de consonantes ".$cont;
echo  "Complemento A1: ".$cad;


}//funcion consonantes


complemento($dato);
?>