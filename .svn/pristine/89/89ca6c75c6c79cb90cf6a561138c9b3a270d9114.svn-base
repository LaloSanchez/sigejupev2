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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/autoridadesemisoras/AutoridadesemisorasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AutoridadesemisorasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAutoridadesemisoras($autoridadesemisorasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblautoridadesemisoras(";
if($autoridadesemisorasDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora";
if(($autoridadesemisorasDto->getDesAutoridadEmisora()!="") ||($autoridadesemisorasDto->getActivo()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getdesAutoridadEmisora()!=""){
$sql.="desAutoridadEmisora";
if(($autoridadesemisorasDto->getActivo()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($autoridadesemisorasDto->getcveAutoridadEmisora()!=""){
$sql.="'".$autoridadesemisorasDto->getcveAutoridadEmisora()."'";
if(($autoridadesemisorasDto->getDesAutoridadEmisora()!="") ||($autoridadesemisorasDto->getActivo()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getdesAutoridadEmisora()!=""){
$sql.="'".$autoridadesemisorasDto->getdesAutoridadEmisora()."'";
if(($autoridadesemisorasDto->getActivo()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getactivo()!=""){
$sql.="'".$autoridadesemisorasDto->getactivo()."'";
}
if($autoridadesemisorasDto->getfechaRegistro()!=""){
}
if($autoridadesemisorasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AutoridadesemisorasDTO();
$tmp->setcveAutoridadEmisora($this->_proveedor->lastID());
$tmp = $this->selectAutoridadesemisoras($tmp,"",$this->_proveedor);
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
public function updateAutoridadesemisoras($autoridadesemisorasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblautoridadesemisoras SET ";
if($autoridadesemisorasDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora='".$autoridadesemisorasDto->getcveAutoridadEmisora()."'";
if(($autoridadesemisorasDto->getDesAutoridadEmisora()!="") ||($autoridadesemisorasDto->getActivo()!="") ||($autoridadesemisorasDto->getFechaRegistro()!="") ||($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getdesAutoridadEmisora()!=""){
$sql.="desAutoridadEmisora='".$autoridadesemisorasDto->getdesAutoridadEmisora()."'";
if(($autoridadesemisorasDto->getActivo()!="") ||($autoridadesemisorasDto->getFechaRegistro()!="") ||($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getactivo()!=""){
$sql.="activo='".$autoridadesemisorasDto->getactivo()."'";
if(($autoridadesemisorasDto->getFechaRegistro()!="") ||($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$autoridadesemisorasDto->getfechaRegistro()."'";
if(($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autoridadesemisorasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$autoridadesemisorasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveAutoridadEmisora='".$autoridadesemisorasDto->getcveAutoridadEmisora()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AutoridadesemisorasDTO();
$tmp->setcveAutoridadEmisora($autoridadesemisorasDto->getcveAutoridadEmisora());
$tmp = $this->selectAutoridadesemisoras($tmp,"",$this->_proveedor);
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
public function deleteAutoridadesemisoras($autoridadesemisorasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblautoridadesemisoras  WHERE cveAutoridadEmisora='".$autoridadesemisorasDto->getcveAutoridadEmisora()."'";
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
public function selectAutoridadesemisoras($autoridadesemisorasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveAutoridadEmisora,desAutoridadEmisora,activo,fechaRegistro,fechaActualizacion FROM tblautoridadesemisoras ";
if(($autoridadesemisorasDto->getcveAutoridadEmisora()!="") ||($autoridadesemisorasDto->getdesAutoridadEmisora()!="") ||($autoridadesemisorasDto->getactivo()!="") ||($autoridadesemisorasDto->getfechaRegistro()!="") ||($autoridadesemisorasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($autoridadesemisorasDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora='".$autoridadesemisorasDto->getCveAutoridadEmisora()."'";
if(($autoridadesemisorasDto->getDesAutoridadEmisora()!="") ||($autoridadesemisorasDto->getActivo()!="") ||($autoridadesemisorasDto->getFechaRegistro()!="") ||($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autoridadesemisorasDto->getdesAutoridadEmisora()!=""){
$sql.="desAutoridadEmisora='".$autoridadesemisorasDto->getDesAutoridadEmisora()."'";
if(($autoridadesemisorasDto->getActivo()!="") ||($autoridadesemisorasDto->getFechaRegistro()!="") ||($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autoridadesemisorasDto->getactivo()!=""){
$sql.="activo='".$autoridadesemisorasDto->getActivo()."'";
if(($autoridadesemisorasDto->getFechaRegistro()!="") ||($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autoridadesemisorasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$autoridadesemisorasDto->getFechaRegistro()."'";
if(($autoridadesemisorasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autoridadesemisorasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$autoridadesemisorasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AutoridadesemisorasDTO();
$tmp[$contador]->setCveAutoridadEmisora($row["cveAutoridadEmisora"]);
$tmp[$contador]->setDesAutoridadEmisora($row["desAutoridadEmisora"]);
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