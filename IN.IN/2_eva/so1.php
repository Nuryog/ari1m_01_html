

<h1> Potencias del 2 </h2>
<?php
    
    $tabla=[];
    
    for($i=1; $i<=20; $i++) {
        $potencia = 2**$i; 
        $tabla[ ]= $potencia;
	}
?>

<table border="1" width="20%">
        <caption>Potencias del 2</caption>
<?php
    foreach ($tabla as $i=>$dato) {
        echo "<tr><td> 2<sup>". ($i+1) ."</sup>: ". $dato . "</td></tr>";
    }
?>
    </table>

   