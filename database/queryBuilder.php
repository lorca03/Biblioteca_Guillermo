<?php
require_once 'exeptions/database_exeption.php';
class QueryBuilder
{
    private $conexion;
    private $tabla;
    private $entidad;
    private $constructor;
    public function __construct($tabla,$entidad,$constructor='')
    {
        $this->conexion = App::getConexion();
        $this->tabla=$tabla;
        $this->entidad=$entidad;
        $this->constructor=$constructor;
    }
    public function findAll()
    {
        $sql = "SELECT * from $this->tabla";
        $pdoStatment = $this->conexion->prepare($sql);
        if ($pdoStatment->execute() === false) {
            throw new Database_exception('No se ha podido ejecutar la query solicitada');
        }
        return $pdoStatment->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->entidad, $this->constructor);
    }
    public function save($entidadObjeto)
    {
        try {
            $parametros=$entidadObjeto->toArray();
            $sql= sprintf('insert into %s (%s) values (%s)',
            $this->tabla,
            implode(', ',array_keys($parametros)) ,
            ':'. implode(', :',array_keys($parametros)) );
            $pdoStatment=$this->conexion->prepare($sql);
            $pdoStatment->execute($parametros);
        } catch (PDOException $th) {
            throw new Database_exception('No se ha podido ejecutar la Query solicitada');
        }
    }
}
