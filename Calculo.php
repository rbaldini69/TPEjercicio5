<?php
	
	$listaNum=array();
	
	if (isset($_GET["comenzar"])) 
		{
			$Ingresado1=$_GET['Ingresado'];
			$secreto=$Ingresado1;
			$mensaje="jugando!";
			$archivo=fopen("ticket.txt", "w");
			$contador=0;
			$diferencia=0;
			//fwrite($archivo, "");
			fwrite($archivo, $secreto."|".$contador."|".$diferencia);
			fclose($archivo);
			
		}
	if (isset($_GET["verificar"])) 
		{
			$Ingresado2=$_GET['Ingresado']; 
			$archivo=fopen("ticket.txt", "r");

			while (!feof($archivo)) 
				{
					$renglon=fgets($archivo);
					$jugada=explode("|", $renglon);
					$listaNum[]=$jugada;
				}
				fclose($archivo);
			foreach ($listaNum as $jugadareg) 
				{
					if ($jugadareg[0]==$Ingresado2) 
					{

						$mensaje="Ud. es el ganador. El numero era".$Ingresado2;
						$archivo=fopen("ticket.txt", "w+");
						fwrite($archivo,"");
						fclose($archivo);
					}
					else
					{
						$NuevaJugada=$jugadareg[1]+1;
						$diferencia=$jugadareg[0]-$Ingresado2;
						$archivo=fopen("ticket.txt", "w+");
						
						fwrite($archivo, $jugadareg[0]."|".$NuevaJugada."|".$Ingresado2);
						//fwrite($archivo, $jugada[0]."|".$jugada[1]+1."|".$jugada[0]-$Ingresado2."\n");
						//$intentos=$jugadareg[1];
							if ($diferencia>0) 
							{
								$mensaje="quedaste cortina!";
							}
							else
							{
								$mensaje="te pasaste!";
							}
						fclose($archivo);	
					}
				}
		}

			
		
	include "Index.php";
	
		

	

	
		//include "index.php";
		
/*<h3>
					1.	Adivina el nÃºmero (v 1.0):
					Al comenzar el juego generamos un nÃºmero secreto del 1 al 100, en la pantalla del juego dispondremos de un cuadro de texto para ingresar un nÃºmero y un botÃ³n â€œVerificarâ€, si el nÃºmero ingresado es el mismo que el nÃºmero secreto se darÃ¡ por terminado el juego con un mensaje similar a este: 
					<br>â€œUsted es un ganador!!! y en solo X intentosâ€.
					de no ser igual se debe informar si 
					â€œfaltaâ€¦â€  para llegar al nÃºmero secreto  o si 
					â€œse pasÃ³â€¦â€  del nÃºmero secreto.
*/
?>
