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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposmedidascautelares/TiposmedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposmedidascautelaresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposmedidascautelares($tiposmedidascautelaresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposmedidascautelares(";
if($tiposmedidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="cveTipoMedidaCautelar";
if(($tiposmedidascautelaresDto->getDesTipoMedidaCautelar()!="") ||($tiposmedidascautelaresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getdesTipoMedidaCautelar()!=""){
$sql.="desTipoMedidaCautelar";
if(($tiposmedidascautelaresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposmedidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="'".$tiposmedidascautelaresDto->getcveTipoMedidaCautelar()."'";
if(($tiposmedidascautelaresDto->getDesTipoMedidaCautelar()!="") ||($tiposmedidascautelaresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getdesTipoMedidaCautelar()!=""){
$sql.="'".$tiposmedidascautelaresDto->getdesTipoMedidaCautelar()."'";
if(($tiposmedidascautelaresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getactivo()!=""){
$sql.="'".$tiposmedidascautelaresDto->getactivo()."'";
}
if($tiposmedidascautelaresDto->getfechaRegistro()!=""){
}
if($tiposmedidascautelaresDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposmedidascautelaresDTO();
$tmp->setcveTipoMedidaCautelar($this->_proveedor->lastID());
$tmp = $this->selectTiposmedidascautelares($tmp,"",$this->_proveedor);
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
public function updateTiposmedidascautelares($tiposmedidascautelaresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposmedidascautelares SET ";
if($tiposmedidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="cveTipoMedidaCautelar='".$tiposmedidascautelaresDto->getcveTipoMedidaCautelar()."'";
if(($tiposmedidascautelaresDto->getDesTipoMedidaCautelar()!="") ||($tiposmedidascautelaresDto->getActivo()!="") ||($tiposmedidascautelaresDto->getFechaRegistro()!="") ||($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getdesTipoMedidaCautelar()!=""){
$sql.="desTipoMedidaCautelar='".$tiposmedidascautelaresDto->getdesTipoMedidaCautelar()."'";
if(($tiposmedidascautelaresDto->getActivo()!="") ||($tiposmedidascautelaresDto->getFechaRegistro()!="") ||($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getactivo()!=""){
$sql.="activo='".$tiposmedidascautelaresDto->getactivo()."'";
if(($tiposmedidascautelaresDto->getFechaRegistro()!="") ||($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposmedidascautelaresDto->getfechaRegistro()."'";
if(($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposmedidascautelaresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposmedidascautelaresDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoMedidaCautelar='".$tiposmedidascautelaresDto->getcveTipoMedidaCautelar()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposmedidascautelaresDTO();
$tmp->setcveTipoMedidaCautelar($tiposmedidascautelaresDto->getcveTipoMedidaCautelar());
$tmp = $this->selectTiposmedidascautelares($tmp,"",$this->_proveedor);
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
public function deleteTiposmedidascautelares($tiposmedidascautelaresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposmedidascautelares  WHERE cveTipoMedidaCautelar='".$tiposmedidascautelaresDto->getcveTipoMedidaCautelar()."'";
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
public function selectTiposmedidascautelares($tiposmedidascautelaresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoMedidaCautelar,desTipoMedidaCautelar,activo,fechaRegistro,fechaActualizacion FROM tbltiposmedidascautelares ";
if(($tiposmedidascautelaresDto->getcveTipoMedidaCautelar()!="") ||($tiposmedidascautelaresDto->getdesTipoMedidaCautelar()!="") ||($tiposmedidascautelaresDto->getactivo()!="") ||($tiposmedidascautelaresDto->getfechaRegistro()!="") ||($tiposmedidascautelaresDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposmedidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="cveTipoMedidaCautelar='".$tiposmedidascautelaresDto->getCveTipoMedidaCautelar()."'";
if(($tiposmedidascautelaresDto->getDesTipoMedidaCautelar()!="") ||($tiposmedidascautelaresDto->getActivo()!="") ||($tiposmedidascautelaresDto->getFechaRegistro()!="") ||($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposmedidascautelaresDto->getdesTipoMedidaCautelar()!=""){
$sql.="desTipoMedidaCautelar='".$tiposmedidascautelaresDto->getDesTipoMedidaCautelar()."'";
if(($tiposmedidascautelaresDto->getActivo()!="") ||($tiposmedidascautelaresDto->getFechaRegistro()!="") ||($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposmedidascautelaresDto->getactivo()!=""){
$sql.="activo='".$tiposmedidascautelaresDto->getActivo()."'";
if(($tiposmedidascautelaresDto->getFechaRegistro()!="") ||($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposmedidascautelaresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposmedidascautelaresDto->getFechaRegistro()."'";
if(($tiposmedidascautelaresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposmedidascautelaresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposmedidascautelaresDto->getFechaActualizacion()."'";
}
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
$tmp[$contador] = new TiposmedidascautelaresDTO();
$tmp[$contador]->setCveTipoMedidaCautelar($row["cveTipoMedidaCautelar"]);
$tmp[$contador]->setDesTipoMedidaCautelar($row["desTipoMedidaCautelar"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$contador++;
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