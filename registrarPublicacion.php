<?php
use Clases\Numero;
use Clases\Publicacion;

include_once "config/autoload.php";
include_once "menu.php";
?>
    <h1>Registrar Publicacion</h1>
    <form method="post" action="#">
        <input type="text" name="nombre" placeholder="Nombre" required/><br>
        <input type="text" name="tema" placeholder="Tema" required/><br>
        <input type="text" name="descripcion" placeholder="Descripcion" required/><br>
   <select name="numero">
            <?php
           $numero = new Numero("","");
            $numeros = $numero->verNumero();
           foreach ($numeros  as $numero) {
              echo "<option value='" . $numero["idnumero"] . "'>" . $numero["resumen"] . "</option>";
           }
            ?>
        </select>
        <br/>
       <br/>
        <input type="submit" name="submit" value="Guardar">

    </form>

<?php
if (isset($_POST["submit"])) {

    $nombre = $_POST["nombre"];
    $tema = $_POST["tema"];
    $descripcion = $_POST["descripcion"];
    $numero =intval($_POST["numero"]);

    $publicacion = new Publicacion($nombre,$tema,$descripcion,$numero);
    if ($publicacion->crearPublicacion()) {
        echo "Datos guardados";
    } else {
        echo "Error: Los datos no se guardaron";
    }

}
