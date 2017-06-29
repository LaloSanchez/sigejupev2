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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tutoresofendidosmuestras/TutoresofendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TutoresofendidosmuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTutoresofendidosmuestras($tutoresofendidosmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltutoresofendidosmuestras(";
if($tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()!=""){
$sql.="idTutorOfendidoMuestra";
if(($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!="") ||($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="idOfendidoMuestra";
if(($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getCveTipoTutor()!=""){
$sql.="cveTipoTutor";
if(($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getNombre()!=""){
$sql.="nombre";
if(($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getPaterno()!=""){
$sql.="paterno";
if(($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getMaterno()!=""){
$sql.="materno";
if(($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getFechaNacimiento()!=""){
$sql.="fechaNacimiento";
if(($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getDomicilio()!=""){
$sql.="domicilio";
if(($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getTelefono()!=""){
$sql.="telefono";
if(($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getEmail()!=""){
$sql.="email";
if(($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()."'";
if(($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!="") ||($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getIdOfendidoMuestra()."'";
if(($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getCveTipoTutor()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getCveTipoTutor()."'";
if(($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getNombre()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getNombre()."'";
if(($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getPaterno()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getPaterno()."'";
if(($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getMaterno()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getMaterno()."'";
if(($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getCveGenero()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getCveGenero()."'";
if(($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getFechaNacimiento()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getFechaNacimiento()."'";
if(($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getDomicilio()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getDomicilio()."'";
if(($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getTelefono()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getTelefono()."'";
if(($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getEmail()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getEmail()."'";
if(($tutoresofendidosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getActivo()!=""){
$sql.="'".$tutoresofendidosmuestrasDto->getActivo()."'";
}
if($tutoresofendidosmuestrasDto->getFechaRegistro()!=""){
}
if($tutoresofendidosmuestrasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TutoresofendidosmuestrasDTO();
$tmp->setidTutorOfendidoMuestra($this->_proveedor->lastID());
$tmp = $this->selectTutoresofendidosmuestras($tmp,"",$this->_proveedor);
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
public function updateTutoresofendidosmuestras($tutoresofendidosmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltutoresofendidosmuestras SET ";
if($tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()!=""){
$sql.="idTutorOfendidoMuestra='".$tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()."'";
if(($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!="") ||($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="idOfendidoMuestra='".$tutoresofendidosmuestrasDto->getIdOfendidoMuestra()."'";
if(($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getCveTipoTutor()!=""){
$sql.="cveTipoTutor='".$tutoresofendidosmuestrasDto->getCveTipoTutor()."'";
if(($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getNombre()!=""){
$sql.="nombre='".$tutoresofendidosmuestrasDto->getNombre()."'";
if(($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getPaterno()!=""){
$sql.="paterno='".$tutoresofendidosmuestrasDto->getPaterno()."'";
if(($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getMaterno()!=""){
$sql.="materno='".$tutoresofendidosmuestrasDto->getMaterno()."'";
if(($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getCveGenero()!=""){
$sql.="cveGenero='".$tutoresofendidosmuestrasDto->getCveGenero()."'";
if(($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getFechaNacimiento()!=""){
$sql.="fechaNacimiento='".$tutoresofendidosmuestrasDto->getFechaNacimiento()."'";
if(($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getDomicilio()!=""){
$sql.="domicilio='".$tutoresofendidosmuestrasDto->getDomicilio()."'";
if(($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getTelefono()!=""){
$sql.="telefono='".$tutoresofendidosmuestrasDto->getTelefono()."'";
if(($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getEmail()!=""){
$sql.="email='".$tutoresofendidosmuestrasDto->getEmail()."'";
if(($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getActivo()!=""){
$sql.="activo='".$tutoresofendidosmuestrasDto->getActivo()."'";
if(($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tutoresofendidosmuestrasDto->getFechaRegistro()."'";
if(($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tutoresofendidosmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tutoresofendidosmuestrasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idTutorOfendidoMuestra='".$tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TutoresofendidosmuestrasDTO();
$tmp->setidTutorOfendidoMuestra($tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra());
$tmp = $this->selectTutoresofendidosmuestras($tmp,"",$this->_proveedor);
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
public function deleteTutoresofendidosmuestras($tutoresofendidosmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltutoresofendidosmuestras  WHERE idTutorOfendidoMuestra='".$tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()."'";
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
public function selectTutoresofendidosmuestras($tutoresofendidosmuestrasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTutorOfendidoMuestra,idOfendidoMuestra,cveTipoTutor,nombre,paterno,materno,cveGenero,fechaNacimiento,domicilio,telefono,email,activo,fechaRegistro,fechaActualizacion FROM tbltutoresofendidosmuestras ";
if(($tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()!="") ||($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!="") ||($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()!=""){
$sql.="idTutorOfendidoMuestra='".$tutoresofendidosmuestrasDto->getIdTutorOfendidoMuestra()."'";
if(($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!="") ||($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="idOfendidoMuestra='".$tutoresofendidosmuestrasDto->getIdOfendidoMuestra()."'";
if(($tutoresofendidosmuestrasDto->getCveTipoTutor()!="") ||($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getCveTipoTutor()!=""){
$sql.="cveTipoTutor='".$tutoresofendidosmuestrasDto->getCveTipoTutor()."'";
if(($tutoresofendidosmuestrasDto->getNombre()!="") ||($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getNombre()!=""){
$sql.="nombre='".$tutoresofendidosmuestrasDto->getNombre()."'";
if(($tutoresofendidosmuestrasDto->getPaterno()!="") ||($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getPaterno()!=""){
$sql.="paterno='".$tutoresofendidosmuestrasDto->getPaterno()."'";
if(($tutoresofendidosmuestrasDto->getMaterno()!="") ||($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getMaterno()!=""){
$sql.="materno='".$tutoresofendidosmuestrasDto->getMaterno()."'";
if(($tutoresofendidosmuestrasDto->getCveGenero()!="") ||($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getCveGenero()!=""){
$sql.="cveGenero='".$tutoresofendidosmuestrasDto->getCveGenero()."'";
if(($tutoresofendidosmuestrasDto->getFechaNacimiento()!="") ||($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getFechaNacimiento()!=""){
$sql.="fechaNacimiento='".$tutoresofendidosmuestrasDto->getFechaNacimiento()."'";
if(($tutoresofendidosmuestrasDto->getDomicilio()!="") ||($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getDomicilio()!=""){
$sql.="domicilio='".$tutoresofendidosmuestrasDto->getDomicilio()."'";
if(($tutoresofendidosmuestrasDto->getTelefono()!="") ||($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getTelefono()!=""){
$sql.="telefono='".$tutoresofendidosmuestrasDto->getTelefono()."'";
if(($tutoresofendidosmuestrasDto->getEmail()!="") ||($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getEmail()!=""){
$sql.="email='".$tutoresofendidosmuestrasDto->getEmail()."'";
if(($tutoresofendidosmuestrasDto->getActivo()!="") ||($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getActivo()!=""){
$sql.="activo='".$tutoresofendidosmuestrasDto->getActivo()."'";
if(($tutoresofendidosmuestrasDto->getFechaRegistro()!="") ||($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tutoresofendidosmuestrasDto->getFechaRegistro()."'";
if(($tutoresofendidosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tutoresofendidosmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tutoresofendidosmuestrasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TutoresofendidosmuestrasDTO();
$tmp[$contador]->setIdTutorOfendidoMuestra($row["idTutorOfendidoMuestra"]);
$tmp[$contador]->setIdOfendidoMuestra($row["idOfendidoMuestra"]);
$tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
$tmp[$contador]->setDomicilio($row["domicilio"]);
$tmp[$contador]->setTelefono($row["telefono"]);
$tmp[$contador]->setEmail($row["email"]);
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