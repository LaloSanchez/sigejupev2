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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SexualesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSexuales($sexualesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsexuales(";
if($sexualesDto->getidSexual()!=""){
$sql.="idSexual";
if(($sexualesDto->getCveModalidadAcoso()!="") ||($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getcveModalidadAcoso()!=""){
$sql.="cveModalidadAcoso";
if(($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getcveAmbitoAcoso()!=""){
$sql.="cveAmbitoAcoso";
if(($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getidImpOfeDelSolicitud()!=""){
$sql.="idImpOfeDelSolicitud";
if(($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($sexualesDto->getidSexual()!=""){
$sql.="'".$sexualesDto->getidSexual()."'";
if(($sexualesDto->getCveModalidadAcoso()!="") ||($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getcveModalidadAcoso()!=""){
$sql.="'".$sexualesDto->getcveModalidadAcoso()."'";
if(($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getcveAmbitoAcoso()!=""){
$sql.="'".$sexualesDto->getcveAmbitoAcoso()."'";
if(($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getidImpOfeDelSolicitud()!=""){
$sql.="'".$sexualesDto->getidImpOfeDelSolicitud()."'";
if(($sexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sexualesDto->getactivo()!=""){
$sql.="'".$sexualesDto->getactivo()."'";
}
if($sexualesDto->getfechaRegistro()!=""){
}
if($sexualesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SexualesDTO();
$tmp->setidSexual($this->_proveedor->lastID());
$tmp = $this->selectSexuales($tmp,"",$this->_proveedor);
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
public function updateSexuales($sexualesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsexuales SET ";
if($sexualesDto->getidSexual()!=""){
$sql.="idSexual='".$sexualesDto->getidSexual()."'";
if(($sexualesDto->getCveModalidadAcoso()!="") ||($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sexualesDto->getcveModalidadAcoso()!=""){
$sql.="cveModalidadAcoso='".$sexualesDto->getcveModalidadAcoso()."'";
if(($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sexualesDto->getcveAmbitoAcoso()!=""){
$sql.="cveAmbitoAcoso='".$sexualesDto->getcveAmbitoAcoso()."'";
if(($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sexualesDto->getidImpOfeDelSolicitud()!=""){
$sql.="idImpOfeDelSolicitud='".$sexualesDto->getidImpOfeDelSolicitud()."'";
if(($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sexualesDto->getactivo()!=""){
$sql.="activo='".$sexualesDto->getactivo()."'";
if(($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sexualesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$sexualesDto->getfechaRegistro()."'";
if(($sexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sexualesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sexualesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idSexual='".$sexualesDto->getidSexual()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SexualesDTO();
$tmp->setidSexual($sexualesDto->getidSexual());
$tmp = $this->selectSexuales($tmp,"",$this->_proveedor);
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
public function deleteSexuales($sexualesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsexuales  WHERE idSexual='".$sexualesDto->getidSexual()."'";
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
public function selectSexuales($sexualesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idSexual,cveModalidadAcoso,cveAmbitoAcoso,idImpOfeDelSolicitud,activo,fechaRegistro,fechaActualizacion FROM tblsexuales ";
if(($sexualesDto->getidSexual()!="") ||($sexualesDto->getcveModalidadAcoso()!="") ||($sexualesDto->getcveAmbitoAcoso()!="") ||($sexualesDto->getidImpOfeDelSolicitud()!="") ||($sexualesDto->getactivo()!="") ||($sexualesDto->getfechaRegistro()!="") ||($sexualesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($sexualesDto->getidSexual()!=""){
$sql.="idSexual='".$sexualesDto->getIdSexual()."'";
if(($sexualesDto->getCveModalidadAcoso()!="") ||($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sexualesDto->getcveModalidadAcoso()!=""){
$sql.="cveModalidadAcoso='".$sexualesDto->getCveModalidadAcoso()."'";
if(($sexualesDto->getCveAmbitoAcoso()!="") ||($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sexualesDto->getcveAmbitoAcoso()!=""){
$sql.="cveAmbitoAcoso='".$sexualesDto->getCveAmbitoAcoso()."'";
if(($sexualesDto->getIdImpOfeDelSolicitud()!="") ||($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sexualesDto->getidImpOfeDelSolicitud()!=""){
$sql.="idImpOfeDelSolicitud='".$sexualesDto->getIdImpOfeDelSolicitud()."'";
if(($sexualesDto->getActivo()!="") ||($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sexualesDto->getactivo()!=""){
$sql.="activo='".$sexualesDto->getActivo()."'";
if(($sexualesDto->getFechaRegistro()!="") ||($sexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sexualesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$sexualesDto->getFechaRegistro()."'";
if(($sexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sexualesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sexualesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new SexualesDTO();
$tmp[$contador]->setIdSexual($row["idSexual"]);
$tmp[$contador]->setCveModalidadAcoso($row["cveModalidadAcoso"]);
$tmp[$contador]->setCveAmbitoAcoso($row["cveAmbitoAcoso"]);
$tmp[$contador]->setIdImpOfeDelSolicitud($row["idImpOfeDelSolicitud"]);
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