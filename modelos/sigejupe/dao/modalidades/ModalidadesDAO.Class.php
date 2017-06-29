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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ModalidadesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertModalidades($modalidadesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmodalidades(";
if($modalidadesDto->getcveModalidad()!=""){
$sql.="cveModalidad";
if(($modalidadesDto->getDesModalidad()!="") ||($modalidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getdesModalidad()!=""){
$sql.="desModalidad";
if(($modalidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($modalidadesDto->getcveModalidad()!=""){
$sql.="'".$modalidadesDto->getcveModalidad()."'";
if(($modalidadesDto->getDesModalidad()!="") ||($modalidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getdesModalidad()!=""){
$sql.="'".$modalidadesDto->getdesModalidad()."'";
if(($modalidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getactivo()!=""){
$sql.="'".$modalidadesDto->getactivo()."'";
}
if($modalidadesDto->getfechaRegistro()!=""){
}
if($modalidadesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ModalidadesDTO();
$tmp->setcveModalidad($this->_proveedor->lastID());
$tmp = $this->selectModalidades($tmp,"",$this->_proveedor);
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
public function updateModalidades($modalidadesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmodalidades SET ";
if($modalidadesDto->getcveModalidad()!=""){
$sql.="cveModalidad='".$modalidadesDto->getcveModalidad()."'";
if(($modalidadesDto->getDesModalidad()!="") ||($modalidadesDto->getActivo()!="") ||($modalidadesDto->getFechaRegistro()!="") ||($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getdesModalidad()!=""){
$sql.="desModalidad='".$modalidadesDto->getdesModalidad()."'";
if(($modalidadesDto->getActivo()!="") ||($modalidadesDto->getFechaRegistro()!="") ||($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getactivo()!=""){
$sql.="activo='".$modalidadesDto->getactivo()."'";
if(($modalidadesDto->getFechaRegistro()!="") ||($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$modalidadesDto->getfechaRegistro()."'";
if(($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$modalidadesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveModalidad='".$modalidadesDto->getcveModalidad()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ModalidadesDTO();
$tmp->setcveModalidad($modalidadesDto->getcveModalidad());
$tmp = $this->selectModalidades($tmp,"",$this->_proveedor);
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
public function deleteModalidades($modalidadesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmodalidades  WHERE cveModalidad='".$modalidadesDto->getcveModalidad()."'";
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
public function selectModalidades($modalidadesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveModalidad,desModalidad,activo,fechaRegistro,fechaActualizacion FROM tblmodalidades ";
if(($modalidadesDto->getcveModalidad()!="") ||($modalidadesDto->getdesModalidad()!="") ||($modalidadesDto->getactivo()!="") ||($modalidadesDto->getfechaRegistro()!="") ||($modalidadesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($modalidadesDto->getcveModalidad()!=""){
$sql.="cveModalidad='".$modalidadesDto->getCveModalidad()."'";
if(($modalidadesDto->getDesModalidad()!="") ||($modalidadesDto->getActivo()!="") ||($modalidadesDto->getFechaRegistro()!="") ||($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesDto->getdesModalidad()!=""){
$sql.="desModalidad='".$modalidadesDto->getDesModalidad()."'";
if(($modalidadesDto->getActivo()!="") ||($modalidadesDto->getFechaRegistro()!="") ||($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesDto->getactivo()!=""){
$sql.="activo='".$modalidadesDto->getActivo()."'";
if(($modalidadesDto->getFechaRegistro()!="") ||($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$modalidadesDto->getFechaRegistro()."'";
if(($modalidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$modalidadesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ModalidadesDTO();
$tmp[$contador]->setCveModalidad($row["cveModalidad"]);
$tmp[$contador]->setDesModalidad($row["desModalidad"]);
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