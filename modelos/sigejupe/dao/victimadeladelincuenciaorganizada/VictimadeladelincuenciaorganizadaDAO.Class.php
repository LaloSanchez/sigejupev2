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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class VictimadeladelincuenciaorganizadaDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblvictimadeladelincuenciaorganizada(";
if($victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="cveVictimaDeLaDelincuenciaOrganizada";
if(($victimadeladelincuenciaorganizadaDto->getDesVictimaDeLaDelincuenciaOrganizada()!="") ||($victimadeladelincuenciaorganizadaDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="desVictimaDeLaDelincuenciaOrganizada";
if(($victimadeladelincuenciaorganizadaDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="'".$victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()."'";
if(($victimadeladelincuenciaorganizadaDto->getDesVictimaDeLaDelincuenciaOrganizada()!="") ||($victimadeladelincuenciaorganizadaDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="'".$victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()."'";
if(($victimadeladelincuenciaorganizadaDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getactivo()!=""){
$sql.="'".$victimadeladelincuenciaorganizadaDto->getactivo()."'";
}
if($victimadeladelincuenciaorganizadaDto->getfechaRegistro()!=""){
}
if($victimadeladelincuenciaorganizadaDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadeladelincuenciaorganizadaDTO();
$tmp->setcveVictimaDeLaDelincuenciaOrganizada($this->_proveedor->lastID());
$tmp = $this->selectVictimadeladelincuenciaorganizada($tmp,"",$this->_proveedor);
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
public function updateVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblvictimadeladelincuenciaorganizada SET ";
if($victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="cveVictimaDeLaDelincuenciaOrganizada='".$victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()."'";
if(($victimadeladelincuenciaorganizadaDto->getDesVictimaDeLaDelincuenciaOrganizada()!="") ||($victimadeladelincuenciaorganizadaDto->getActivo()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="desVictimaDeLaDelincuenciaOrganizada='".$victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()."'";
if(($victimadeladelincuenciaorganizadaDto->getActivo()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getactivo()!=""){
$sql.="activo='".$victimadeladelincuenciaorganizadaDto->getactivo()."'";
if(($victimadeladelincuenciaorganizadaDto->getFechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadeladelincuenciaorganizadaDto->getfechaRegistro()."'";
if(($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeladelincuenciaorganizadaDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadeladelincuenciaorganizadaDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveVictimaDeLaDelincuenciaOrganizada='".$victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadeladelincuenciaorganizadaDTO();
$tmp->setcveVictimaDeLaDelincuenciaOrganizada($victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada());
$tmp = $this->selectVictimadeladelincuenciaorganizada($tmp,"",$this->_proveedor);
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
public function deleteVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblvictimadeladelincuenciaorganizada  WHERE cveVictimaDeLaDelincuenciaOrganizada='".$victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()."'";
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
public function selectVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveVictimaDeLaDelincuenciaOrganizada,desVictimaDeLaDelincuenciaOrganizada,activo,fechaRegistro,fechaActualizacion FROM tblvictimadeladelincuenciaorganizada ";
if(($victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()!="") ||($victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()!="") ||($victimadeladelincuenciaorganizadaDto->getactivo()!="") ||($victimadeladelincuenciaorganizadaDto->getfechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($victimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="cveVictimaDeLaDelincuenciaOrganizada='".$victimadeladelincuenciaorganizadaDto->getCveVictimaDeLaDelincuenciaOrganizada()."'";
if(($victimadeladelincuenciaorganizadaDto->getDesVictimaDeLaDelincuenciaOrganizada()!="") ||($victimadeladelincuenciaorganizadaDto->getActivo()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()!=""){
$sql.="desVictimaDeLaDelincuenciaOrganizada='".$victimadeladelincuenciaorganizadaDto->getDesVictimaDeLaDelincuenciaOrganizada()."'";
if(($victimadeladelincuenciaorganizadaDto->getActivo()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeladelincuenciaorganizadaDto->getactivo()!=""){
$sql.="activo='".$victimadeladelincuenciaorganizadaDto->getActivo()."'";
if(($victimadeladelincuenciaorganizadaDto->getFechaRegistro()!="") ||($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeladelincuenciaorganizadaDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadeladelincuenciaorganizadaDto->getFechaRegistro()."'";
if(($victimadeladelincuenciaorganizadaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeladelincuenciaorganizadaDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadeladelincuenciaorganizadaDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new VictimadeladelincuenciaorganizadaDTO();
$tmp[$contador]->setCveVictimaDeLaDelincuenciaOrganizada($row["cveVictimaDeLaDelincuenciaOrganizada"]);
$tmp[$contador]->setDesVictimaDeLaDelincuenciaOrganizada($row["desVictimaDeLaDelincuenciaOrganizada"]);
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