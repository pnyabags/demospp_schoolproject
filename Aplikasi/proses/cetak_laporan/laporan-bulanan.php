<?php
require('../../FFPDF/fpdf.php');
include '../../koneksi.php';
include '../../template/function.php';

$awal  = $_GET['awal'];
$akhir = $_GET['akhir'];

class PDF extends FPDF
{
    
    function Header()
    {
        $this->SetFont('Times','B',12);
        $this->Cell(0,6,'SMK TI BALI GLOBAL DENPASAR',0,1,'L');
        $this->Ln(2);
        $this->Cell(0,6,'LAPORAN PEMBAYARAN SPP',0,1,'C');
        $this->Ln(2);
        $this->SetFont('Times','',10);
        $this->Cell(0,6,'Periode: '.$_GET['awal'].' Sampai '.$_GET['akhir'],0,1,'L');
        $this->Ln(3);
        
        $this->SetFont('Times','B',9);
        $this->Cell(8,7,'No',1,0,'C');
        $this->Cell(22,7,'NIS',1,0,'C');
        $this->Cell(40,7,'Nama Siswa',1,0,'C');
        $this->Cell(18,7,'Kelas',1,0,'C');
        $this->Cell(25,7,'Tanggal Bayar',1,0,'C');
        $this->Cell(20,7,'Bulan',1,0,'C');
        $this->Cell(27,7,'Jumlah',1,0,'C');
        $this->Cell(30,7,'Keterangan',1,1,'C');
    }
}

$pdf = new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','',8.9);
$tableWidth = 190;


$spp = mysqli_query($koneksi,
    "SELECT * FROM pembayaran 
     JOIN kelas USING (id_kelas) 
     JOIN siswa USING (nis) 
     WHERE tanggal_bayar BETWEEN '$awal' AND '$akhir'
     ORDER BY id_bayar"
);

$i = 1;
$total = 0;

while($data = mysqli_fetch_assoc($spp)) {
    $pdf->Cell(8,6,$i,1,0,'C');
    $pdf->Cell(22,6,$data['nis'],1,0, 'C');
    $pdf->Cell(40,6,$data['nama_siswa'],1,0, 'C');
    $pdf->Cell(18,6,$data['kelas'],1,0, 'C');
    $pdf->Cell(25,6,$data['tanggal_bayar'],1,0, 'C');
    $pdf->Cell(20,6,$data['bulan'],1,0, 'C');
    $pdf->Cell(27,6,rupiah($data['nominal']),1,0,'C');
    $pdf->Cell(30,6,$data['keterangan'],1,1, 'C');

    $total += $data['nominal'];
    $i++;
}

// Total row
$pdf->SetFont('Times','B',8.9);
$pdf->Cell(160,7,'TOTAL',1,0,'R');
$pdf->Cell(30,7,rupiah($total),1,0,'R');

// Signature
$pdf->Ln(10);
$pdf->SetFont('Times','',10);
$pdf->Cell(0,6,'Denpasar, '.date('d/m/Y'),0,1,'R');
$pdf->Ln(15);
$pdf->Cell(0,6,'____________________',0,1,'R');

$pdf->Output('I','Laporan_SPP_Bulanan.pdf');