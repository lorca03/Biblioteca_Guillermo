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
        $this->pdf->SetTitle("Biblioteca Lorca. Plaça de l'Ajuntament, 46002 València");
        $this->pdf->AddPage();
        $this->pdf->Write(0, 'Usuario:'.$usuario.'\nLibro:'.$libro.'\nFecha prestamo:'.$fecha, '', 0, 'C', 1, 0, false, false, 0);
        //$this->pdf->Image('assets/images/libros.png', 0, 0, 60, 60, '', '', '', true, 72, '', false, false, 0, false, false, false);
        $this->pdf->Output('ticket_devolucion_'.$fecha.'.pdf', 'I');
    }
}