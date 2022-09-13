
		<?php

			header('Content-Type: text/html; charset=UTF-8');
			require('fpdf/fpdf.php');

			//parámetros: servidor, usuario, contraseña, BD
			$conexion = new mysqli("localhost", "root", "", "peliculas");
			//Estructura para obtener todos los registros de la tabla actor
			$consulta = "SELECT idDirector, nombreDirector, pais, estatus,fechaNacimiento FROM director WHERE estatus=1";
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
					$pdf->Cell(90,20,'Lista de Directores',0,1,'C');

					$pdf->SetFont('Times','',14);
					$pdf->SetXY(0,26);
					$pdf->Cell(100,10,'Nombre director ',0,1,'C');

					$pdf->SetFont('Times','I',14);
					$pdf->SetXY(0,36);
					$pdf->Cell(100,15,utf8_decode($row['nombreDirector']),0,1,'C');

					$pdf->SetFont('Times','',14);
					$pdf->SetXY(0,26);
					$pdf->Cell(100,55,'Fecha de nacimiento ',0,1,'C');

					$pdf->SetFont('Times','I',14);
					$pdf->SetXY(0,36);
					$pdf->Cell(100,55,utf8_decode($row['fechaNacimiento']),0,1,'C');

					$pdf->SetFont('Times','',14);
					$pdf->SetXY(0,26);
					$pdf->Cell(100,90,'Pais ',0,1,'C');

					$pdf->SetFont('Times','I',14);
					$pdf->SetXY(0,36);
					$pdf->Cell(100,90,utf8_decode($row['pais']),0,1,'C');

				}

			$pdf->Output();

		?>
