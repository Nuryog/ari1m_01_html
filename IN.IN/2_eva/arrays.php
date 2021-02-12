<!DOCTYPE html> 
	<html lang="es">
	<head>
	<title> HTML Nury 1ARI </title>
	</head>
	<body style="
				padding-left:50px;
				">	
	<h1> ARRAYS </h1>
	<div>
	<h2>Crea un array con el nombre de tus compañeros y selecciona uno de ellos al azar:</h2>
	
	</div>
	<div style="
										height:2em;">
						</div>
	<div id="r" style="
						display:inline-block;
						">
	</div>
	<div style="
										height:2em;">
						</div>
			<?php
				$compis = [
					'Andrei',
					'Fabián',
					'Héctor',
					'Gabriel',
					'Agustina',
					'Jesús',
					'Daniel',
					'Ismael',
					'José',
					'Javier',
					'Rodrigo1',
					'Álvaro',
					'Rodrigo2',
					'Alfonso',
					'Darius',
					'Iván',
						];
			echo "Compañeritos en PHP: ";
			echo $compis[rand(0,15)];
			?>
			<script>

				compis = [
					'Andrei',
					'Fabián',
					'Héctor',
					'Gabriel',
					'Agustina',
					'Jesús',
					'Daniel',
					'Ismael',
					'José',
					'Javier',
					'Rodrigo1',
					'Álvaro',
					'Rodrigo2',
					'Alfonso',
					'Darius',
					'Iván',
				];
			c=Math.round(Math.random()*(compis.length-1));
			document.getElementById('r').
			innerHTML= 'Compañeritos en JS: '+compis[c];
			</script>
<div style="
										height:2em;">
						</div>
			<div>
			
			<h2> Almacena en un array la tabla de las potencias de 2 y muestra el contenido del array</h2>
			</div>
	<div style="
										height:2em;">
						</div>
	<div id="pot" style="
						display:inline-block;
						">
						Holi
	</div>
	<div style="
										height:2em;">
						</div>
			<?php
				
				$tabla=[];
				
				for($i=1; $i<=20; $i++) {
					$potencia = 2**$i; 
					$tabla[ ]= $potencia;
				}
			?>

			<table border="1" width="20%">
					<caption>Potencias del 2 PHP</caption>
			<?php
				foreach ($tabla as $i=>$dato) {
					echo "<tr><td> 2<sup>". ($i+1) ."</sup>: ". $dato . "</td></tr>";
				}
			?>
				</table>

			<script>
				tabla=[];
					for(i=1; i<=20; i++) {
						tabla[i]= 2**i;
					}
			
				txt='';
				for(i in tabla)
						txt+=2+'<sup>'+i+'</sup>:  '+tabla[i]+'<br/>';
				document.getElementById('pot').
				innerHTML= 'Potencias del 2 JS:<br/> '+txt;
			</script>
			
			<div>
			
			<h2> Muestra el listado ordenado de meses que contengan la letra R </h2>
			</div>
	<div style="
										height:2em;">
						</div>
	<div id="mes" style="
						display:inline-block;
						">
						eij
	</div>
	<div style="
										height:2em;">
						</div>
			<pre>
			<?php
			$meses = [
			'enero',
			'febrero',
			'marzo',
			'abril',
			'mayo',
			'junio',
			'julio',
			'agosto',
			'septiembre',
			'octubre',
			'noviembre',
			'diciembre',
			];
				echo "Meses con r:<br/>";
				foreach ($meses as $mes){
					if ( strstr($mes,"r"))
					echo '<div>'.$mes."</div>";
				}
				
			?>
			</pre>
			<script>
				meses = [
			'enero',
			'febrero',
			'marzo',
			'abril',
			'mayo',
			'junio',
			'julio',
			'agosto',
			'septiembre',
			'octubre',
			'noviembre',
			'diciembre',
			];
			txt="";
			for (i in meses){
				if (meses[i].indexOf("r")>0){
					console.log(meses[i]);
					txt+= meses[i]+"<br/>";
				}
			}
			document.getElementById("mes").
			innerHTML= txt;	
			</script>
			
	</body>
 </html>