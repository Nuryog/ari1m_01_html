<!DOCTYPE html> 
	<html lang="es">
	<head>
	<title> HTML Nury 1ARI </title>
	</head>	
		<body style="
					padding-left:100px;
					">
				<h1 style="
							color:#F5A9E1;
							"> 
							Problemas matemáticos InIn 
				</h1>
				
				
				<h2 style="
							color:#F7819F;
							text-decoration: underline;
							">
				Ejercicio 1:
				</h2>
				
				Los bricks de leche miden 166 mm, 95 mm y 65 mm ¿cuál es el volumen en cm3?
				Introduzca los valores en milímetros:
	<form style="
				padding-top:10px;
				padding-bottom:50px;
				padding-left: 100px;
				">
	
		<input id="alto" name="alto" placeholder="Alto" value="1" onkeyup="calcular()"/>
		<input id="ancho" name="ancho" placeholder="Ancho" value="1" onkeyup="calcular()"/> 
		<input id="fondo" name="fondo" placeholder="Fondo" value="1" onkeyup="calcular()"/> 
			<div style="
						height:1em;">
			</div>
			<button onclick="calcular()"> Calcular </button>
	</form>
	
	Resultado:
	<div id="volum" style="
				display: inline-block;
					">
		Resultado
		</div>
		<script>
		function calcular(){
			alto=document.getElementById('alto').value;
			ancho=document.getElementById('ancho').value;
			fondo=document.getElementById('fondo').value;
			vmm=alto*ancho*fondo;
			vcm= vmm/1000;
			document.getElementById('volum').		
			innerHTML=vcm+ ' cm3';
			}
			calcular();
		</script>
		<?php
	
	
			$alto=$_GET['alto'];
			$ancho=$_GET['ancho'];
			$fondo=$_GET['fondo'];
			echo ' Volumen en cm3: '.(($alto*$ancho*$fondo)/1000);
		
		
		?>
		<h2 style="
							color:#F7819F;
							text-decoration: underline;
							">
				Ejercicio 2:
				</h2>
				Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. 
				Si la profundidad de la fuente es de 0.75 m ¿cuántos litros caben?
	<form style="
				padding-top:10px;
				padding-bottom:50px;
				padding-left: 100px;
				">
	
		<input id="D" name="D" placeholder="Diámetro" value="1" onkeyup="calcular2()"/>
		<input id="P" name="P" placeholder="Profundidad" value="1" onkeyup="calcular2()"/> 
			<div style="
						height:1em;">
			</div>
			<button onclick="calcular2()"> Calcular </button>
	</form>
			Resultado:
	<div id="volum2" style="
				display: inline-block;
					">
		Resultado
		</div>
		<?php
				$D=$_GET['D'];
				$P=$_GET['P'];
				echo 'Litros: '.(3.14*($D/2)*($D/2)*$P);
	
			
		?>
		<h2 style="
							color:#F7819F;
							text-decoration: underline;
							">
				Ejercicio 3:
				</h2>
				Entre unos amigos compran un regalo de cumpleaños teniendo que pagar 12,40€ cada uno. 
				Se incorporan cuatro amigos más y entonces ahora aportan 9,30€ cada uno. 
				Calcula el valor del regalo y cuántos amigos eran al principio.
	<form style="
				padding-top:10px;
				padding-bottom:50px;
				padding-left: 100px;
				">
	
		<input id="D" name="D" placeholder="Diámetro" value="1" onkeyup="calcular2()"/>
		<input id="P" name="P" placeholder="Profundidad" value="1" onkeyup="calcular2()"/> 
			<div style="
						height:1em;">
			</div>
			<button onclick="calcular2()"> Calcular </button>
	</form>
			Resultado:
	<div id="volum2" style="
				display: inline-block;
					">
		Resultado
		</div>
		
		
			<?php
				$D=$_GET['D'];
				$P=$_GET['P'];
				echo 'Litros: '.(3.14*($D/2)*($D/2)*$P);
	
			
		?>
		
		
		<h2 style="
							color:#F7819F;
							text-decoration: underline;
							">
				Ejercicio 4:
				</h2>
				Se dispone de un cartón cuadrado de 50 cm de lado para construir una caja sin tapa a partir de ese cartón. 
				Para ello, se corta un cuadrado de x cm de lado en cada una de las esquinas. 
				Halla el valor de x para que el volumen de la caja sea máximo y calcula dicho volumen:
	<form style="
				padding-top:10px;
				padding-bottom:50px;
				padding-left: 100px;
				">
	
		<input id="Lado" name="Lado" placeholder="Lado" value="1" onkeyup="calcular4()"/>
			<div style="
						height:1em;">
			</div>
			<button onclick="calcular4()"> Calcular </button>
	</form>
			Resultado:
	<div id="volum4" style="
				display: inline-block;
					">
		Resultado
		</div>
		
		
			<?php
				$D=$_GET['D'];
				$P=$_GET['P'];
				echo 'Litros: '.(3.14*($D/2)*($D/2)*$P);
	
			
		?>
		<script>
		function calcular(){
			alto=document.getElementById('alto').value;
			ancho=document.getElementById('ancho').value;
			fondo=document.getElementById('fondo').value;
			vmm=alto*ancho*fondo;
			vcm= vmm/1000;
			document.getElementById('volum').		
			innerHTML=vcm+ ' cm3';
			}
			calcular();
            
		function calcular2(){
			D=document.getElementById('D').value;
			P=document.getElementById('P').value;
			v2=3.14*(D/2)*(D/2)*P;
			document.getElementById('volum2').
			innerHTML= v2+ 'litros';
			}		
			calcular2();
			
			
			
		function calcular4(){
			Lado=document.getElementById('Lado').value;
			raz1=Math.pow((8*$Lado),2);
			raz2=48*(Math.pow($Lado,2));
			razt=raz1-raz2;
			rai=Math.sqrt(razt);
			v4=((8*$Lado)+rai)/24;
			document.getElementById('volum4').
			innerHTML=v4+ 'cm3';
			}
			calcular4();
		</script>
		<div style="
						height:1em;">
			</div>
			
		</body>
			</html>