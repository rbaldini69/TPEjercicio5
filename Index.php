

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<!--link rel="stylesheet" type="text/css" href="animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<!--<script type="text/javascript" src="jsAdivinaElNumero1.js"></script>
        <!-Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form action="calculo.php" method="GET" id="FormIngreso">

				<input type="text"  placeholder="Ingrese número" name="Ingresado" >
				
				<br>
				<input type="text" value="<?php echo $intentos;?>" readonly>
			
			
		</div>
			<div class="CajaUno animated bounceInLeft">
			
				<input style="height:5em;" class="MiBotonUTN" type="submit" name="verificar" value="verificar" ></input>	

				<input style="height:5em;" class="MiBotonUTN" type="submit" name="comenzar" value="comenzar" ></input>

		
		<!--<button style="height:5em;"  class="MiBotonUTN"  onclick="verificar()" >Verificar</button>-->
			
		<!--	<sub class="MiBotonUTN" onclick="comenzar()" >Comenzar</button>-->
			<?php 
			echo $mensaje;
			



			?>
		

				</div>
		</form>
		
		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>
	</body>
</html>
