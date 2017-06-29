<?php
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class Bitacora{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }

    /**
     * FunciOn para agregar un registro en la BitAcora
     *
     * 1. Se incluye la ruta a este archivo en la cabecera
     * 2. Se define la propiedad 'private $bitacora;'
     * 3. Se crea el objeto dentro del constructor '$this->bitacora = new bitacora();'
     * 4. Se llama el mEtodo '$this->bitacora->agregarEvento($cveAccion, $observaciones);' con el paso de parametros necesario
     *
     * Nota: Verificar el valor correcto de $cveAccion en la tabla 'tblacciones' segUn corresponda
     *
     * @param type $cveAccion
     * @param type $observaciones
     * @param type $proveedor
     */
    public function agregaRegistro($cveAccion, $observaciones, $proveedor = null)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $cveUsuario = 641; //$_SESSION['cveUsuarioSistema'];
        $cvePerfil = 100; //$_SESSION['cvePerfil'];
        $cveAdscripcion = 762; //$_SESSION['cveAdscripcion'];

        $sql = "INSERT INTO tblbitacoramovimientos (cveAccion,fechaMovimiento,observaciones,cveUsuario,cvePerfil,cveAdscripcion) VALUES('" . $cveAccion . "',now(),'" . $observaciones . "','" . $cveUsuario . "','" . $cvePerfil . "','" . $cveAdscripcion . "')";
        $this->_proveedor->execute($sql);
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($sql);
    }
}
?>