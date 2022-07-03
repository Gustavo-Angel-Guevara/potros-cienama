
		<?php

			header('Content-Type: text/html; charset=UTF-8');
			require('fpdf/fpdf.php');

			//parámetros: servidor, usuario, contraseña, BD
			$conexion = new mysqli("localhost", "root", "", "peliculas");
			//Estructura para obtener todos los registros de la tabla actor
			$consulta = "SELECT idPelicula, nombrePelicula, nacionalidad, estatus FROM pelicula WHERE estatus=1";
			//Variable que guarda el resultado del query
			$resultado = $conexion->query($consulta);

			//Generación de reporte
			$pdf = new FPDF('P', 'mm', array(100,150));


				//Ciclo para recorrer el objeto y sus datos
				while($row = $resultado->fetch_assoc())
				{
					
					$pdf->AddPage();
					$pdf->Rect(3,5,95,140);

					$pdf->SetFont('Times','B',20);
					$pdf->SetXY(8,5);
					$pdf->Cell(90,30,'Peliculas CINE CUH',0,1,'C');

					$pdf->SetFont('Times','',14);
					$pdf->SetXY(0,26);
					$pdf->Cell(100,20,'Nombre pelicula: ',0,1,'C');

					$pdf->SetFont('Times','I',14);
					$pdf->SetXY(0,36);
					$pdf->Cell(100,20,$row['nombrePelicula'],0,1,'C');

					$rutaImagen = 'C:/xampp/htdocs/cine/temp/pelicula_'.$row['idPelicula'].'.png';
					$pdf->Image($rutaImagen,22,50,60,60);


					//Parámetros de la imagen:
					//url o localización del recurso
					//Posición X, Posición Y, Ancho y Alto
					//$pdf->Image('https://enriqueromerodominguezcine.com/wp-content/uploads/2020/01/Enrique-Romero-Cine-series-y-peliculas-de-netflix-logo.png',20,8,20,20);

					$pdf->Image('https://static.vecteezy.com/system/resources/previews/002/412/416/non_2x/horror-films-studio-movie-cinema-film-production-logo-design-icon-illustration-vector.jpg',1,2,15,15);

					$pdf->SetFont('Times','',10);
					$pdf->SetXY(22,104);
					$pdf->Cell(60,20,'Derechos reservados',0,1,'C');

				}

			$pdf->Output();

		?>
