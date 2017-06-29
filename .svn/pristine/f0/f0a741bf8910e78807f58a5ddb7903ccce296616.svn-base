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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/personascomparecencias/PersonascomparecenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class PersonascomparecenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertPersonascomparecencias($personascomparecenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblpersonascomparecencias(";
if($personascomparecenciasDto->getIdPersonacomparecencia()!=""){
$sql.="idPersonacomparecencia";
if(($personascomparecenciasDto->getIdComparecencia()!="") ||($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getIdComparecencia()!=""){
$sql.="idComparecencia";
if(($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveTipoParte()!=""){
$sql.="cveTipoParte";
if(($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getNombre()!=""){
$sql.="nombre";
if(($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getPaterno()!=""){
$sql.="paterno";
if(($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getMaterno()!=""){
$sql.="materno";
if(($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getNombrePersonaMoral()!=""){
$sql.="nombrePersonaMoral";
if(($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaActualizacion";
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($personascomparecenciasDto->getIdPersonacomparecencia()!=""){
$sql.="'".$personascomparecenciasDto->getIdPersonacomparecencia()."'";
if(($personascomparecenciasDto->getIdComparecencia()!="") ||($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getIdComparecencia()!=""){
$sql.="'".$personascomparecenciasDto->getIdComparecencia()."'";
if(($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveTipoParte()!=""){
$sql.="'".$personascomparecenciasDto->getCveTipoParte()."'";
if(($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveTipoPersona()!=""){
$sql.="'".$personascomparecenciasDto->getCveTipoPersona()."'";
if(($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getNombre()!=""){
$sql.="'".$personascomparecenciasDto->getNombre()."'";
if(($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getPaterno()!=""){
$sql.="'".$personascomparecenciasDto->getPaterno()."'";
if(($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getMaterno()!=""){
$sql.="'".$personascomparecenciasDto->getMaterno()."'";
if(($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getNombrePersonaMoral()!=""){
$sql.="'".$personascomparecenciasDto->getNombrePersonaMoral()."'";
if(($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveGenero()!=""){
$sql.="'".$personascomparecenciasDto->getCveGenero()."'";
if(($personascomparecenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getActivo()!=""){
$sql.="'".$personascomparecenciasDto->getActivo()."'";
}
if($personascomparecenciasDto->getFechaActualizacion()!=""){
}
if($personascomparecenciasDto->getFechaRegistro()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonascomparecenciasDTO();
$tmp->setidPersonacomparecencia($this->_proveedor->lastID());
$tmp = $this->selectPersonascomparecencias($tmp,"",$this->_proveedor);
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
public function updatePersonascomparecencias($personascomparecenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblpersonascomparecencias SET ";
if($personascomparecenciasDto->getIdPersonacomparecencia()!=""){
$sql.="idPersonacomparecencia='".$personascomparecenciasDto->getIdPersonacomparecencia()."'";
if(($personascomparecenciasDto->getIdComparecencia()!="") ||($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getIdComparecencia()!=""){
$sql.="idComparecencia='".$personascomparecenciasDto->getIdComparecencia()."'";
if(($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$personascomparecenciasDto->getCveTipoParte()."'";
if(($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$personascomparecenciasDto->getCveTipoPersona()."'";
if(($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getNombre()!=""){
$sql.="nombre='".$personascomparecenciasDto->getNombre()."'";
if(($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getPaterno()!=""){
$sql.="paterno='".$personascomparecenciasDto->getPaterno()."'";
if(($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getMaterno()!=""){
$sql.="materno='".$personascomparecenciasDto->getMaterno()."'";
if(($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getNombrePersonaMoral()!=""){
$sql.="nombrePersonaMoral='".$personascomparecenciasDto->getNombrePersonaMoral()."'";
if(($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getCveGenero()!=""){
$sql.="cveGenero='".$personascomparecenciasDto->getCveGenero()."'";
if(($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getActivo()!=""){
$sql.="activo='".$personascomparecenciasDto->getActivo()."'";
if(($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$personascomparecenciasDto->getFechaActualizacion()."'";
if(($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($personascomparecenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$personascomparecenciasDto->getFechaRegistro()."'";
}
$sql.=" WHERE idPersonacomparecencia='".$personascomparecenciasDto->getIdPersonacomparecencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonascomparecenciasDTO();
$tmp->setidPersonacomparecencia($personascomparecenciasDto->getIdPersonacomparecencia());
$tmp = $this->selectPersonascomparecencias($tmp,"",$this->_proveedor);
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
public function deletePersonascomparecencias($personascomparecenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblpersonascomparecencias  WHERE idPersonacomparecencia='".$personascomparecenciasDto->getIdPersonacomparecencia()."'";
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
public function selectPersonascomparecencias($personascomparecenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idPersonacomparecencia,idComparecencia,cveTipoParte,cveTipoPersona,nombre,paterno,materno,nombrePersonaMoral,cveGenero,activo,fechaActualizacion,fechaRegistro FROM tblpersonascomparecencias ";
if(($personascomparecenciasDto->getIdPersonacomparecencia()!="") ||($personascomparecenciasDto->getIdComparecencia()!="") ||($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" WHERE ";
}
if($personascomparecenciasDto->getIdPersonacomparecencia()!=""){
$sql.="idPersonacomparecencia='".$personascomparecenciasDto->getIdPersonacomparecencia()."'";
if(($personascomparecenciasDto->getIdComparecencia()!="") ||($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getIdComparecencia()!=""){
$sql.="idComparecencia='".$personascomparecenciasDto->getIdComparecencia()."'";
if(($personascomparecenciasDto->getCveTipoParte()!="") ||($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$personascomparecenciasDto->getCveTipoParte()."'";
if(($personascomparecenciasDto->getCveTipoPersona()!="") ||($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$personascomparecenciasDto->getCveTipoPersona()."'";
if(($personascomparecenciasDto->getNombre()!="") ||($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getNombre()!=""){
$sql.="nombre='".$personascomparecenciasDto->getNombre()."'";
if(($personascomparecenciasDto->getPaterno()!="") ||($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getPaterno()!=""){
$sql.="paterno='".$personascomparecenciasDto->getPaterno()."'";
if(($personascomparecenciasDto->getMaterno()!="") ||($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getMaterno()!=""){
$sql.="materno='".$personascomparecenciasDto->getMaterno()."'";
if(($personascomparecenciasDto->getNombrePersonaMoral()!="") ||($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getNombrePersonaMoral()!=""){
$sql.="nombrePersonaMoral='".$personascomparecenciasDto->getNombrePersonaMoral()."'";
if(($personascomparecenciasDto->getCveGenero()!="") ||($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getCveGenero()!=""){
$sql.="cveGenero='".$personascomparecenciasDto->getCveGenero()."'";
if(($personascomparecenciasDto->getActivo()!="") ||($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getActivo()!=""){
$sql.="activo='".$personascomparecenciasDto->getActivo()."'";
if(($personascomparecenciasDto->getFechaActualizacion()!="") ||($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$personascomparecenciasDto->getFechaActualizacion()."'";
if(($personascomparecenciasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($personascomparecenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$personascomparecenciasDto->getFechaRegistro()."'";
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
$tmp[$contador] = new PersonascomparecenciasDTO();
$tmp[$contador]->setIdPersonacomparecencia($row["idPersonacomparecencia"]);
$tmp[$contador]->setIdComparecencia($row["idComparecencia"]);
$tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setNombrePersonaMoral($row["nombrePersonaMoral"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
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