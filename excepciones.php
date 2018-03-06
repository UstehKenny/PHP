<?php //Excepciones: capsular errores 

function inverso($x){
	if(!$x){
		throw new Exception("Ahorita no joven");
	} 
	return 1/$x;
} 
echo inverso(4);
echo inverso(8);
echo inverso(3);
echo inverso(0);
echo inverso(3);

try{
	echo inverso(4);
	echo inverso(8);
	echo inverso(3);
	echo inverso(0);
	echo inverso(a);
}catch (Exception $excepcion){
	echo "Sorry, pero ",$excepcion->getMessage();
}finally{}

?>