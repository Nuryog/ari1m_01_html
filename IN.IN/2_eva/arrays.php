<!DOCTYPE html> 
	<html lang="es">
	<head>
		<title> HTML Nury 1ARI </title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maxmum-scale=2">
	</head>
	<body style="
				background-repeat: no-repeat;
				background-size: cover;
				background-image: url('rosa3.jpg');
				text-align:center;
				">
		<div>
			<h1 style="
						color:black;
						font-size: 3em;
						text-decoration:underline;
						"> 
							
							ARRAYSITOS
			</h1>
		</div>
		<div style="border-style: solid;
					width:900px;
					padding-left: 50px;
					background-color: white;
					display:inline-block;
					border-color: HotPink;
					text-align:left;
					">
	<h2>Crea un array con el nombre de tus compañeros y selecciona uno de ellos al azar:</h2>
	
	
	<div style="
										height:1.5em;">
						</div>
	<div id="r" style="
						text-align:left;
						">
	</div>
	<div style="
										height:2em;">
						</div>
	<div style="
									text-align:left;
									">
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
			</div>
			<div style="
										height:2em;">
						</div>
			</div>
<div style="
										height:2em;">
						</div>
			<div style="border-style: solid;
					width:900px;
					padding-left: 50px;
					background-color: white;
					display:inline-block;
					border-color: HotPink;
					text-align:left;
						">
			
			<h2> Almacena en un array la tabla de las potencias de 2 y muestra el contenido del array:</h2>
	<div style="
										height:2em;">
						</div>
						<div style="
						display:inline-block;
						">
	<div id="pot" style="
						text-align:left;
						display:inline-block;
						">
						Hi
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

			<table style="
							border-style: solid;
							width:200px;
							">
					<caption>Potencias del 2 PHP:</caption>
			<?php
				foreach ($tabla as $i=>$dato) {
					echo "<tr><td> 2<sup>". ($i+1) ."</sup>:        ". $dato . "</td></tr>";
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
			<div style="
										height:2em;">
						</div>
			</div>
		</div>
		<div style="
										height:2em;">
						</div>
			<div style="border-style: solid;
					width:900px;
					padding-left: 50px;
					background-color: white;
					display:inline-block;
					border-color: HotPink;
					text-align:left;
					padding-bottom:25px;
						">
			
			<h2> Muestra el listado ordenado de meses que contengan la letra R: </h2>
			
	<div style="
										height:2em;">
						</div>
						<div style="
						display:inline-block;
						">
	<div id="mes" style="
						text-align:left;
						display:inline-block;
						">
						eij
	</div>
	<div style="
										height:2em;">
						</div>
			<?php
			$meses = [
			'Enero',
			'Febrero',
			'Marzo',
			'Abril',
			'Mayo',
			'Junio',
			'Julio',
			'Aosto',
			'Septiembre',
			'Octubre',
			'Noviembre',
			'Diciembre',
			];
			echo "Meses con r PHP: <br/>";
			echo "<br/>";
				foreach ($meses as $mes){
					if ( strstr($mes,"r"))
					echo '<div>'.$mes."</div>";
				}
				
			?>
			<script>
				meses = [
			'Enero',
			'Febrero',
			'Marzo',
			'Abril',
			'Mayo',
			'Junio',
			'Julio',
			'Aosto',
			'Septiembre',
			'Octubre',
			'Noviembre',
			'Diciembre',
			];
			txt="";
			for (i in meses){
				if (meses[i].indexOf("r")>0){
					console.log(meses[i]);
					txt+= meses[i]+"<br/>";
				}
			}
			document.getElementById("mes").
			innerHTML=" Meses con r JS:  <br/><br/>"+ txt;	
			</script>
			</div>
			</div>
	</body>
 </html>