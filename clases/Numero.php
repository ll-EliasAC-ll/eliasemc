<?php
namespace Clases;
use Clases\ConexionDB as db;
require_once "config/autoload.php";
class Numero{
  private $fecha;
  private $resumen;
  public function __construct($fecha,$resumen){
  $this->fecha=$fecha;
  $this->resumen=$resumen;
  }
  public function getFecha()
{
    return $this->fecha;
}

public function setFecha($nombre): void
{
    $this->fecha = $fecha;
}
public function getResumen()
{
    return $this->resumen;
}

public function setResumen($resumen): void
{
    $this->resumen = $resumen;
}
  public function verNumero() {
    try {
        $db = new db();
        $conn = $db->abrirConexion();
        $sql = "SELECT * FROM numero";
        $respuesta = $conn->prepare($sql);

        $respuesta->execute();
        $result = $respuesta->fetchAll();
       // var_dump($result);
        $db->cerrarConexion();
        return $result;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
}
 ?>
