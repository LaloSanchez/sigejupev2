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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/objetos/ObjetosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ObjetosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertObjetos($objetosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblobjetos(";
if($objetosDto->getidObjeto()!=""){
$sql.="idObjeto";
if(($objetosDto->getIdSolicitudCateo()!="") ||($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo";
if(($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getdesObjeto()!=""){
$sql.="desObjeto";
if(($objetosDto->getDomicilio()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getdomicilio()!=""){
$sql.="domicilio";
if(($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getcveOrigen()!=""){
$sql.="cveOrigen";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($objetosDto->getidObjeto()!=""){
$sql.="'".$objetosDto->getidObjeto()."'";
if(($objetosDto->getIdSolicitudCateo()!="") ||($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getidSolicitudCateo()!=""){
$sql.="'".$objetosDto->getidSolicitudCateo()."'";
if(($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getdesObjeto()!=""){
$sql.="'".$objetosDto->getdesObjeto()."'";
if(($objetosDto->getDomicilio()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getdomicilio()!=""){
$sql.="'".$objetosDto->getdomicilio()."'";
if(($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getfechaRegistro()!=""){
if(($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getfechaActualizacion()!=""){
if(($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getcveOrigen()!=""){
$sql.="'".$objetosDto->getcveOrigen()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ObjetosDTO();
$tmp->setidObjeto($this->_proveedor->lastID());
$tmp = $this->selectObjetos($tmp,"",$this->_proveedor);
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
public function updateObjetos($objetosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblobjetos SET ";
if($objetosDto->getidObjeto()!=""){
$sql.="idObjeto='".$objetosDto->getidObjeto()."'";
if(($objetosDto->getIdSolicitudCateo()!="") ||($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$objetosDto->getidSolicitudCateo()."'";
if(($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getdesObjeto()!=""){
$sql.="desObjeto='".$objetosDto->getdesObjeto()."'";
if(($objetosDto->getDomicilio()!="") ||($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getdomicilio()!=""){
$sql.="domicilio='".$objetosDto->getdomicilio()."'";
if(($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$objetosDto->getfechaRegistro()."'";
if(($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$objetosDto->getfechaActualizacion()."'";
if(($objetosDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($objetosDto->getcveOrigen()!=""){
$sql.="cveOrigen='".$objetosDto->getcveOrigen()."'";
}
$sql.=" WHERE idObjeto='".$objetosDto->getidObjeto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ObjetosDTO();
$tmp->setidObjeto($objetosDto->getidObjeto());
$tmp = $this->selectObjetos($tmp,"",$this->_proveedor);
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
public function deleteObjetos($objetosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblobjetos  WHERE idObjeto='".$objetosDto->getidObjeto()."'";
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
public function selectObjetos($objetosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idObjeto,idSolicitudCateo,desObjeto,domicilio,fechaRegistro,fechaActualizacion,cveOrigen FROM tblobjetos ";
if(($objetosDto->getidObjeto()!="") ||($objetosDto->getidSolicitudCateo()!="") ||($objetosDto->getdesObjeto()!="") ||($objetosDto->getdomicilio()!="") ||($objetosDto->getfechaRegistro()!="") ||($objetosDto->getfechaActualizacion()!="") ||($objetosDto->getcveOrigen()!="") ){
$sql.=" WHERE ";
}
if($objetosDto->getidObjeto()!=""){
$sql.="idObjeto='".$objetosDto->getIdObjeto()."'";
if(($objetosDto->getIdSolicitudCateo()!="") ||($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($objetosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$objetosDto->getIdSolicitudCateo()."'";
if(($objetosDto->getDesObjeto()!="") ||($objetosDto->getDomicilio()!="") ||($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($objetosDto->getdesObjeto()!=""){
$sql.="desObjeto='".$objetosDto->getDesObjeto()."'";
if(($objetosDto->getDomicilio()!="") ||($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($objetosDto->getdomicilio()!=""){
$sql.="domicilio='".$objetosDto->getDomicilio()."'";
if(($objetosDto->getFechaRegistro()!="") ||($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($objetosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$objetosDto->getFechaRegistro()."'";
if(($objetosDto->getFechaActualizacion()!="") ||($objetosDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($objetosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$objetosDto->getFechaActualizacion()."'";
if(($objetosDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($objetosDto->getcveOrigen()!=""){
$sql.="cveOrigen='".$objetosDto->getCveOrigen()."'";
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
$tmp[$contador] = new ObjetosDTO();
$tmp[$contador]->setIdObjeto($row["idObjeto"]);
$tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
$tmp[$contador]->setDesObjeto($row["desObjeto"]);
$tmp[$contador]->setDomicilio($row["domicilio"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setCveOrigen($row["cveOrigen"]);
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