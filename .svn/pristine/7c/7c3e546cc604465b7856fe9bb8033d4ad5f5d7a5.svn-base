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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/clasificacionesdelitos/ClasificacionesdelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ClasificacionesdelitosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertClasificacionesdelitos($clasificacionesdelitosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblclasificacionesdelitos(";
if($clasificacionesdelitosDto->getcveClasificacionDelito()!=""){
$sql.="cveClasificacionDelito";
if(($clasificacionesdelitosDto->getDesClasificacionDelito()!="") ||($clasificacionesdelitosDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getdesClasificacionDelito()!=""){
$sql.="desClasificacionDelito";
if(($clasificacionesdelitosDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($clasificacionesdelitosDto->getcveClasificacionDelito()!=""){
$sql.="'".$clasificacionesdelitosDto->getcveClasificacionDelito()."'";
if(($clasificacionesdelitosDto->getDesClasificacionDelito()!="") ||($clasificacionesdelitosDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getdesClasificacionDelito()!=""){
$sql.="'".$clasificacionesdelitosDto->getdesClasificacionDelito()."'";
if(($clasificacionesdelitosDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getactivo()!=""){
$sql.="'".$clasificacionesdelitosDto->getactivo()."'";
}
if($clasificacionesdelitosDto->getfechaRegistro()!=""){
}
if($clasificacionesdelitosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ClasificacionesdelitosDTO();
$tmp->setcveClasificacionDelito($this->_proveedor->lastID());
$tmp = $this->selectClasificacionesdelitos($tmp,"",$this->_proveedor);
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
public function updateClasificacionesdelitos($clasificacionesdelitosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblclasificacionesdelitos SET ";
if($clasificacionesdelitosDto->getcveClasificacionDelito()!=""){
$sql.="cveClasificacionDelito='".$clasificacionesdelitosDto->getcveClasificacionDelito()."'";
if(($clasificacionesdelitosDto->getDesClasificacionDelito()!="") ||($clasificacionesdelitosDto->getActivo()!="") ||($clasificacionesdelitosDto->getFechaRegistro()!="") ||($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getdesClasificacionDelito()!=""){
$sql.="desClasificacionDelito='".$clasificacionesdelitosDto->getdesClasificacionDelito()."'";
if(($clasificacionesdelitosDto->getActivo()!="") ||($clasificacionesdelitosDto->getFechaRegistro()!="") ||($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getactivo()!=""){
$sql.="activo='".$clasificacionesdelitosDto->getactivo()."'";
if(($clasificacionesdelitosDto->getFechaRegistro()!="") ||($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$clasificacionesdelitosDto->getfechaRegistro()."'";
if(($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$clasificacionesdelitosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveClasificacionDelito='".$clasificacionesdelitosDto->getcveClasificacionDelito()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ClasificacionesdelitosDTO();
$tmp->setcveClasificacionDelito($clasificacionesdelitosDto->getcveClasificacionDelito());
$tmp = $this->selectClasificacionesdelitos($tmp,"",$this->_proveedor);
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
public function deleteClasificacionesdelitos($clasificacionesdelitosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblclasificacionesdelitos  WHERE cveClasificacionDelito='".$clasificacionesdelitosDto->getcveClasificacionDelito()."'";
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
public function selectClasificacionesdelitos($clasificacionesdelitosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveClasificacionDelito,desClasificacionDelito,activo,fechaRegistro,fechaActualizacion FROM tblclasificacionesdelitos ";
if(($clasificacionesdelitosDto->getcveClasificacionDelito()!="") ||($clasificacionesdelitosDto->getdesClasificacionDelito()!="") ||($clasificacionesdelitosDto->getactivo()!="") ||($clasificacionesdelitosDto->getfechaRegistro()!="") ||($clasificacionesdelitosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($clasificacionesdelitosDto->getcveClasificacionDelito()!=""){
$sql.="cveClasificacionDelito='".$clasificacionesdelitosDto->getCveClasificacionDelito()."'";
if(($clasificacionesdelitosDto->getDesClasificacionDelito()!="") ||($clasificacionesdelitosDto->getActivo()!="") ||($clasificacionesdelitosDto->getFechaRegistro()!="") ||($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosDto->getdesClasificacionDelito()!=""){
$sql.="desClasificacionDelito='".$clasificacionesdelitosDto->getDesClasificacionDelito()."'";
if(($clasificacionesdelitosDto->getActivo()!="") ||($clasificacionesdelitosDto->getFechaRegistro()!="") ||($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosDto->getactivo()!=""){
$sql.="activo='".$clasificacionesdelitosDto->getActivo()."'";
if(($clasificacionesdelitosDto->getFechaRegistro()!="") ||($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$clasificacionesdelitosDto->getFechaRegistro()."'";
if(($clasificacionesdelitosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$clasificacionesdelitosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ClasificacionesdelitosDTO();
$tmp[$contador]->setCveClasificacionDelito($row["cveClasificacionDelito"]);
$tmp[$contador]->setDesClasificacionDelito($row["desClasificacionDelito"]);
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