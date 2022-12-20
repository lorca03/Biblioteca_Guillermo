<?php

namespace biblioteca\app\utils;

use TCPDF;

class MyPdf
{
    private $pdf;
    public function __construct()
    {
        $this->pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    }
    public function new_document($usuario,$libro,$fecha)
    {
        $nombre='ticket_'.$fecha.'.pdf';
        $this->pdf->SetTitle("Biblioteca Lorca. Plaça de l'Ajuntament, 46002 València");
        $this->pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->pdf->SetHeaderData('logo_example.jpg',20,"Biblioteca Lorca. Plaça de l'Ajuntament, 46002 València");
        $this->pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->pdf->AddPage();
        $this->pdf->Write(0, 'Usuario:'.$usuario, '', 0, 'C', 1, 0, false, false, 0);
        $this->pdf->Write(0, 'Libro:'.$libro, '', 0, 'C', 1, 0, false, false, 0);
        $this->pdf->Write(0, 'Fecha prestamo:'.$fecha, '', 0, 'C', 1, 0, false, false, 0);
        $this->pdf->Output($nombre,'I');
    }
}