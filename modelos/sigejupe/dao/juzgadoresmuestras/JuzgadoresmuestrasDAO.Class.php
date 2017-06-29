<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/juzgadoresmuestras/JuzgadoresmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresmuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertJuzgadoresmuestras($juzgadoresmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbljuzgadoresmuestras(";
if($juzgadoresmuestrasDto->getIdJuzgadorMuestra()!=""){
$sql.="idJuzgadorMuestra";
if(($juzgadoresmuestrasDto->getIdSolicitudMuestra()!="") ||($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra";
if(($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($juzgadoresmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($juzgadoresmuestrasDto->getIdJuzgadorMuestra()!=""){
$sql.="'".$juzgadoresmuestrasDto->getIdJuzgadorMuestra()."'";
if(($juzgadoresmuestrasDto->getIdSolicitudMuestra()!="") ||($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="'".$juzgadoresmuestrasDto->getIdSolicitudMuestra()."'";
if(($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getIdJuzgador()!=""){
$sql.="'".$juzgadoresmuestrasDto->getIdJuzgador()."'";
if(($juzgadoresmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getActivo()!=""){
$sql.="'".$juzgadoresmuestrasDto->getActivo()."'";
}
if($juzgadoresmuestrasDto->getFechaRegistro()!=""){
}
if($juzgadoresmuestrasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresmuestrasDTO();
$tmp->setidJuzgadorMuestra($this->_proveedor->lastID());
$tmp = $this->selectJuzgadoresmuestras($tmp,"",$this->_proveedor);
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function updateJuzgadoresmuestras($juzgadoresmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbljuzgadoresmuestras SET ";
if($juzgadoresmuestrasDto->getIdJuzgadorMuestra()!=""){
$sql.="idJuzgadorMuestra='".$juzgadoresmuestrasDto->getIdJuzgadorMuestra()."'";
if(($juzgadoresmuestrasDto->getIdSolicitudMuestra()!="") ||($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$juzgadoresmuestrasDto->getIdSolicitudMuestra()."'";
if(($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresmuestrasDto->getIdJuzgador()."'";
if(($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getActivo()!=""){
$sql.="activo='".$juzgadoresmuestrasDto->getActivo()."'";
if(($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresmuestrasDto->getFechaRegistro()."'";
if(($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresmuestrasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idJuzgadorMuestra='".$juzgadoresmuestrasDto->getIdJuzgadorMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresmuestrasDTO();
$tmp->setidJuzgadorMuestra($juzgadoresmuestrasDto->getIdJuzgadorMuestra());
$tmp = $this->selectJuzgadoresmuestras($tmp,"",$this->_proveedor);
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function deleteJuzgadoresmuestras($juzgadoresmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbljuzgadoresmuestras  WHERE idJuzgadorMuestra='".$juzgadoresmuestrasDto->getIdJuzgadorMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = true;
} else {
$tmp = false;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function selectJuzgadoresmuestras($juzgadoresmuestrasDto, $orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}

$sql = ' SELECT ';
        
if ($param == "" || isset($param["fields"]) == "") {
    $sql .= " idJuzgadorMuestra,idSolicitudMuestra,idJuzgador,activo,fechaRegistro,fechaActualizacion ";
} else {
    $sql .= $param["fields"];
}
$sql .= " FROM tbljuzgadoresmuestras ";

if(($juzgadoresmuestrasDto->getIdJuzgadorMuestra()!="") ||($juzgadoresmuestrasDto->getIdSolicitudMuestra()!="") ||($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($juzgadoresmuestrasDto->getIdJuzgadorMuestra()!=""){
$sql.="idJuzgadorMuestra='".$juzgadoresmuestrasDto->getIdJuzgadorMuestra()."'";
if(($juzgadoresmuestrasDto->getIdSolicitudMuestra()!="") ||($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$juzgadoresmuestrasDto->getIdSolicitudMuestra()."'";
if(($juzgadoresmuestrasDto->getIdJuzgador()!="") ||($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresmuestrasDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresmuestrasDto->getIdJuzgador()."'";
if(($juzgadoresmuestrasDto->getActivo()!="") ||($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresmuestrasDto->getActivo()!=""){
$sql.="activo='".$juzgadoresmuestrasDto->getActivo()."'";
if(($juzgadoresmuestrasDto->getFechaRegistro()!="") ||($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresmuestrasDto->getFechaRegistro()."'";
if(($juzgadoresmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresmuestrasDto->getFechaActualizacion()."'";
}

if ($param != "") {
    if ($param['fechaInicial'] != "" && $param['fechaInicial'] != 0 &&
            $param['fechaEnd'] != "" && $param['fechaEnd'] != 0 ) {
        $helpSql = strpos($sql, " WHERE");
        if ($helpSql) {
            $sql .= " AND ";
        } else {
            $sql .= " WHERE ";
        }
        if ($param['fechaInicial'] == $param['fechaEnd']) {
            $sql.= " fechaRegistro BETWEEN '" . $param['fechaInicial'] . " 00:00:00'";
            $sql.= " AND " . $param['fechaInicial'] . " 23:59:59'";
        } else {
            $sql.= " fechaRegistro BETWEEN '" . $param['fechaInicial'] . " 00:00:00'";
            $sql.= " AND '" . $param['fechaEnd'] . " 23:59:59'";
        }
    }
    $inicial = 0;
    if ($param["paginacion"]) {
        if ($param["pag"] > 0) {
            $inicial = ($param["pag"] - 1) * $param["cantxPag"];
        } else {
            $inicial = 0;
        }
    }
}

if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}

if ($param != "" || $param != null) {
    if (isset($param["fields"]) == "") {
        $sql.=" LIMIT " . $param["cantxPag"] . " OFFSET " . ($param["pag"]*$param["cantxPag"]-$param["cantxPag"])  . " ";
    }
}

error_log("sql => " . $sql);

$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
    if ($param == "" || isset($param["fields"]) == "") {
$tmp[$contador] = new JuzgadoresmuestrasDTO();
$tmp[$contador]->setIdJuzgadorMuestra($row["idJuzgadorMuestra"]);
$tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$contador++;
} else {
$tmp[$contador] = $row["totalCount"];
$contador++;
}
}
} else {
$error = true;
}
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
}
?>