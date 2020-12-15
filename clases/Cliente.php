<?php
namespace Clases;
class Cliente{
  protected $nombre;
  protected $dni;
  protected $direccion;
  public function __construct($nombre,$dni,$direccion)
  {
      $this->nombre=$nombre;
      $this->dni=$dni;
      $this->direccion=$direccion;
  }
  public function getNombre(): string
  {
    return $this->nombre;
  }
  public function setNombre($nombre): void
  {
    $this->nombre=$nombre;
  }
  public function getDni(): string
  {
    return $this->dni;
  }
  public function setDni($dni): void
  {
    $this->dni=$dni;
  }
  public function getDireccion(): string
  {
    return $this->direccion;
  }
  public function setDireccion($direccion): void
  {
    $this->direccion=$direccion;
  }

}
?>
