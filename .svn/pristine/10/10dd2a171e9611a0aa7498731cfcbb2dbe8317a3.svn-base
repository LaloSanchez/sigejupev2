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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/controlescargas/ControlescargasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ControlescargasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertControlescargas($controlescargasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcontrolescargas(";
if($controlescargasDto->getIdControlCarga()!=""){
$sql.="idControlCarga";
if(($controlescargasDto->getIdRegionSala()!="") ||($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getIdRegionSala()!=""){
$sql.="idRegionSala";
if(($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveDelito()!=""){
$sql.="cveDelito";
if(($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado";
if(($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getTotalAsignados()!=""){
$sql.="totalAsignados";
if(($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getAnioControl()!=""){
$sql.="anioControl";
if(($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveConfiguracionCarga()!=""){
$sql.="cveConfiguracionCarga";
}
$sql.=",fecharegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($controlescargasDto->getIdControlCarga()!=""){
$sql.="'".$controlescargasDto->getIdControlCarga()."'";
if(($controlescargasDto->getIdRegionSala()!="") ||($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getIdRegionSala()!=""){
$sql.="'".$controlescargasDto->getIdRegionSala()."'";
if(($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveTipoCarpeta()!=""){
$sql.="'".$controlescargasDto->getCveTipoCarpeta()."'";
if(($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveDelito()!=""){
$sql.="'".$controlescargasDto->getCveDelito()."'";
if(($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveJuzgado()!=""){
$sql.="'".$controlescargasDto->getCveJuzgado()."'";
if(($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getTotalAsignados()!=""){
$sql.="'".$controlescargasDto->getTotalAsignados()."'";
if(($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getAnioControl()!=""){
$sql.="'".$controlescargasDto->getAnioControl()."'";
if(($controlescargasDto->getCveConfiguracionCarga()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveConfiguracionCarga()!=""){
$sql.="'".$controlescargasDto->getCveConfiguracionCarga()."'";
}
if($controlescargasDto->getFecharegistro()!=""){
}
if($controlescargasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ControlescargasDTO();
$tmp->setidControlCarga($this->_proveedor->lastID());
$tmp = $this->selectControlescargas($tmp,"",$this->_proveedor);
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
public function updateControlescargas($controlescargasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcontrolescargas SET ";
if($controlescargasDto->getIdControlCarga()!=""){
$sql.="idControlCarga='".$controlescargasDto->getIdControlCarga()."'";
if(($controlescargasDto->getIdRegionSala()!="") ||($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getIdRegionSala()!=""){
$sql.="idRegionSala='".$controlescargasDto->getIdRegionSala()."'";
if(($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$controlescargasDto->getCveTipoCarpeta()."'";
if(($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveDelito()!=""){
$sql.="cveDelito='".$controlescargasDto->getCveDelito()."'";
if(($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$controlescargasDto->getCveJuzgado()."'";
if(($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getTotalAsignados()!=""){
$sql.="totalAsignados='".$controlescargasDto->getTotalAsignados()."'";
if(($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getAnioControl()!=""){
$sql.="anioControl='".$controlescargasDto->getAnioControl()."'";
if(($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getCveConfiguracionCarga()!=""){
$sql.="cveConfiguracionCarga='".$controlescargasDto->getCveConfiguracionCarga()."'";
if(($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getFecharegistro()!=""){
$sql.="fecharegistro='".$controlescargasDto->getFecharegistro()."'";
if(($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlescargasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$controlescargasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idControlCarga='".$controlescargasDto->getIdControlCarga()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ControlescargasDTO();
$tmp->setidControlCarga($controlescargasDto->getIdControlCarga());
$tmp = $this->selectControlescargas($tmp,"",$this->_proveedor);
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
public function deleteControlescargas($controlescargasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcontrolescargas  WHERE idControlCarga='".$controlescargasDto->getIdControlCarga()."'";
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
public function selectControlescargas($controlescargasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idControlCarga,idRegionSala,cveTipoCarpeta,cveDelito,cveJuzgado,totalAsignados,anioControl,cveConfiguracionCarga,fecharegistro,fechaActualizacion FROM tblcontrolescargas ";
if(($controlescargasDto->getIdControlCarga()!="") ||($controlescargasDto->getIdRegionSala()!="") ||($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($controlescargasDto->getIdControlCarga()!=""){
$sql.="idControlCarga='".$controlescargasDto->getIdControlCarga()."'";
if(($controlescargasDto->getIdRegionSala()!="") ||($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getIdRegionSala()!=""){
$sql.="idRegionSala='".$controlescargasDto->getIdRegionSala()."'";
if(($controlescargasDto->getCveTipoCarpeta()!="") ||($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$controlescargasDto->getCveTipoCarpeta()."'";
if(($controlescargasDto->getCveDelito()!="") ||($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getCveDelito()!=""){
$sql.="cveDelito='".$controlescargasDto->getCveDelito()."'";
if(($controlescargasDto->getCveJuzgado()!="") ||($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$controlescargasDto->getCveJuzgado()."'";
if(($controlescargasDto->getTotalAsignados()!="") ||($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getTotalAsignados()!=""){
$sql.="totalAsignados='".$controlescargasDto->getTotalAsignados()."'";
if(($controlescargasDto->getAnioControl()!="") ||($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getAnioControl()!=""){
$sql.="anioControl='".$controlescargasDto->getAnioControl()."'";
if(($controlescargasDto->getCveConfiguracionCarga()!="") ||($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getCveConfiguracionCarga()!=""){
$sql.="cveConfiguracionCarga='".$controlescargasDto->getCveConfiguracionCarga()."'";
if(($controlescargasDto->getFecharegistro()!="") ||($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getFecharegistro()!=""){
$sql.="fecharegistro='".$controlescargasDto->getFecharegistro()."'";
if(($controlescargasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlescargasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$controlescargasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ControlescargasDTO();
$tmp[$contador]->setIdControlCarga($row["idControlCarga"]);
$tmp[$contador]->setIdRegionSala($row["idRegionSala"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
$tmp[$contador]->setCveDelito($row["cveDelito"]);
$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
$tmp[$contador]->setTotalAsignados($row["totalAsignados"]);
$tmp[$contador]->setAnioControl($row["anioControl"]);
$tmp[$contador]->setCveConfiguracionCarga($row["cveConfiguracionCarga"]);
$tmp[$contador]->setFecharegistro($row["fecharegistro"]);
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