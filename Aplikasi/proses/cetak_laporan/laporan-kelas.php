<?php
require('../../FFPDF/fpdf.php');
include '../../koneksi.php';
include '../../template/function.php';

$kelas = $_GET['kelas'];

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Times','B',14);
        $this->Cell(0,8,'SMK TI BALI GLOBAL DENPASAR',0,1,'L');
        $this->Ln(2);
        $this->Cell(0,8,'LAPORAN PEMBAYARAN SPP',0,1,'C');
        $this->Ln(5);

        $this->SetFont('Times','B',9);
        $this->Cell(15,7,'No',1,0,'C');
        $this->Cell(25,7,'NIS',1,0,'C');
        $this->Cell(45,7,'Nama Siswa',1,0,'C');
        $this->Cell(25,7,'Kelas',1,0,'C');
        $this->Cell(30,7,'Tgl Bayar',1,0,'C');
        $this->Cell(25,7,'Bulan',1,0,'C');
        $this->Cell(30,7,'Jumlah',1,0,'C');
        $this->Cell(35,7,'Keterangan',1,1,'C');
    }
}

$pdf = new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','',9);

$query = "SELECT * FROM pembayaran 
          JOIN kelas USING (id_kelas) 
          JOIN siswa USING (nis) 
          WHERE kelas.id_kelas='$kelas' AND pembayaran.keterangan='Lunas' 
          ORDER BY id_bayar ASC";

$hasil = mysqli_query($koneksi, $query);

$i = 1;
$total = 0;

while ($data = mysqli_fetch_assoc($hasil)) {
    $pdf->Cell(15,6,$i,1,0,'C');
    $pdf->Cell(25,6,$data['nis'],1,0,'C');
    $pdf->Cell(45,6,$data['nama_siswa'],1,0,'C');
    $pdf->Cell(25,6,$data['kelas'],1,0,'C');
    $pdf->Cell(30,6,$data['tanggal_bayar'],1,0,'C');
    $pdf->Cell(25,6,$data['bulan'],1,0,'C');
    $pdf->Cell(30,6,rupiah($data['nominal']),1,0,'C');
    $pdf->Cell(35,6,$data['keterangan'],1,1, 'C');

    $total += $data['nominal'];
    $i++;
}

// Total
$pdf->SetFont('Times','B',8.9);
$pdf->Cell(195,7,'TOTAL',1,0,'R');
$pdf->Cell(35,7,rupiah($total),1,0,'R');

// Signature
$pdf->Ln(10);
$pdf->SetFont('Times','',10);
$pdf->Cell(0,6,'Denpasar, '.date('d/m/Y'),0,1,'R');
$pdf->Ln(15);
$pdf->Cell(0,6,'____________________',0,1,'R');

$pdf->Output('I','Laporan_SPP_Per_Kelas.pdf');