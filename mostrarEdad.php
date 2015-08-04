<?php
	$edad=$_POST["edad"];
	if((intval($edad)>18)&(intval($edad)<65)){
		echo "Adulto";
	}
	elseif(intval($edad)<17) {
		echo "Joven";
	}
	elseif (intval($edad)>66) {
		echo "Jubilado"
	}
?>