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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/beneficiosamparados/BeneficiosamparadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class BeneficiosamparadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertBeneficiosamparados($beneficiosamparadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblbeneficiosamparados(";
if($beneficiosamparadosDto->getIdBeneficioAmparado()!=""){
$sql.="idBeneficioAmparado";
if(($beneficiosamparadosDto->getIdBeneficioES()!="") ||($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getIdBeneficioES()!=""){
$sql.="idBeneficioES";
if(($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getNumAmparo()!=""){
$sql.="NumAmparo";
if(($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getAniAmparo()!=""){
$sql.="AniAmparo";
if(($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getCveJuzgado()!=""){
$sql.="CveJuzgado";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($beneficiosamparadosDto->getIdBeneficioAmparado()!=""){
$sql.="'".$beneficiosamparadosDto->getIdBeneficioAmparado()."'";
if(($beneficiosamparadosDto->getIdBeneficioES()!="") ||($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getIdBeneficioES()!=""){
$sql.="'".$beneficiosamparadosDto->getIdBeneficioES()."'";
if(($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getNumAmparo()!=""){
$sql.="'".$beneficiosamparadosDto->getNumAmparo()."'";
if(($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getAniAmparo()!=""){
$sql.="'".$beneficiosamparadosDto->getAniAmparo()."'";
if(($beneficiosamparadosDto->getCveJuzgado()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getCveJuzgado()!=""){
$sql.="'".$beneficiosamparadosDto->getCveJuzgado()."'";
}
if($beneficiosamparadosDto->getFechaRegistro()!=""){
}
if($beneficiosamparadosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new BeneficiosamparadosDTO();
$tmp->setidBeneficioAmparado($this->_proveedor->lastID());
$tmp = $this->selectBeneficiosamparados($tmp,"",$this->_proveedor);
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
public function updateBeneficiosamparados($beneficiosamparadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblbeneficiosamparados SET ";
if($beneficiosamparadosDto->getIdBeneficioAmparado()!=""){
$sql.="idBeneficioAmparado='".$beneficiosamparadosDto->getIdBeneficioAmparado()."'";
if(($beneficiosamparadosDto->getIdBeneficioES()!="") ||($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getIdBeneficioES()!=""){
$sql.="idBeneficioES='".$beneficiosamparadosDto->getIdBeneficioES()."'";
if(($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getNumAmparo()!=""){
$sql.="NumAmparo='".$beneficiosamparadosDto->getNumAmparo()."'";
if(($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getAniAmparo()!=""){
$sql.="AniAmparo='".$beneficiosamparadosDto->getAniAmparo()."'";
if(($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getCveJuzgado()!=""){
$sql.="CveJuzgado='".$beneficiosamparadosDto->getCveJuzgado()."'";
if(($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$beneficiosamparadosDto->getFechaRegistro()."'";
if(($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosamparadosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$beneficiosamparadosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idBeneficioAmparado='".$beneficiosamparadosDto->getIdBeneficioAmparado()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new BeneficiosamparadosDTO();
$tmp->setidBeneficioAmparado($beneficiosamparadosDto->getIdBeneficioAmparado());
$tmp = $this->selectBeneficiosamparados($tmp,"",$this->_proveedor);
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
public function deleteBeneficiosamparados($beneficiosamparadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblbeneficiosamparados  WHERE idBeneficioAmparado='".$beneficiosamparadosDto->getIdBeneficioAmparado()."'";
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
public function selectBeneficiosamparados($beneficiosamparadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idBeneficioAmparado,idBeneficioES,NumAmparo,AniAmparo,CveJuzgado,fechaRegistro,fechaActualizacion FROM tblbeneficiosamparados ";
if(($beneficiosamparadosDto->getIdBeneficioAmparado()!="") ||($beneficiosamparadosDto->getIdBeneficioES()!="") ||($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($beneficiosamparadosDto->getIdBeneficioAmparado()!=""){
$sql.="idBeneficioAmparado='".$beneficiosamparadosDto->getIdBeneficioAmparado()."'";
if(($beneficiosamparadosDto->getIdBeneficioES()!="") ||($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosamparadosDto->getIdBeneficioES()!=""){
$sql.="idBeneficioES='".$beneficiosamparadosDto->getIdBeneficioES()."'";
if(($beneficiosamparadosDto->getNumAmparo()!="") ||($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosamparadosDto->getNumAmparo()!=""){
$sql.="NumAmparo='".$beneficiosamparadosDto->getNumAmparo()."'";
if(($beneficiosamparadosDto->getAniAmparo()!="") ||($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosamparadosDto->getAniAmparo()!=""){
$sql.="AniAmparo='".$beneficiosamparadosDto->getAniAmparo()."'";
if(($beneficiosamparadosDto->getCveJuzgado()!="") ||($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosamparadosDto->getCveJuzgado()!=""){
$sql.="CveJuzgado='".$beneficiosamparadosDto->getCveJuzgado()."'";
if(($beneficiosamparadosDto->getFechaRegistro()!="") ||($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosamparadosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$beneficiosamparadosDto->getFechaRegistro()."'";
if(($beneficiosamparadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosamparadosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$beneficiosamparadosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new BeneficiosamparadosDTO();
$tmp[$contador]->setIdBeneficioAmparado($row["idBeneficioAmparado"]);
$tmp[$contador]->setIdBeneficioES($row["idBeneficioES"]);
$tmp[$contador]->setNumAmparo($row["NumAmparo"]);
$tmp[$contador]->setAniAmparo($row["AniAmparo"]);
$tmp[$contador]->setCveJuzgado($row["CveJuzgado"]);
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