<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//se hace referencia a la clase fpdf
use Codedge\Fpdf\Fpdf\Fpdf;
//uso del modelo
use App\Models\Mascota;
class PdfController extends Controller
{
	public function prueba(){

		//obtener razas
		//$razas=Raza::all();
		//return $razas;


		//obtener propietarios
		//$propietarios=Propietario::all();
		//return $propietarios;

		//obtener especies
		//$especies = Especie::all();
		//return $especies;

		//obtener el listado de las mascotas
		$mascotas = Mascota::all();
		//return $mascotas;

		//iniciamos la clase 
        $pdf=new Fpdf('P','mm','Letter');
        //agregamos una pagina
        $pdf->AddPage();
        //seleccionar una fuente
        $pdf->SetFont('Courier','B',20);
        $pdf->Image(public_path().'/images/icono.png',160,1,40);
        $pdf->SetFillColor(255,87,51);
        //anadir lineas de texto
        //        ancho,alto,valor,borde,comportamiento,alineacion
        $pdf->Ln(20);
        $pdf->Cell(200,10,'LISTADO DE MASCOTAS','B',1,'C',1);
        $pdf->Ln(5);


        //ENCABEZADO DE LA TABLA   

        //set font actua apartir de su posicion hacia abajo
        $pdf->SetFont('Arial','',15);
        //el numero 0 indica si el cuadro de texto estara abajo o al lado de la celda
        $alt1=8;
        $pdf->Cell(3,$alt1,'',0,0,'C');
        $pdf->Cell(20,$alt1,'No','BT',0,'C');
        $pdf->Cell(30,$alt1,'Nombre','BTL',0,'C');
        $pdf->Cell(35,$alt1,'Edad','BTL',0,'C');
        $pdf->Cell(35,$alt1,'Peso','BTL',0,'C');
        $pdf->Cell(35,$alt1,'Especie','BTL',0,'C');
        $pdf->Cell(35,$alt1,'Propietario','BTL',1,'C');


        //LINEA DE LA TABLA(DATOS)
        //VARIABLE CON EL VALOR DE LA ALTURA
        $alt=12;
        //for ($i=1; $i < 10 ; $i++) { 
        //	# code...
        //	 $pdf->Cell(30,$alt,'',0,0,'C');
        //     $pdf->Cell(20,$alt,$i,'BT',0,'C');
        //     $pdf->Cell(50,$alt,"Mascota   $i",'BT',0,'L');
        //     $pdf->Cell(35,$alt,'8','BT',0,'C');
        //     $pdf->Cell(35,$alt,'12','BT',1,'C');
        //}
        foreach ($mascotas as $mascota) {
        	
        	 $pdf->Cell(3,$alt,'',0,0,'C');
        	 //id de la mascota
             $pdf->Cell(20,$alt,utf8_decode($mascota->id_mascota),'BT',0,'C');
             //nombre de la mascota
             $pdf->Cell(30,$alt,utf8_decode($mascota->nombre),'BT',0,'L');
             $pdf->Cell(35,$alt,utf8_decode($mascota->edad),'BT',0,'C');
             $pdf->Cell(35,$alt,utf8_decode($mascota->peso),'BT',0,'C');
             $pdf->Cell(35,$alt,utf8_decode($mascota->especie->especie),'BT',0,'C');
             $pdf->Cell(35,$alt,utf8_decode($mascota->propietario->nombre),'BT',1,'C');
        }

       


        //al final envia el pdf a la pantalla
        $pdf->Output('I','Listado de Mascotas');
        exit;

	}
    

}
