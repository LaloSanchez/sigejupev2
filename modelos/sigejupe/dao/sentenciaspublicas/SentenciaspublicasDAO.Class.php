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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sentenciaspublicas/SentenciaspublicasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SentenciaspublicasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSentenciaspublicas($sentenciaspublicasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsentenciaspublicas(";
if($sentenciaspublicasDto->getIdSentenciaP()!=""){
$sql.="IdSentenciaP";
if(($sentenciaspublicasDto->getIdActuacion()!="") ||($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getIdActuacion()!=""){
$sql.="IdActuacion";
if(($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getDefiniciones()!=""){
$sql.="definiciones";
if(($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getEstado()!=""){
$sql.="estado";
}
$sql.=") VALUES(";
if($sentenciaspublicasDto->getIdSentenciaP()!=""){
$sql.="'".$sentenciaspublicasDto->getIdSentenciaP()."'";
if(($sentenciaspublicasDto->getIdActuacion()!="") ||($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getIdActuacion()!=""){
$sql.="'".$sentenciaspublicasDto->getIdActuacion()."'";
if(($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getDefiniciones()!=""){
$sql.="'".$sentenciaspublicasDto->getDefiniciones()."'";
if(($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getEstado()!=""){
$sql.="'".$sentenciaspublicasDto->getEstado()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentenciaspublicasDTO();
$tmp->setIdSentenciaP($this->_proveedor->lastID());
$tmp = $this->selectSentenciaspublicas($tmp,"",$this->_proveedor);
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
public function updateSentenciaspublicas($sentenciaspublicasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsentenciaspublicas SET ";
if($sentenciaspublicasDto->getIdSentenciaP()!=""){
$sql.="IdSentenciaP='".$sentenciaspublicasDto->getIdSentenciaP()."'";
if(($sentenciaspublicasDto->getIdActuacion()!="") ||($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getIdActuacion()!=""){
$sql.="IdActuacion='".$sentenciaspublicasDto->getIdActuacion()."'";
if(($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getDefiniciones()!=""){
$sql.="definiciones='".$sentenciaspublicasDto->getDefiniciones()."'";
if(($sentenciaspublicasDto->getEstado()!="") ){
$sql.=",";
}
}
if($sentenciaspublicasDto->getEstado()!=""){
$sql.="estado='".$sentenciaspublicasDto->getEstado()."'";
}
$sql.=" WHERE IdSentenciaP='".$sentenciaspublicasDto->getIdSentenciaP()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentenciaspublicasDTO();
$tmp->setIdSentenciaP($sentenciaspublicasDto->getIdSentenciaP());
$tmp = $this->selectSentenciaspublicas($tmp,"",$this->_proveedor);
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
public function deleteSentenciaspublicas($sentenciaspublicasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsentenciaspublicas  WHERE IdSentenciaP='".$sentenciaspublicasDto->getIdSentenciaP()."'";
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
public function selectSentenciaspublicas($sentenciaspublicasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT IdSentenciaP,IdActuacion,definiciones,estado FROM tblsentenciaspublicas ";
if(($sentenciaspublicasDto->getIdSentenciaP()!="") ||($sentenciaspublicasDto->getIdActuacion()!="") ||($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=" WHERE ";
}
if($sentenciaspublicasDto->getIdSentenciaP()!=""){
$sql.="IdSentenciaP='".$sentenciaspublicasDto->getIdSentenciaP()."'";
if(($sentenciaspublicasDto->getIdActuacion()!="") ||($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=" AND ";
}
}
if($sentenciaspublicasDto->getIdActuacion()!=""){
$sql.="IdActuacion='".$sentenciaspublicasDto->getIdActuacion()."'";
if(($sentenciaspublicasDto->getDefiniciones()!="") ||($sentenciaspublicasDto->getEstado()!="") ){
$sql.=" AND ";
}
}
if($sentenciaspublicasDto->getDefiniciones()!=""){
$sql.="definiciones='".$sentenciaspublicasDto->getDefiniciones()."'";
if(($sentenciaspublicasDto->getEstado()!="") ){
$sql.=" AND ";
}
}
if($sentenciaspublicasDto->getEstado()!=""){
$sql.="estado='".$sentenciaspublicasDto->getEstado()."'";
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
$tmp[$contador] = new SentenciaspublicasDTO();
$tmp[$contador]->setIdSentenciaP($row["IdSentenciaP"]);
$tmp[$contador]->setIdActuacion($row["IdActuacion"]);
$tmp[$contador]->setDefiniciones($row["definiciones"]);
$tmp[$contador]->setEstado($row["estado"]);
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