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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/numerosdefensores/NumerosdefensoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NumerosdefensoresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertNumerosdefensores($numerosdefensoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblnumerosdefensores(";
if($numerosdefensoresDto->getIdnumerosdefensores()!=""){
$sql.="idnumerosdefensores";
if(($numerosdefensoresDto->getIdImputadoCarpeta()!="") ||($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial";
if(($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!=""){
$sql.="idDefensorImputadoCarpeta";
if(($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getNumeroDefensor()!=""){
$sql.="numeroDefensor";
if(($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getEstatusEnvio()!=""){
$sql.="estatusEnvio";
}
$sql.=") VALUES(";
if($numerosdefensoresDto->getIdnumerosdefensores()!=""){
$sql.="'".$numerosdefensoresDto->getIdnumerosdefensores()."'";
if(($numerosdefensoresDto->getIdImputadoCarpeta()!="") ||($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdImputadoCarpeta()!=""){
$sql.="'".$numerosdefensoresDto->getIdImputadoCarpeta()."'";
if(($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdCarpetaJudicial()!=""){
$sql.="'".$numerosdefensoresDto->getIdCarpetaJudicial()."'";
if(($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!=""){
$sql.="'".$numerosdefensoresDto->getIdDefensorImputadoCarpeta()."'";
if(($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getNumeroDefensor()!=""){
$sql.="'".$numerosdefensoresDto->getNumeroDefensor()."'";
if(($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getEstatusEnvio()!=""){
$sql.="'".$numerosdefensoresDto->getEstatusEnvio()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NumerosdefensoresDTO();
$tmp->setidnumerosdefensores($this->_proveedor->lastID());
$tmp = $this->selectNumerosdefensores($tmp,"",$this->_proveedor);
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
public function updateNumerosdefensores($numerosdefensoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblnumerosdefensores SET ";
if($numerosdefensoresDto->getIdnumerosdefensores()!=""){
$sql.="idnumerosdefensores='".$numerosdefensoresDto->getIdnumerosdefensores()."'";
if(($numerosdefensoresDto->getIdImputadoCarpeta()!="") ||($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$numerosdefensoresDto->getIdImputadoCarpeta()."'";
if(($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$numerosdefensoresDto->getIdCarpetaJudicial()."'";
if(($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!=""){
$sql.="idDefensorImputadoCarpeta='".$numerosdefensoresDto->getIdDefensorImputadoCarpeta()."'";
if(($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getNumeroDefensor()!=""){
$sql.="numeroDefensor='".$numerosdefensoresDto->getNumeroDefensor()."'";
if(($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=",";
}
}
if($numerosdefensoresDto->getEstatusEnvio()!=""){
$sql.="estatusEnvio='".$numerosdefensoresDto->getEstatusEnvio()."'";
}
$sql.=" WHERE idnumerosdefensores='".$numerosdefensoresDto->getIdnumerosdefensores()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NumerosdefensoresDTO();
$tmp->setidnumerosdefensores($numerosdefensoresDto->getIdnumerosdefensores());
$tmp = $this->selectNumerosdefensores($tmp,"",$this->_proveedor);
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
public function deleteNumerosdefensores($numerosdefensoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblnumerosdefensores  WHERE idnumerosdefensores='".$numerosdefensoresDto->getIdnumerosdefensores()."'";
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
public function selectNumerosdefensores($numerosdefensoresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idnumerosdefensores,idImputadoCarpeta,idCarpetaJudicial,idDefensorImputadoCarpeta,numeroDefensor,estatusEnvio FROM tblnumerosdefensores ";
if(($numerosdefensoresDto->getIdnumerosdefensores()!="") ||($numerosdefensoresDto->getIdImputadoCarpeta()!="") ||($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=" WHERE ";
}
if($numerosdefensoresDto->getIdnumerosdefensores()!=""){
$sql.="idnumerosdefensores='".$numerosdefensoresDto->getIdnumerosdefensores()."'";
if(($numerosdefensoresDto->getIdImputadoCarpeta()!="") ||($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=" AND ";
}
}
if($numerosdefensoresDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$numerosdefensoresDto->getIdImputadoCarpeta()."'";
if(($numerosdefensoresDto->getIdCarpetaJudicial()!="") ||($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=" AND ";
}
}
if($numerosdefensoresDto->getIdCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$numerosdefensoresDto->getIdCarpetaJudicial()."'";
if(($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!="") ||($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=" AND ";
}
}
if($numerosdefensoresDto->getIdDefensorImputadoCarpeta()!=""){
$sql.="idDefensorImputadoCarpeta='".$numerosdefensoresDto->getIdDefensorImputadoCarpeta()."'";
if(($numerosdefensoresDto->getNumeroDefensor()!="") ||($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=" AND ";
}
}
if($numerosdefensoresDto->getNumeroDefensor()!=""){
$sql.="numeroDefensor='".$numerosdefensoresDto->getNumeroDefensor()."'";
if(($numerosdefensoresDto->getEstatusEnvio()!="") ){
$sql.=" AND ";
}
}
if($numerosdefensoresDto->getEstatusEnvio()!=""){
$sql.="estatusEnvio='".$numerosdefensoresDto->getEstatusEnvio()."'";
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
$tmp[$contador] = new NumerosdefensoresDTO();
$tmp[$contador]->setIdnumerosdefensores($row["idnumerosdefensores"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
$tmp[$contador]->setIdDefensorImputadoCarpeta($row["idDefensorImputadoCarpeta"]);
$tmp[$contador]->setNumeroDefensor($row["numeroDefensor"]);
$tmp[$contador]->setEstatusEnvio($row["estatusEnvio"]);
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