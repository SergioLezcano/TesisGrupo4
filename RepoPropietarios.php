<?php
require('FPDF/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes/INMOBILIARIA.jpg',10,8,33);
    // Fuente
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'INFORME DE PROPIETARIOS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    //Cabeceras de tabla
    $this->Cell(30,10,'DOCUMENTO',1,0,'C',0);
    $this->Cell(32,10,'NOMBRE',1,0,'C',0);
    $this->Cell(32,10,'APELLIDO',1,0,'C',0);
    $this->Cell(30,10,'TELEFONO',1,0,'C',0);
    $this->Cell(60,10,'E-MAIL',1,1,'C',0);
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

$consulta = "SELECT * FROM propietarios";
$result = $consulta = mysqli_query($conexion,$consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);

while($row = $result->fetch_assoc()){
    $pdf->Cell(30,10, $row['DNI'],1,0,'C',0);
    $pdf->Cell(32,10, $row['Nombre'],1,0,'C',0);
    $pdf->Cell(32,10, $row['Apellido'],1,0,'C',0);
    $pdf->Cell(30,10, $row['Telefono'],1,0,'C',0);
    $pdf->Cell(60,10, $row['Email'],1,1,'C',0);
}

$pdf->Output();
?>