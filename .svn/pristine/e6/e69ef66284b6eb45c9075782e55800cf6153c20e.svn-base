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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tocastradicionales/TocastradicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TocastradicionalesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTocastradicionales($tocastradicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltocastradicionales(";
if($tocastradicionalesDto->getIdTocaTradicionales()!=""){
$sql.="idTocaTradicionales";
if(($tocastradicionalesDto->getNumero()!="") ||($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getNumero()!=""){
$sql.="numero";
if(($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getAnio()!=""){
$sql.="anio";
if(($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getCveJuzgado()!=""){
$sql.="cveJuzgado";
if(($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getGrave()!=""){
$sql.="grave";
if(($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getRevisionExtraordonaria()!=""){
$sql.="revisionExtraordonaria";
if(($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getIdReferencia()!=""){
$sql.="idReferencia";
if(($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getCveTIpoCarpeta()!=""){
$sql.="cveTIpoCarpeta";
if(($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tocastradicionalesDto->getIdTocaTradicionales()!=""){
$sql.="'".$tocastradicionalesDto->getIdTocaTradicionales()."'";
if(($tocastradicionalesDto->getNumero()!="") ||($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getNumero()!=""){
$sql.="'".$tocastradicionalesDto->getNumero()."'";
if(($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getAnio()!=""){
$sql.="'".$tocastradicionalesDto->getAnio()."'";
if(($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getCveJuzgado()!=""){
$sql.="'".$tocastradicionalesDto->getCveJuzgado()."'";
if(($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getGrave()!=""){
$sql.="'".$tocastradicionalesDto->getGrave()."'";
if(($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getRevisionExtraordonaria()!=""){
$sql.="'".$tocastradicionalesDto->getRevisionExtraordonaria()."'";
if(($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getIdReferencia()!=""){
$sql.="'".$tocastradicionalesDto->getIdReferencia()."'";
if(($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getCveTIpoCarpeta()!=""){
$sql.="'".$tocastradicionalesDto->getCveTIpoCarpeta()."'";
if(($tocastradicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getActivo()!=""){
$sql.="'".$tocastradicionalesDto->getActivo()."'";
}
if($tocastradicionalesDto->getFechaRegistro()!=""){
}
if($tocastradicionalesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TocastradicionalesDTO();
$tmp->setidTocaTradicionales($this->_proveedor->lastID());
$tmp = $this->selectTocastradicionales($tmp,"",$this->_proveedor);
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
public function updateTocastradicionales($tocastradicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltocastradicionales SET ";
if($tocastradicionalesDto->getIdTocaTradicionales()!=""){
$sql.="idTocaTradicionales='".$tocastradicionalesDto->getIdTocaTradicionales()."'";
if(($tocastradicionalesDto->getNumero()!="") ||($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getNumero()!=""){
$sql.="numero='".$tocastradicionalesDto->getNumero()."'";
if(($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getAnio()!=""){
$sql.="anio='".$tocastradicionalesDto->getAnio()."'";
if(($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$tocastradicionalesDto->getCveJuzgado()."'";
if(($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getGrave()!=""){
$sql.="grave='".$tocastradicionalesDto->getGrave()."'";
if(($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getRevisionExtraordonaria()!=""){
$sql.="revisionExtraordonaria='".$tocastradicionalesDto->getRevisionExtraordonaria()."'";
if(($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getIdReferencia()!=""){
$sql.="idReferencia='".$tocastradicionalesDto->getIdReferencia()."'";
if(($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getCveTIpoCarpeta()!=""){
$sql.="cveTIpoCarpeta='".$tocastradicionalesDto->getCveTIpoCarpeta()."'";
if(($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getActivo()!=""){
$sql.="activo='".$tocastradicionalesDto->getActivo()."'";
if(($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tocastradicionalesDto->getFechaRegistro()."'";
if(($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tocastradicionalesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tocastradicionalesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idTocaTradicionales='".$tocastradicionalesDto->getIdTocaTradicionales()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TocastradicionalesDTO();
$tmp->setidTocaTradicionales($tocastradicionalesDto->getIdTocaTradicionales());
$tmp = $this->selectTocastradicionales($tmp,"",$this->_proveedor);
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
public function deleteTocastradicionales($tocastradicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltocastradicionales  WHERE idTocaTradicionales='".$tocastradicionalesDto->getIdTocaTradicionales()."'";
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
public function selectTocastradicionales($tocastradicionalesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTocaTradicionales,numero,anio,cveJuzgado,grave,revisionExtraordonaria,idReferencia,cveTIpoCarpeta,activo,fechaRegistro,fechaActualizacion FROM tbltocastradicionales ";
if(($tocastradicionalesDto->getIdTocaTradicionales()!="") ||($tocastradicionalesDto->getNumero()!="") ||($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tocastradicionalesDto->getIdTocaTradicionales()!=""){
$sql.="idTocaTradicionales='".$tocastradicionalesDto->getIdTocaTradicionales()."'";
if(($tocastradicionalesDto->getNumero()!="") ||($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getNumero()!=""){
$sql.="numero='".$tocastradicionalesDto->getNumero()."'";
if(($tocastradicionalesDto->getAnio()!="") ||($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getAnio()!=""){
$sql.="anio='".$tocastradicionalesDto->getAnio()."'";
if(($tocastradicionalesDto->getCveJuzgado()!="") ||($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$tocastradicionalesDto->getCveJuzgado()."'";
if(($tocastradicionalesDto->getGrave()!="") ||($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getGrave()!=""){
$sql.="grave='".$tocastradicionalesDto->getGrave()."'";
if(($tocastradicionalesDto->getRevisionExtraordonaria()!="") ||($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getRevisionExtraordonaria()!=""){
$sql.="revisionExtraordonaria='".$tocastradicionalesDto->getRevisionExtraordonaria()."'";
if(($tocastradicionalesDto->getIdReferencia()!="") ||($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getIdReferencia()!=""){
$sql.="idReferencia='".$tocastradicionalesDto->getIdReferencia()."'";
if(($tocastradicionalesDto->getCveTIpoCarpeta()!="") ||($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getCveTIpoCarpeta()!=""){
$sql.="cveTIpoCarpeta='".$tocastradicionalesDto->getCveTIpoCarpeta()."'";
if(($tocastradicionalesDto->getActivo()!="") ||($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getActivo()!=""){
$sql.="activo='".$tocastradicionalesDto->getActivo()."'";
if(($tocastradicionalesDto->getFechaRegistro()!="") ||($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tocastradicionalesDto->getFechaRegistro()."'";
if(($tocastradicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tocastradicionalesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tocastradicionalesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TocastradicionalesDTO();
$tmp[$contador]->setIdTocaTradicionales($row["idTocaTradicionales"]);
$tmp[$contador]->setNumero($row["numero"]);
$tmp[$contador]->setAnio($row["anio"]);
$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
$tmp[$contador]->setGrave($row["grave"]);
$tmp[$contador]->setRevisionExtraordonaria($row["revisionExtraordonaria"]);
$tmp[$contador]->setIdReferencia($row["idReferencia"]);
$tmp[$contador]->setCveTIpoCarpeta($row["cveTIpoCarpeta"]);
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