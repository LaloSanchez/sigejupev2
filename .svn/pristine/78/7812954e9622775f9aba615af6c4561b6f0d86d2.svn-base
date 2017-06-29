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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/delitoscateos/DelitoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DelitoscateosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDelitoscateos($delitoscateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldelitoscateos(";
if($delitoscateosDto->getidDelitoCateo()!=""){
$sql.="idDelitoCateo";
if(($delitoscateosDto->getIdSolicitudCateo()!="") ||($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo";
if(($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getcveDelito()!=""){
$sql.="cveDelito";
if(($delitoscateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($delitoscateosDto->getidDelitoCateo()!=""){
$sql.="'".$delitoscateosDto->getidDelitoCateo()."'";
if(($delitoscateosDto->getIdSolicitudCateo()!="") ||($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getidSolicitudCateo()!=""){
$sql.="'".$delitoscateosDto->getidSolicitudCateo()."'";
if(($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getcveDelito()!=""){
$sql.="'".$delitoscateosDto->getcveDelito()."'";
if(($delitoscateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getactivo()!=""){
$sql.="'".$delitoscateosDto->getactivo()."'";
}
if($delitoscateosDto->getfechaRegistro()!=""){
}
if($delitoscateosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitoscateosDTO();
$tmp->setidDelitoCateo($this->_proveedor->lastID());
$tmp = $this->selectDelitoscateos($tmp,"",$this->_proveedor);
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
public function updateDelitoscateos($delitoscateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldelitoscateos SET ";
if($delitoscateosDto->getidDelitoCateo()!=""){
$sql.="idDelitoCateo='".$delitoscateosDto->getidDelitoCateo()."'";
if(($delitoscateosDto->getIdSolicitudCateo()!="") ||($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ||($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$delitoscateosDto->getidSolicitudCateo()."'";
if(($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ||($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getcveDelito()!=""){
$sql.="cveDelito='".$delitoscateosDto->getcveDelito()."'";
if(($delitoscateosDto->getActivo()!="") ||($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getactivo()!=""){
$sql.="activo='".$delitoscateosDto->getactivo()."'";
if(($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$delitoscateosDto->getfechaRegistro()."'";
if(($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoscateosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitoscateosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idDelitoCateo='".$delitoscateosDto->getidDelitoCateo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitoscateosDTO();
$tmp->setidDelitoCateo($delitoscateosDto->getidDelitoCateo());
$tmp = $this->selectDelitoscateos($tmp,"",$this->_proveedor);
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
public function deleteDelitoscateos($delitoscateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldelitoscateos  WHERE idDelitoCateo='".$delitoscateosDto->getidDelitoCateo()."'";
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
public function selectDelitoscateos($delitoscateosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDelitoCateo,idSolicitudCateo,cveDelito,activo,fechaRegistro,fechaActualizacion FROM tbldelitoscateos ";
if(($delitoscateosDto->getidDelitoCateo()!="") ||($delitoscateosDto->getidSolicitudCateo()!="") ||($delitoscateosDto->getcveDelito()!="") ||($delitoscateosDto->getactivo()!="") ||($delitoscateosDto->getfechaRegistro()!="") ||($delitoscateosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($delitoscateosDto->getidDelitoCateo()!=""){
$sql.="idDelitoCateo='".$delitoscateosDto->getIdDelitoCateo()."'";
if(($delitoscateosDto->getIdSolicitudCateo()!="") ||($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ||($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoscateosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$delitoscateosDto->getIdSolicitudCateo()."'";
if(($delitoscateosDto->getCveDelito()!="") ||($delitoscateosDto->getActivo()!="") ||($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoscateosDto->getcveDelito()!=""){
$sql.="cveDelito='".$delitoscateosDto->getCveDelito()."'";
if(($delitoscateosDto->getActivo()!="") ||($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoscateosDto->getactivo()!=""){
$sql.="activo='".$delitoscateosDto->getActivo()."'";
if(($delitoscateosDto->getFechaRegistro()!="") ||($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoscateosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$delitoscateosDto->getFechaRegistro()."'";
if(($delitoscateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoscateosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitoscateosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new DelitoscateosDTO();
$tmp[$contador]->setIdDelitoCateo($row["idDelitoCateo"]);
$tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
$tmp[$contador]->setCveDelito($row["cveDelito"]);
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