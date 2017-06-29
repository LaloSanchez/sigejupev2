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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ViolenciahomicidiosdolososDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertViolenciahomicidiosdolosos($violenciahomicidiosdolososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblviolenciahomicidiosdolosos(";
if($violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()!=""){
$sql.="idViolenciaHomicidioDoloso";
if(($violenciahomicidiosdolososDto->getIdViolenciaDeGenero()!="") ||($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getidViolenciaDeGenero()!=""){
$sql.="idViolenciaDeGenero";
if(($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="cveHomicidioDoloso";
if(($violenciahomicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()!=""){
$sql.="'".$violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()."'";
if(($violenciahomicidiosdolososDto->getIdViolenciaDeGenero()!="") ||($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getidViolenciaDeGenero()!=""){
$sql.="'".$violenciahomicidiosdolososDto->getidViolenciaDeGenero()."'";
if(($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="'".$violenciahomicidiosdolososDto->getcveHomicidioDoloso()."'";
if(($violenciahomicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getactivo()!=""){
$sql.="'".$violenciahomicidiosdolososDto->getactivo()."'";
}
if($violenciahomicidiosdolososDto->getfechaRegistro()!=""){
}
if($violenciahomicidiosdolososDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ViolenciahomicidiosdolososDTO();
$tmp->setidViolenciaHomicidioDoloso($this->_proveedor->lastID());
$tmp = $this->selectViolenciahomicidiosdolosos($tmp,"",$this->_proveedor);
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
public function updateViolenciahomicidiosdolosos($violenciahomicidiosdolososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblviolenciahomicidiosdolosos SET ";
if($violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()!=""){
$sql.="idViolenciaHomicidioDoloso='".$violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()."'";
if(($violenciahomicidiosdolososDto->getIdViolenciaDeGenero()!="") ||($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ||($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getidViolenciaDeGenero()!=""){
$sql.="idViolenciaDeGenero='".$violenciahomicidiosdolososDto->getidViolenciaDeGenero()."'";
if(($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ||($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="cveHomicidioDoloso='".$violenciahomicidiosdolososDto->getcveHomicidioDoloso()."'";
if(($violenciahomicidiosdolososDto->getActivo()!="") ||($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getactivo()!=""){
$sql.="activo='".$violenciahomicidiosdolososDto->getactivo()."'";
if(($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$violenciahomicidiosdolososDto->getfechaRegistro()."'";
if(($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($violenciahomicidiosdolososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$violenciahomicidiosdolososDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idViolenciaHomicidioDoloso='".$violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ViolenciahomicidiosdolososDTO();
$tmp->setidViolenciaHomicidioDoloso($violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso());
$tmp = $this->selectViolenciahomicidiosdolosos($tmp,"",$this->_proveedor);
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
public function deleteViolenciahomicidiosdolosos($violenciahomicidiosdolososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblviolenciahomicidiosdolosos  WHERE idViolenciaHomicidioDoloso='".$violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()."'";
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
public function selectViolenciahomicidiosdolosos($violenciahomicidiosdolososDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idViolenciaHomicidioDoloso,idViolenciaDeGenero,cveHomicidioDoloso,activo,fechaRegistro,fechaActualizacion FROM tblviolenciahomicidiosdolosos ";
if(($violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getidViolenciaDeGenero()!="") ||($violenciahomicidiosdolososDto->getcveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getactivo()!="") ||($violenciahomicidiosdolososDto->getfechaRegistro()!="") ||($violenciahomicidiosdolososDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($violenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()!=""){
$sql.="idViolenciaHomicidioDoloso='".$violenciahomicidiosdolososDto->getIdViolenciaHomicidioDoloso()."'";
if(($violenciahomicidiosdolososDto->getIdViolenciaDeGenero()!="") ||($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ||($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($violenciahomicidiosdolososDto->getidViolenciaDeGenero()!=""){
$sql.="idViolenciaDeGenero='".$violenciahomicidiosdolososDto->getIdViolenciaDeGenero()."'";
if(($violenciahomicidiosdolososDto->getCveHomicidioDoloso()!="") ||($violenciahomicidiosdolososDto->getActivo()!="") ||($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($violenciahomicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="cveHomicidioDoloso='".$violenciahomicidiosdolososDto->getCveHomicidioDoloso()."'";
if(($violenciahomicidiosdolososDto->getActivo()!="") ||($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($violenciahomicidiosdolososDto->getactivo()!=""){
$sql.="activo='".$violenciahomicidiosdolososDto->getActivo()."'";
if(($violenciahomicidiosdolososDto->getFechaRegistro()!="") ||($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($violenciahomicidiosdolososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$violenciahomicidiosdolososDto->getFechaRegistro()."'";
if(($violenciahomicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($violenciahomicidiosdolososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$violenciahomicidiosdolososDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ViolenciahomicidiosdolososDTO();
$tmp[$contador]->setIdViolenciaHomicidioDoloso($row["idViolenciaHomicidioDoloso"]);
$tmp[$contador]->setIdViolenciaDeGenero($row["idViolenciaDeGenero"]);
$tmp[$contador]->setCveHomicidioDoloso($row["cveHomicidioDoloso"]);
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