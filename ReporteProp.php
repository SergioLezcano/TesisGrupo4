<?php
require('FPDF/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes/INMOBILIARIA.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'INFORME DE PROPIEDADES',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    //Cabeceras de tabla
    $this->Cell(20,10,'TIPO',1,0,'C',0);
    $this->Cell(50,10,'DIRECCION',1,0,'C',0);
    $this->Cell(30,10,'LOCALIDAD',1,0,'C',0);
    $this->Cell(70,10,'CARACTERISTICAS',1,0,'C',0);
    $this->Cell(20,10,'PRECIO',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

include('conexionReporte.php');

$consulta = "SELECT * FROM unidades";
$result = $consulta = mysqli_query($conexion,$consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);

while($row = $result->fetch_assoc()){
    $pdf->Cell(20,10, $row['Tipo_Actividad'],1,0,'C',0);
    $pdf->Cell(50,10, $row['Dirección'],1,0,'J',0);
    $pdf->Cell(30,10, $row['Localidad'],1,0,'C',0);
    $pdf->Cell(70,10, $row['Caracteristicas'],1,0,'J',0);
    $pdf->Cell(20,10, $row['Precio'],1,1,'C',0);
    
}

$pdf->Output();
?>