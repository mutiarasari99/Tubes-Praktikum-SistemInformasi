<?php 

class Laporan extends CI_Controller{
    function __construct()
    {
        parent :: __construct();
        $this->load->library('pdf');
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Anggota_model');
    }
    function index(){
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 13);
        $pdf->Cell(200, 10, 'DATA ANGGOTA', 0, 0, 'C');
        $pdf->Cell(10, 15, '', 0, 1);
        $pdf->SetFont('Times', 'B', 10);
        $pdf->Cell(10, 7, 'No', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Nama', 1, 0, 'C');
        $pdf->Cell(42, 7, 'Email', 1, 0, 'C');
        $pdf->Cell(30, 7, 'HP', 1, 0, 'C');
        $pdf->Cell(52, 7, 'KEMAMPUAN BAHASA', 1, 0, 'C');
        $pdf->Cell(30, 7, 'ALAMAT', 1, 0, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Times', '', 10);
        $dataanggota = $this->Anggota_model->getAllAnggota();

        $no = 1;
        foreach ($dataanggota as $id => $value) {
            $pdf->Cell(10, 6, $no , 1, 0, 'C');
            $pdf->Cell(30, 6, $value['nama'], 1, 0);
            $pdf->Cell(42, 6, $value['email'], 1, 0);
            $pdf->Cell(30, 6, $value['no_hp'], 1, 0);
            $pdf->Cell(52, 6, $value['kemampuan_bahasa'], 1, 0);
            $pdf->Cell(30, 6, $value['alamat'], 1, 1);
            $no++;
        }
        
        $pdf->Output();
    }
}

?>