<h1> Ley de Ohm </h1>
<form>
	<input id="v" name="v" placeholder="Voltaje" value="30" onkeyup="calcular()"/>
	<input id="r" name="r" placeholder="Resistencia" value="1" onkeyup="calcular()"/> 
		<button onclick="calcular()"> Calcular </button>
</form>
		<div id="i" style="
				padding:20px;
				background-color:pink;
					">
		Resultado
		</div>
	<script>
	//alert ('hola mundo');
	//console.log('hola otra vez')
	function calcular(){
			v=document.getElementById('v').value;
			r=document.getElementById('r').value;
			i=v/r;
			document.getElementById('i').
			innerHTML=i+ 'Amperios';
			}
	calcular();
	</script>
	
	<?php
	
	
	if(isset($_GET['r'])) {
		$r = $_GET ['r'];
		$v = $_GET ['v'];
		echo 'Intensidad eléctrica: '.($v/$r);
	}
	
	?>
	
	
	
	
	
	<h2>
				Ejercicio 2:
				</h2>
				
				Los bricks de leche miden 166 mm, 95 mm y 65 mm ¿cuál es el volumen en cm3?
				
	<form style="
				padding-bottom:50px;
				">
	
		<input id="v" name="v" placeholder="Voltaje" value="30" onkeyup="calcular()"/>
		<input id="r" name="r" placeholder="Resistencia" value="1" onkeyup="calcular()"/> 
			<button onclick="calcular()"> Calcular </button>
	</form>
	<div id="i" style="
				display: inline-block;
				background-color:pink;
					">
		Resultado
		</div>
		
		<h2>
				Ejercicio 3:
				</h2>
				
				Los bricks de leche miden 166 mm, 95 mm y 65 mm ¿cuál es el volumen en cm3?
				
	<form style="
				padding-bottom:50px;
				">
	
		<input id="v" name="v" placeholder="Voltaje" value="30" onkeyup="calcular()"/>
		<input id="r" name="r" placeholder="Resistencia" value="1" onkeyup="calcular()"/> 
			<button onclick="calcular()"> Calcular </button>
	</form>
	<div id="i" style="
				display: inline-block;
				background-color:pink;
					">
		Resultado
		</div>
		
		<h2>
				Ejercicio 4:
				</h2>
				
				Los bricks de leche miden 166 mm, 95 mm y 65 mm ¿cuál es el volumen en cm3?
				
	<form style="
				padding-bottom:50px;
				">
	
		<input id="v" name="v" placeholder="Voltaje" value="30" onkeyup="calcular()"/>
		<input id="r" name="r" placeholder="Resistencia" value="1" onkeyup="calcular()"/> 
			<button onclick="calcular()"> Calcular </button>
	</form>
	<div id="i" style="
				display: inline-block;
				background-color:pink;
					">
		Resultado
		</div>