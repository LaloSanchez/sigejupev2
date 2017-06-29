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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/etapastiposcarpetas/EtapastiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EtapastiposcarpetasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEtapastiposcarpetas($etapastiposcarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbletapastiposcarpetas(";
if($etapastiposcarpetasDto->getidEtapaTipoCarpeta()!=""){
$sql.="idEtapaTipoCarpeta";
if(($etapastiposcarpetasDto->getCveEtapaProcesal()!="") ||($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal";
if(($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getcveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($etapastiposcarpetasDto->getidEtapaTipoCarpeta()!=""){
$sql.="'".$etapastiposcarpetasDto->getidEtapaTipoCarpeta()."'";
if(($etapastiposcarpetasDto->getCveEtapaProcesal()!="") ||($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getcveEtapaProcesal()!=""){
$sql.="'".$etapastiposcarpetasDto->getcveEtapaProcesal()."'";
if(($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getcveTipoCarpeta()!=""){
$sql.="'".$etapastiposcarpetasDto->getcveTipoCarpeta()."'";
}
if($etapastiposcarpetasDto->getfechaRegistro()!=""){
}
if($etapastiposcarpetasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EtapastiposcarpetasDTO();
$tmp->setidEtapaTipoCarpeta($this->_proveedor->lastID());
$tmp = $this->selectEtapastiposcarpetas($tmp,"",$this->_proveedor);
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
public function updateEtapastiposcarpetas($etapastiposcarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbletapastiposcarpetas SET ";
if($etapastiposcarpetasDto->getidEtapaTipoCarpeta()!=""){
$sql.="idEtapaTipoCarpeta='".$etapastiposcarpetasDto->getidEtapaTipoCarpeta()."'";
if(($etapastiposcarpetasDto->getCveEtapaProcesal()!="") ||($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ||($etapastiposcarpetasDto->getFechaRegistro()!="") ||($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$etapastiposcarpetasDto->getcveEtapaProcesal()."'";
if(($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ||($etapastiposcarpetasDto->getFechaRegistro()!="") ||($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getcveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$etapastiposcarpetasDto->getcveTipoCarpeta()."'";
if(($etapastiposcarpetasDto->getFechaRegistro()!="") ||($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$etapastiposcarpetasDto->getfechaRegistro()."'";
if(($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapastiposcarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$etapastiposcarpetasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idEtapaTipoCarpeta='".$etapastiposcarpetasDto->getidEtapaTipoCarpeta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EtapastiposcarpetasDTO();
$tmp->setidEtapaTipoCarpeta($etapastiposcarpetasDto->getidEtapaTipoCarpeta());
$tmp = $this->selectEtapastiposcarpetas($tmp,"",$this->_proveedor);
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
public function deleteEtapastiposcarpetas($etapastiposcarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbletapastiposcarpetas  WHERE idEtapaTipoCarpeta='".$etapastiposcarpetasDto->getidEtapaTipoCarpeta()."'";
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
public function selectEtapastiposcarpetas($etapastiposcarpetasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idEtapaTipoCarpeta,cveEtapaProcesal,cveTipoCarpeta,fechaRegistro,fechaActualizacion FROM tbletapastiposcarpetas ";
if(($etapastiposcarpetasDto->getidEtapaTipoCarpeta()!="") ||($etapastiposcarpetasDto->getcveEtapaProcesal()!="") ||($etapastiposcarpetasDto->getcveTipoCarpeta()!="") ||($etapastiposcarpetasDto->getfechaRegistro()!="") ||($etapastiposcarpetasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($etapastiposcarpetasDto->getidEtapaTipoCarpeta()!=""){
$sql.="idEtapaTipoCarpeta='".$etapastiposcarpetasDto->getIdEtapaTipoCarpeta()."'";
if(($etapastiposcarpetasDto->getCveEtapaProcesal()!="") ||($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ||($etapastiposcarpetasDto->getFechaRegistro()!="") ||($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapastiposcarpetasDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$etapastiposcarpetasDto->getCveEtapaProcesal()."'";
if(($etapastiposcarpetasDto->getCveTipoCarpeta()!="") ||($etapastiposcarpetasDto->getFechaRegistro()!="") ||($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapastiposcarpetasDto->getcveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$etapastiposcarpetasDto->getCveTipoCarpeta()."'";
if(($etapastiposcarpetasDto->getFechaRegistro()!="") ||($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapastiposcarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$etapastiposcarpetasDto->getFechaRegistro()."'";
if(($etapastiposcarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapastiposcarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$etapastiposcarpetasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EtapastiposcarpetasDTO();
$tmp[$contador]->setIdEtapaTipoCarpeta($row["idEtapaTipoCarpeta"]);
$tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
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