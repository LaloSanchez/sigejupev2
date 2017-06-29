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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/personasordenes/PersonasordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class PersonasordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertPersonasordenes($personasordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblpersonasordenes(";
if($personasordenesDto->getIdPersonaOrden()!=""){
$sql.="idPersonaOrden";
if(($personasordenesDto->getIdSolicitudOrden()!="") ||($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden";
if(($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getPaterno()!=""){
$sql.="paterno";
if(($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getMaterno()!=""){
$sql.="materno";
if(($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getNombre()!=""){
$sql.="nombre";
if(($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getDomicilio()!=""){
$sql.="domicilio";
if(($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveMunicipio()!=""){
$sql.="cveMunicipio";
if(($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveOrigen()!=""){
$sql.="cveOrigen";
}
$sql.=") VALUES(";
if($personasordenesDto->getIdPersonaOrden()!=""){
$sql.="'".$personasordenesDto->getIdPersonaOrden()."'";
if(($personasordenesDto->getIdSolicitudOrden()!="") ||($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getIdSolicitudOrden()!=""){
$sql.="'".$personasordenesDto->getIdSolicitudOrden()."'";
if(($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getPaterno()!=""){
$sql.="'".$personasordenesDto->getPaterno()."'";
if(($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getMaterno()!=""){
$sql.="'".$personasordenesDto->getMaterno()."'";
if(($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getNombre()!=""){
$sql.="'".$personasordenesDto->getNombre()."'";
if(($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getDomicilio()!=""){
$sql.="'".$personasordenesDto->getDomicilio()."'";
if(($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveMunicipio()!=""){
$sql.="'".$personasordenesDto->getCveMunicipio()."'";
if(($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveGenero()!=""){
$sql.="'".$personasordenesDto->getCveGenero()."'";
if(($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveOrigen()!=""){
$sql.="'".$personasordenesDto->getCveOrigen()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonasordenesDTO();
$tmp->setidPersonaOrden($this->_proveedor->lastID());
$tmp = $this->selectPersonasordenes($tmp,"",$this->_proveedor);
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
public function updatePersonasordenes($personasordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblpersonasordenes SET ";
if($personasordenesDto->getIdPersonaOrden()!=""){
$sql.="idPersonaOrden='".$personasordenesDto->getIdPersonaOrden()."'";
if(($personasordenesDto->getIdSolicitudOrden()!="") ||($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$personasordenesDto->getIdSolicitudOrden()."'";
if(($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getPaterno()!=""){
$sql.="paterno='".$personasordenesDto->getPaterno()."'";
if(($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getMaterno()!=""){
$sql.="materno='".$personasordenesDto->getMaterno()."'";
if(($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getNombre()!=""){
$sql.="nombre='".$personasordenesDto->getNombre()."'";
if(($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getDomicilio()!=""){
$sql.="domicilio='".$personasordenesDto->getDomicilio()."'";
if(($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveMunicipio()!=""){
$sql.="cveMunicipio='".$personasordenesDto->getCveMunicipio()."'";
if(($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveGenero()!=""){
$sql.="cveGenero='".$personasordenesDto->getCveGenero()."'";
if(($personasordenesDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasordenesDto->getCveOrigen()!=""){
$sql.="cveOrigen='".$personasordenesDto->getCveOrigen()."'";
}
$sql.=" WHERE idPersonaOrden='".$personasordenesDto->getIdPersonaOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonasordenesDTO();
$tmp->setidPersonaOrden($personasordenesDto->getIdPersonaOrden());
$tmp = $this->selectPersonasordenes($tmp,"",$this->_proveedor);
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
public function deletePersonasordenes($personasordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblpersonasordenes  WHERE idPersonaOrden='".$personasordenesDto->getIdPersonaOrden()."'";
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
public function selectPersonasordenes($personasordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idPersonaOrden,idSolicitudOrden,paterno,materno,nombre,domicilio,cveMunicipio,cveGenero,cveOrigen FROM tblpersonasordenes ";
if(($personasordenesDto->getIdPersonaOrden()!="") ||($personasordenesDto->getIdSolicitudOrden()!="") ||($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" WHERE ";
}
if($personasordenesDto->getIdPersonaOrden()!=""){
$sql.="idPersonaOrden='".$personasordenesDto->getIdPersonaOrden()."'";
if(($personasordenesDto->getIdSolicitudOrden()!="") ||($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$personasordenesDto->getIdSolicitudOrden()."'";
if(($personasordenesDto->getPaterno()!="") ||($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getPaterno()!=""){
$sql.="paterno='".$personasordenesDto->getPaterno()."'";
if(($personasordenesDto->getMaterno()!="") ||($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getMaterno()!=""){
$sql.="materno='".$personasordenesDto->getMaterno()."'";
if(($personasordenesDto->getNombre()!="") ||($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getNombre()!=""){
$sql.="nombre='".$personasordenesDto->getNombre()."'";
if(($personasordenesDto->getDomicilio()!="") ||($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getDomicilio()!=""){
$sql.="domicilio='".$personasordenesDto->getDomicilio()."'";
if(($personasordenesDto->getCveMunicipio()!="") ||($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getCveMunicipio()!=""){
$sql.="cveMunicipio='".$personasordenesDto->getCveMunicipio()."'";
if(($personasordenesDto->getCveGenero()!="") ||($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getCveGenero()!=""){
$sql.="cveGenero='".$personasordenesDto->getCveGenero()."'";
if(($personasordenesDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasordenesDto->getCveOrigen()!=""){
$sql.="cveOrigen='".$personasordenesDto->getCveOrigen()."'";
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
$tmp[$contador] = new PersonasordenesDTO();
$tmp[$contador]->setIdPersonaOrden($row["idPersonaOrden"]);
$tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setDomicilio($row["domicilio"]);
$tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
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