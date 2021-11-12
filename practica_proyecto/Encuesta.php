<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta.php</title>
</head>
<body style="background-image: url(fotodeplay.jpg)" style="background-position: center">
	<font color="#dadae4">
	

<?php 
	
	$cal = 0;

	$Nombre_a = $_GET['Nombre_a'];
	echo "<br> El nombre del encuestado: " . $Nombre_a;


	$Pregunta_1 = $_GET['Pregunta_1'];
	$resp_1 = "Cuando se creo Sony?";
	if ($Pregunta_1 == $resp_1) {
		echo "<br><br><br> 1.bien echo :D <br><br>";
		$cal++;
	} else {
		echo "<br><br><br> 1.Mal echo no seas naco ;) <br><br>";
	}


	$Pregunta_2 = $_GET['Pregunta_2'];
	if ($Pregunta_2 == "a") {
		echo "<br> 2.Cual es el juego que gano los game awards? <br><br>";
		$cal++;
	} if ($Pregunta_2 == "b") {
		echo "<br> 2.Que hace el dato Date: <br> a. es para the last of us 2  <br> b. es para God of war (respuesta incorrecta)  <br><br>";
	} if ($Pregunta_2 == "c") {
		echo "<br> 2.Que hace el dato Date: <br> a. es para the last of us 2 <br> b. es para God of war (respuesta incorrecta) <br><br>";
	}


	$Pregunta_3 = $_GET["Pregunta_3"];
    $resp2 = "Cual es la consola mas potente de PlayStation?";
     if ( $Pregunta_3 == $resp2) {
    	echo "<br> 3. bien echo :D <br><br>";
    	$cal++;
    }else {
    	echo "<br> 3. Mal echo no seas naco ;) <br><br> ";
    }


    $Pregunta_4 = $_GET["Pregunta_4"];
     $resp3 = "Para ti cual es el mejor juego de PlayStation?";
     if ( $Pregunta_4 == $resp3) {
    	echo "<br> 4. cual es el mejor juego de PlayStation: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    }else {
    	echo "<br> 4. cual es el mejor juego de PlayStation: <br>respuesta incorrecta naco :( <br><br> ";
    }


    $Pregunta_5 = $_GET["Pregunta_5"];
    if ($Pregunta_5 == "Que juego gano los game awards 2018?") {
    	echo "<br> 5. Que juego gano los game awards 2018?: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    } else {
    	echo "<br>  5. Que juego gano los game awards 2018?: <br>respuesta incorrecta no seas naco :( <br><br> ";
    }
    

    $Pregunta_6 = $_GET["Pregunta_6"];
      if ( $Pregunta_6 == "QUE JUEGO DE SONY TIENE MAS TROFEOS?") {
      echo "<br> 6. QUE JUEGO DE SONY TIENE MAS TROFEOS?: <br> a.  The last of us 2  <br> b. God of war  <br> c. horizon zero dawn (respuesta correcta) <br><br> ";
      $cal++;
    } if ($Pregunta_6 == "b") {
      echo "<br> 6. QUE JUEGO DE SONY TIENE MAS TROFEOS?: <br> a.  The last of us 2  <br> b. God of war (respuesta incorrecta) <br> c.horizon zero dawn <br><br> ";
    }if ($Pregunta_6 == "a") {
      echo "<br> 6. QUE JUEGO DE SONY TIENE MAS TROFEOS?: <br> a. The last of us 2 (respuesta incorrecta) <br> b. God of war <br> c. horizon zero dawn  <br><br> ";
    }


    $Pregunta_7 = $_GET["Pregunta_7"];
     if ($Pregunta_7 == "Cuales son las conpetencia de PlayStation?") {
    	echo "<br> 7. Cuales son las conpetencia de PlayStation: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    } else {
    	echo "<br> 7. Cuales son las conpetencia de PlayStation: <br>respuesta incorrecta :( <br><br> ";
    }


     $Pregunta_8 = $_GET["Pregunta_8"];
     if ( $Pregunta_8 == "Sony con que consola se hizo conocida?") {
      echo "<br> 8. Sony con que consola se hizo conocida?: <br> a.  PS3 (respuesta correcta)  <br> b. PS5  <br> c. PS2  <br><br> ";
      $cal++;
    } if ($Pregunta_8 == "b") {
      echo "<br> 8. Sony con que consola se hizo conocida?: <br> a.  PS3  <br> b. PS5 (respuesta incorrecta) <br> c. PS2 <br><br> ";
    }if ($Pregunta_8 == "c") {
      echo "<br> 8. Sony con que consola se hizo conocida?: <br> a. PS3 (respuesta incorrecta) <br> b. PS5 <br> c. PS2  <br><br> ";
    }


    $Pregunta_9 = $_GET["Pregunta_9"];
     if ($Pregunta_9 == "En cuantos colores salio la PS5") {
      
             
    	echo "<br> 9. 1: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
     
    }if ($Pregunta_9 == "2") {
             
      echo "<br> 9. 2: <br>Respuesta correcta :) <br><br> ";
      $cal++;
     }if ($Pregunta_9 == "0") {
    
    	echo "<br> 9. 6: <br>respuesta incorrecta :( <br><br> ";
    }


    $Pregunta_10 = $_GET["Pregunta_10"];
    $resp10 = "cual es el nombre del juego mas vendido de PlayStation?";
    if ( $Pregunta_10 == $resp10) {
    	echo "<br> 10. cual es el nombre del juego mas vendido de PlayStation?: <br>Respuesta correcta :) <br><br> ";
    	$cal++;
    	 }else {
    	echo "<br> 10. cual es el nombre del juego mas vendido de PlayStation?: <br>respuesta incorrecta :( <br><br> ";
    }

    echo " Es: " . "$cal/10";

	if ($cal == 10) {
		echo "<br> eres un chico bien";
	}if  ($cal == 9) {
    	echo "<br>no eres naco bien echo  ;)";
    }if  ($cal == 8) {
    	echo "<br> un poco rustico pero bien";
    }if ($cal == 7) {
    	echo "<br>Oye, intenta otra vez naco";
    }if ($cal == 6) {
    	echo "<br> eres fan de xbox eres naco !";
    }if ($cal <= 5) {
    	echo "<br> no lo intes mas tu y yo sabemos que eres bien naco y fan de xbox <br>";
    }

	
 ?>
</font>
 </body>
</html>