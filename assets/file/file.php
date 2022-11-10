<?php
require_once './exeptions/fileException.php';

class File
{

    private $file;
    private $filename;
    private $filetype;

    public function __construct($campo)
    {
        $this->file = $_FILES[$campo];
        $this->filetype=$this->file['type'];
        if ( $this->filetype == "image/png" ||  $this->filetype == "image/jpg" ||  $this->filetype == "image/jpeg" ||  $this->filetype == "image/gif") {
            throw new File_exception('La imagen no es del tipo correcto. Debe ser jpg/jpeg/png/gif');
        }
        $this->nombre = $this->file['name'];
    }

    function saveUploadFile($rutadestino)
    {
        if (!is_file($rutadestino.$this->filename)) {
            $enviada = move_uploaded_file($this->file["tmp_name"], $rutadestino . $this->filename);
            if (!$enviada) {
                throw new File_exception('La imagen no se ha subido con exito');
            } 
        }else{
            echo "Ya existe el archivo";
        }
    }
}
