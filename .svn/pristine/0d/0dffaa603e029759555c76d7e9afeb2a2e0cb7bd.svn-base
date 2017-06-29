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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/controlsalas/ControlsalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ControlsalasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertControlsalas($controlsalasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcontrolsalas(";
if($controlsalasDto->getidControlSala()!=""){
$sql.="idControlSala";
if(($controlsalasDto->getAnio()!="") ||($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getanio()!=""){
$sql.="anio";
if(($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcveMes()!=""){
$sql.="cveMes";
if(($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcveSala()!=""){
$sql.="cveSala";
if(($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->gettotalHoras()!=""){
$sql.="totalHoras";
if(($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcontrol()!=""){
$sql.="control";
if(($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->gettotalAsignados()!=""){
$sql.="totalAsignados";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($controlsalasDto->getidControlSala()!=""){
$sql.="'".$controlsalasDto->getidControlSala()."'";
if(($controlsalasDto->getAnio()!="") ||($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getanio()!=""){
$sql.="'".$controlsalasDto->getanio()."'";
if(($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcveMes()!=""){
$sql.="'".$controlsalasDto->getcveMes()."'";
if(($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcveSala()!=""){
$sql.="'".$controlsalasDto->getcveSala()."'";
if(($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->gettotalHoras()!=""){
$sql.="'".$controlsalasDto->gettotalHoras()."'";
if(($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcontrol()!=""){
$sql.="'".$controlsalasDto->getcontrol()."'";
if(($controlsalasDto->getTotalAsignados()!="") ){
$sql.=",";
}
}
if($controlsalasDto->gettotalAsignados()!=""){
$sql.="'".$controlsalasDto->gettotalAsignados()."'";
}
if($controlsalasDto->getfechaRegistro()!=""){
}
if($controlsalasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ControlsalasDTO();
$tmp->setidControlSala($this->_proveedor->lastID());
$tmp = $this->selectControlsalas($tmp,"",$this->_proveedor);
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
public function updateControlsalas($controlsalasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcontrolsalas SET ";
if($controlsalasDto->getidControlSala()!=""){
$sql.="idControlSala='".$controlsalasDto->getidControlSala()."'";
if(($controlsalasDto->getAnio()!="") ||($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getanio()!=""){
$sql.="anio='".$controlsalasDto->getanio()."'";
if(($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcveMes()!=""){
$sql.="cveMes='".$controlsalasDto->getcveMes()."'";
if(($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcveSala()!=""){
$sql.="cveSala='".$controlsalasDto->getcveSala()."'";
if(($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->gettotalHoras()!=""){
$sql.="totalHoras='".$controlsalasDto->gettotalHoras()."'";
if(($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getcontrol()!=""){
$sql.="control='".$controlsalasDto->getcontrol()."'";
if(($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->gettotalAsignados()!=""){
$sql.="totalAsignados='".$controlsalasDto->gettotalAsignados()."'";
if(($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$controlsalasDto->getfechaRegistro()."'";
if(($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($controlsalasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$controlsalasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idControlSala='".$controlsalasDto->getidControlSala()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ControlsalasDTO();
$tmp->setidControlSala($controlsalasDto->getidControlSala());
$tmp = $this->selectControlsalas($tmp,"",$this->_proveedor);
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
public function deleteControlsalas($controlsalasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcontrolsalas  WHERE idControlSala='".$controlsalasDto->getidControlSala()."'";
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
public function selectControlsalas($controlsalasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idControlSala,anio,cveMes,cveSala,totalHoras,control,totalAsignados,fechaRegistro,fechaActualizacion FROM tblcontrolsalas ";
if(($controlsalasDto->getidControlSala()!="") ||($controlsalasDto->getanio()!="") ||($controlsalasDto->getcveMes()!="") ||($controlsalasDto->getcveSala()!="") ||($controlsalasDto->gettotalHoras()!="") ||($controlsalasDto->getcontrol()!="") ||($controlsalasDto->gettotalAsignados()!="") ||($controlsalasDto->getfechaRegistro()!="") ||($controlsalasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($controlsalasDto->getidControlSala()!=""){
$sql.="idControlSala='".$controlsalasDto->getIdControlSala()."'";
if(($controlsalasDto->getAnio()!="") ||($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->getanio()!=""){
$sql.="anio='".$controlsalasDto->getAnio()."'";
if(($controlsalasDto->getCveMes()!="") ||($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->getcveMes()!=""){
$sql.="cveMes='".$controlsalasDto->getCveMes()."'";
if(($controlsalasDto->getCveSala()!="") ||($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->getcveSala()!=""){
$sql.="cveSala='".$controlsalasDto->getCveSala()."'";
if(($controlsalasDto->getTotalHoras()!="") ||($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->gettotalHoras()!=""){
$sql.="totalHoras='".$controlsalasDto->getTotalHoras()."'";
if(($controlsalasDto->getControl()!="") ||($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->getcontrol()!=""){
$sql.="control='".$controlsalasDto->getControl()."'";
if(($controlsalasDto->getTotalAsignados()!="") ||($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->gettotalAsignados()!=""){
$sql.="totalAsignados='".$controlsalasDto->getTotalAsignados()."'";
if(($controlsalasDto->getFechaRegistro()!="") ||($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$controlsalasDto->getFechaRegistro()."'";
if(($controlsalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($controlsalasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$controlsalasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ControlsalasDTO();
$tmp[$contador]->setIdControlSala($row["idControlSala"]);
$tmp[$contador]->setAnio($row["anio"]);
$tmp[$contador]->setCveMes($row["cveMes"]);
$tmp[$contador]->setCveSala($row["cveSala"]);
$tmp[$contador]->setTotalHoras($row["totalHoras"]);
$tmp[$contador]->setControl($row["control"]);
$tmp[$contador]->setTotalAsignados($row["totalAsignados"]);
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