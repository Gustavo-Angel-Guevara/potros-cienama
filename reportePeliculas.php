
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
					$pdf->Cell(90,30,'Peliculas Potro Cinema',0,1,'C');

					$pdf->SetFont('Times','',14);
					$pdf->SetXY(0,26);
					$pdf->Cell(100,20,'Nombre de la pelicula: ',0,1,'C');

					$pdf->SetFont('Times','I',14);
					$pdf->SetXY(0,36);
					$pdf->Cell(100,20,utf8_decode($row['nombrePelicula']),0,1,'C');

					$rutaImagen = 'C:/xampp/htdocs/cine/temp/pelicula_'.$row['idPelicula'].'.png';
					$pdf->Image($rutaImagen,22,50,60,60);

					$pdf->SetFont('Times','',10);
					$pdf->SetXY(22,109);
					$pdf->Cell(60,20,'Derechos reservados',0,1,'C');

				}

			$pdf->Output();

		?>
