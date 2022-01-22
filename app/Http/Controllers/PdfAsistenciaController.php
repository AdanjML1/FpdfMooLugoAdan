<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importante poner esta linea de codigo para utilizar fpdf
use Codedge\Fpdf\Fpdf\Fpdf;

class PdfAsistenciaController extends Controller
{
    //inicio de la funcion
    public function asistencia(){
    	//iniciamos la clase 
        $pdf=new Fpdf('L','mm','Letter');
        //agregamos una pagina
        $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('1'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de las filas


        	//hoja 2
        	 $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('2'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de la hoja 2

        //hoja 3
        	 $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('3'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de la hoja 3

        	//hoja 4
        	 $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de la hoja 4
        	//hoja 5
        	 $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('5'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de la hoja 5
        	//hoja 6
        	 $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('6'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de la hoja 6
        	//hoja 7
        	 $pdf->AddPage();
        //seleccion de la fuente

        $pdf->Image(public_path().'/images/utc.png',20,4,60);


        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),'0',1,'C');


        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,4,'','0',0,'C');
        $pdf->Cell(200,4,'DEPARTAMENTO DE SERVICIOS ESCOLARES','0',1,'C');


        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,3,'','0',0,'C');
        $pdf->Cell(200,3,'LISTA DE ASISTENCIA','0',1,'C');

        

        $ESP=4;

        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(30,$ESP,'','0',0,'C');
        $pdf->Cell(200,$ESP,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),'0',1,'C');
       
        $pdf->Cell(30,$ESP,('DOCENTE:'),'0',0,'R');
        $pdf->Cell(70,$ESP,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
        $pdf->Cell(50,$ESP,('UNIDAD:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('7'),'B',0,'C');
        $pdf->Cell(60,$ESP,('CUATRIMESTRE:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('4'),'B',1,'C');



        $pdf->Cell(30,$ESP,('MATERIA:'),'0',0,'R');
        $pdf->Cell(70,$ESP,'APLICACIONES WEB ORIENTADAS A SERVICIOS','B',0,'C');
        $pdf->Cell(50,$ESP,('GRUPO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('TTD-4A'),'B',0,'C');
        $pdf->Cell(60,$ESP,('PERIODO:'),'0',0,'R');
        $pdf->Cell(20,$ESP,('SEPT-DIC 2020'),'B',1,'C');

        $pdf->Ln(2);

        $pdf->Cell(5,5,(''),'0',0,'R');
        $pdf->Cell(95,5,('DATOS DEL ALUMNO'),'1',0,'C');
        $pdf->Cell(150,5,(''),'1',1,'C');

        //en esta parte se agregan los numeros de filas
        $altMatriculas=3.2;

         $pdf->Cell(5,$altMatriculas,(''),'0',0,'R');
         $pdf->Cell(5,$altMatriculas,utf8_decode('N°'),'1',0,'R');
         $pdf->Cell(30,$altMatriculas,utf8_decode('MATRICULA'),'1',0,'C');
         $pdf->Cell(60,$altMatriculas,utf8_decode('NOMBRE'),'1',0,'C');
         


        

         	for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                $pdf->Cell(6,$altMatriculas,'','1',1,'C');
         	
            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'1','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212286','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'AKE CANUL GASPAR RAYMUNDO','1',0,'L');


            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'2','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212287','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ALPUCHE CONRADO JESUS ARMANDO','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'3','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212289','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAAMAL OXTE DANYY HASIEL','1',0,'L');

            $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'4','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212290','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN CHALE MIGUEL IGNACIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'5','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212291','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN TAMAY MANUEL JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'6','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212292','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAN YAM NOE AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'7','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212293','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CAUICH MAY HEIDI MARILU','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'8','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212294','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CETZAL ALVAREZ ROBERTO ANGEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'9','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212295','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'CUTZ CHAN DAVID AZAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'10','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212296','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'DZUL CANUL KEVIN JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'11','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212103','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESPADAS LOPEZ ANDRIK ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'12','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212298','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ESTRELLA CANCHE USUEL MISAEL','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'13','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212299','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MATU MIRANDA OSCAR ALDAIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'14','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212300','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MAY CHUC BAYAN ISAI','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'15','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212301','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'MOO LUGO ADAN DE JESUS','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'16','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212426','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN HECTOR EDUARDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'17','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212303','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'ORTIZ CAN BRAULIO RONALDO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');



            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'18','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212439','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'PECH NABTE ARIEL YAHIR','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'19','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212305','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'QUIJANO MOO CRISTIAN ADRIAN','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'20','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212306','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'RUIZ CHI JOAQUIN ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');
                 

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'21','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212307','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'TAMAY CANUL FRANCISCO JAVIER','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'22','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212308','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UC EK CARLOS ALEJANDRO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');


            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'23','1',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(30,$altMatriculas,'20212309','1',0,'C');
        	$pdf->Cell(60,$altMatriculas,'UITZ CHAN MARINA DEL ROSARIO','1',0,'L');

             $pdf->SetFont('Arial','B',7);
            for ($i=1; $i < 25; $i++) { 
         		# code...
         		$pdf->Cell(6,$altMatriculas,'','1',0,'C');
         	}
                 $pdf->Cell(6,$altMatriculas,'','1',1,'C');

            $pdf->SetFont('Arial','B',7);
            for ($i=24; $i < 41; $i++) { 
                 	# code...
            	$pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	    $pdf->Cell(5,$altMatriculas,$i,'1',0,'C');
    
        	    $pdf->Cell(30,$altMatriculas,'','1',0,'C');
        	    $pdf->Cell(60,$altMatriculas,'','1',0,'L');


        	        for ($a=1; $a < 25; $a++) { 
        	        	# code...
        	        	$pdf->Cell(6,$altMatriculas,'','1',0,'C');
        	        }
        	        $pdf->Cell(6,$altMatriculas,'','1',1,'C');
        	     
                 } 


            $pdf->Ln(8);     

            $pdf->Cell(5,$altMatriculas,'','0',0,'R');
        	$pdf->Cell(5,$altMatriculas,'','0',0,'C');
        	$pdf->SetFont('Arial','B',7);
        	$pdf->Cell(90,$altMatriculas,'','0',0,'C');
        	$pdf->Cell(60,5,'FIRMA DEL DOCENTE','T',0,'C');
        	$pdf->SetFont('Arial','',7);
        	$pdf->Cell(80,5,'F-UTC-SES-05/V04','0',1,'C');
        //fin de la hoja 7

       






        

       

        


         //al final envia el pdf a la pantalla
        $pdf->Output();
        exit;

    }//fin de la funcion
}
