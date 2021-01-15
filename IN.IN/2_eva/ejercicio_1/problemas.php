<!DOCTYPE html> 
	<html lang="es">
	<head>
	<title> HTML Nury 1ARI </title>
	</head>	
		<body style="
					padding-left:100px;
					">
				<h1 style="
							font-size:3em;
							color:#F7819F;
							text-decoration:underline;
							"> 
							Problemas matemáticos InIn 
				</h1>
				
					<div style="
							padding:10px;
							display:inline-block;
							border-style: inset;
							width:696.46px;
							">	
				<h2 style=" 
							font-size:2em;
							color:#F7819F;
							text-decoration: underline;
							">
					Ejercicio 1:
				</h2>
					Los bricks de leche miden 166 mm, 95 mm y 65 mm ¿cuál es el volumen en cm³?
					<div style="
							height:0em;">
					</div>
					Introduzca los valores en milímetros:
				<form style="
							padding-top:10px;
							padding-bottom:50px;
							padding-left: 100px;
							">
					<input id="alto" name="alto" placeholder="Alto" value="166" onkeyup="calcular()"/>
					<input id="ancho" name="ancho" placeholder="Ancho" value="95" onkeyup="calcular()"/> 
					<input id="fondo" name="fondo" placeholder="Fondo" value="65" onkeyup="calcular()"/> 
						<div style="
									height:1em;">
						</div>
					<button onclick="calcular()"> Calcular </button>
				</form>
					<img src="brick.png" alt="brick">
					<div style="
									height:1em;">
						</div>
						<span style="
									font-weight:bold;
									">
							Resultado:
						</span>
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
						innerHTML=vcm+ ' cm³.';
						}
						calcular();
				</script>
					<div style="
								height:1em;">
						</div>
				<?php
					if (isset (
						$_GET['alto'])) {$alto=$_GET['alto'];
						$ancho=$_GET['ancho'];
						$fondo=$_GET['fondo'];
					echo ' Resultado: '.(($alto*$ancho*$fondo)/1000).' cm³.';
					}
				?>
					</div>
					<div style="
									height:2em;">
						</div>
					<div style="
								width:696.46px;
								padding:10px;
								display:inline-block;
								border-style: inset;
								">
			<h2 style="
						color:#F7819F;
						text-decoration: underline;
						">
				Ejercicio 2:
			</h2>
				Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. 
					<div style="
							height:0em;">
					</div>
				Si la profundidad de la fuente es de 0.75 m ¿cuántos litros caben?
				<form style="
							padding-top:10px;
							padding-bottom:50px;
							padding-left: 100px;
							">
					<input id="D" name="D" placeholder="Diámetro" value="4" onkeyup="calcular2()"/>
					<input id="P" name="P" placeholder="Profundidad" value="0.75" onkeyup="calcular2()"/> 
						<div style="
									height:1em;">
						</div>
					<button onclick="calcular2()"> Calcular </button>
				</form>
				<img src="fuente.png" alt="fuente">
					<div style="
									height:1em;">
						</div>
					<span style="
								font-weight:bold;
								">
						Resultado:
					</span>
					<div id="volum2" style="
								display: inline-block;
								">
						Resultado
					</div>
				<script>
				function calcular2(){
					D=document.getElementById('D').value;
					P=document.getElementById('P').value;
					v2=Math.PI*(D/2)*(D/2)*P;
					v2=Math.round(v2*100)/100;
					document.getElementById('volum2').
					innerHTML= +v2+ ' litros.';
					}		
					calcular2();
				</script>
					<div style="
									height:1em;">
						</div>
				<?php
					if(isset (
						$_GET['D'])) {$D=$_GET['D'];
						$P=$_GET['P']; 
					echo 'Resultado: '.(3.14*($D/2)*($D/2)*$P).' litros.';
						}
					
				?>
				</div>
				<div style="
								height:2em;">
					</div>
				<div style="
							padding:10px;
							display:inline-block;
							width:696.46px;
							border-style: inset;
							">
			<h2 style="
						color:#F7819F;
						text-decoration: underline;
						">
				Ejercicio 3:
			</h2>
						Entre unos amigos compran un regalo de cumpleaños teniendo que pagar 12,40€ cada uno. 
					<div style="
							height:0em;">
					</div>
						Se incorporan cuatro amigos más y entonces ahora aportan 9,30€ cada uno. 
					<div style="
							height:0em;">
					</div>
						Calcula el valor del regalo y cuántos amigos eran al principio.
				<form style="
					padding-top:10px;
					padding-bottom:50px;
					padding-left: 100px;
					">
					<input id="Pago1" name="Pago1" placeholder="Pago1" value="12.40" onkeyup="calcular3()"/> 
					<input id="Pago2" name="Pago2" placeholder="Pago2" value="9.30" onkeyup="calcular3()"/> 
					<input id="increm" name="increm" placeholder="Amigos añadidos" value="4" onkeyup="calcular3()"/> 
						<div style="
									height:1em;
									">
						</div>
					<button onclick="calcular3()"> Calcular </button>
				</form>
				<img src="regalo.jpg" alt="regalo" style="
															width:400px;
															">
															<div style="
									height:0em;
									">
						</div>
					<span style="
								font-weight:bold;
								">
						Resultado:
					</span>
					<div id="am+reg" style="
								display: inline-block;
									">
					Resultado
					</div>
					<script>
					function calcular3() {
						Pago1=document.getElementById('Pago1').value;
						Pago2=document.getElementById('Pago2').value;
						increm=document.getElementById('increm').value;
						ap=Math.round((increm*Pago2)/(Pago1-Pago2));
						reg=ap*Pago1;
						document.getElementById('am+reg').
						innerHTML= 'Eran '+ap+' amigos al principio, y el precio del regalo es '+reg+ '€.';
					}
					calcular3()
					</script>
						<div style="
									height:1em;">
						</div>
					<?php
					if(isset (
						$_GET['Pago1'])) {$Pago1=$_GET['Pago1'];
						$Pago2=$_GET['Pago2']; 
						$increm=$_GET['increm'];
						$ap=round(($increm*$Pago2)/($Pago1-$Pago2));
						$reg=$ap*$Pago1;
						echo 'Resultado: '.'Eran '.$ap.' amigos al principio, y el precio del regalo es '.$reg.'€.';
						}
					?>
				</div>
						<div style="
										height:2em;">
						</div>
						<div style="
									padding:10px;
									display:inline-block;
									width:696.46px;
									border-style: inset;
									">
			<h2 style="
						color:#F7819F;
						text-decoration: underline;
						">
				Ejercicio 4:
			</h2>
				Se dispone de un cartón cuadrado de 50 cm de lado para construir una caja sin tapa a partir de ese cartón. 
						<div style="
								height:0em;">
						</div>
						Para ello, se corta un cuadrado de x cm de lado en cada una de las esquinas. 
						<div style="
								height:0em;">
						</div>
						Halla el valor de x para que el volumen de la caja sea máximo y calcula dicho volumen:
				<form style="
							padding-top:10px;
							padding-bottom:50px;
							padding-left: 100px;
							">
					<input id="Lado" name="Lado" placeholder="Lado" value="50" onkeyup="calcular4()"/>
						<div style="
									height:1em;">
						</div>
					<button onclick="calcular4()"> Calcular </button>
				</form>
					<img src="caja.png" alt="caja">
					<div style="
									height:1em;">
						</div>
					<span style="
								font-weight:bold;
								">
						Resultado:
					</span>
						<div id="volum4" style="
												display: inline-block;
												">
							Resultado
						</div>
					<script>
					function calcular4(){
						Lado=document.getElementById('Lado').value;
						x4=12/(24*Lado);
						v4=x4*(Math.pow((Lado-(2*x4)),2));
						v4=Math.round(v4*100)/100;
						document.getElementById('volum4').
						innerHTML='El valor de X será '+x4+' cm, y el volumen máximo será '+v4+' cm³.';
						}
						calcular4();
					</script>
						<div style="
										height:1em;">
						</div>
					<?php
								if(isset (
						$_GET['Lado'])) {$Lado=$_GET['Lado'];
						$x4=12/(24*$Lado);
						$v4=$x4*pow(($Lado-(2*$x4)),2);
						$v4=round($v4,2);
						echo 'Resultado: El valor de X será '.$x4.' cm, y el volumen máximo será '.$v4.' cm³.';
						}
					?>
					</div>
						<div style="
										height:1em;">
							</div>
		</body>
	</html>