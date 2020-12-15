<?php
namespace Clases;
use Clases\ConexionDB as db;
class Publicacion{
  private $nombre;
  private $tema;
  private $descripcion;
    public function __construct($nombre,$tema,$descripcion,$numero){
  $this->nombre=$nombre;
  $this->tema=$tema;
  $this->descripcion=$descripcion;
  $this->numero=$numero;
    }
    public function getNombre():string
        {
            return $this->nombre;
        }

        public function setNombre($nombre): void
        {
            $this->nombre = $nombre;
        }
        public function getTema():string
    {
        return $this->tema;
    }

    public function setTema($tema): void
    {
        $this->tema = $tema;
    }

    public function getDescripcion():string
{
    return $this->descripcion;
}

public function setDescripcion($descripcion): void
{
    $this->descripcion = $descripcion;
}
public function getNumero(): int
{
return $this->numero;
}

public function setNumero($numero): void
{
$this->numero = $numero;
}

  public function crearPublicacion(){
          try{
          $db = new db();
              $conn = $db->abrirConexion();

              $sql = "INSERT INTO publicacion(nombre,tema,descripcion,numero) VALUES('$this->nombre','$this->tema','$this->descripcion',$this->numero)";
              $respuesta = $conn->prepare($sql);
              $respuesta->execute();
              $numRows = $respuesta->rowCount();
              if($numRows!=0){
                  $result = true;
              }else{
                  $result = false;
              }

              $db->cerrarConexion();

              return $result;
          }
          catch(PDOException $e){
              echo $e->getMessage();
          }
      }
}
