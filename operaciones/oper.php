<?php

$dato = $_POST['caja_decimal']; 
	echo "operacion $dato <br>";
	
	//echo"Numero binario ". decbin($dato)."<br>";	 
		 

		 function prim($cadena,$posicion){
		return $cadena{$posicion};
	}



	
function operacion($d){
	$cara;
	$num1="";
	$num2="";
	$op="";
	$val=0;
for ($i = 0; $i < strlen($d); $i++) {
	$cara=prim($d,$i);
	if ($cara=='0'&&$val=0||$cara=='1'&&$val=0||$cara=='2'&&$val=0||$cara=='3'&&$val=0||$cara=='4'&&$val=0||$cara=='5'&&$val=0||$cara=='6'&&$val=0|$cara=='7'&&$val=0||$cara=='8'&&$val=0||$cara=='9'&&$val=0) {

		$num1=$num1.$cara;
		//$cara=0;
		echo "valor". $val;
		
	}else if($cara=='+'||$cara=='-'||$cara=='*'||$cara=='/'){
			$op=$op.$cara;
			$val=1;
			
		
		
	}else{
		$num2=$num2.$cara;
	}

	}///for

	
echo  "numero 1: ".$num1."<br>";
echo  "operacion: ".$op."<br>";
echo  "numero 2: ".$num2."<br>";


}//funcion consonantes


operacion($dato);
?>