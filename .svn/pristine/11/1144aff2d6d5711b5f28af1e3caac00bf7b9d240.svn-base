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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/personaautorizadas/PersonaautorizadasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class PersonaautorizadasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertPersonaautorizadas($personaautorizadasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblpersonaautorizadas(";
if($personaautorizadasDto->getIdPersonaAutorizada()!=""){
$sql.="IdPersonaAutorizada";
if(($personaautorizadasDto->getNombre()!="") ||($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getNombre()!=""){
$sql.="Nombre";
if(($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getPaterno()!=""){
$sql.="Paterno";
if(($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getMaterno()!=""){
$sql.="Materno";
if(($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCedula()!=""){
$sql.="Cedula";
if(($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getEmail()!=""){
$sql.="email";
if(($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaAlta()!=""){
$sql.="FechaAlta";
if(($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaBaja()!=""){
$sql.="FechaBaja";
if(($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaModificacion()!=""){
$sql.="FechaModificacion";
if(($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getActivo()!=""){
$sql.="Activo";
if(($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getEmailAlternativo()!=""){
$sql.="emailAlternativo";
if(($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveTipoAbogado()!=""){
$sql.="CveTipoAbogado";
if(($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getUsuario()!=""){
$sql.="Usuario";
if(($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getPassword()!=""){
$sql.="Password";
if(($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getDireccion()!=""){
$sql.="Direccion";
if(($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getTelefono()!=""){
$sql.="Telefono";
if(($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getUsuarioRegistro()!=""){
$sql.="UsuarioRegistro";
if(($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getJuzgadoRegistro()!=""){
$sql.="JuzgadoRegistro";
if(($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCiudad()!=""){
$sql.="Ciudad";
if(($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveEstado()!=""){
$sql.="CveEstado";
if(($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveEstatusRegistro()!=""){
$sql.="CveEstatusRegistro";
if(($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveUsuario()!=""){
$sql.="CveUsuario";
}
$sql.=") VALUES(";
if($personaautorizadasDto->getIdPersonaAutorizada()!=""){
$sql.="'".$personaautorizadasDto->getIdPersonaAutorizada()."'";
if(($personaautorizadasDto->getNombre()!="") ||($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getNombre()!=""){
$sql.="'".$personaautorizadasDto->getNombre()."'";
if(($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getPaterno()!=""){
$sql.="'".$personaautorizadasDto->getPaterno()."'";
if(($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getMaterno()!=""){
$sql.="'".$personaautorizadasDto->getMaterno()."'";
if(($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCedula()!=""){
$sql.="'".$personaautorizadasDto->getCedula()."'";
if(($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getEmail()!=""){
$sql.="'".$personaautorizadasDto->getEmail()."'";
if(($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaAlta()!=""){
$sql.="'".$personaautorizadasDto->getFechaAlta()."'";
if(($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaBaja()!=""){
$sql.="'".$personaautorizadasDto->getFechaBaja()."'";
if(($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaModificacion()!=""){
$sql.="'".$personaautorizadasDto->getFechaModificacion()."'";
if(($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getActivo()!=""){
$sql.="'".$personaautorizadasDto->getActivo()."'";
if(($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getEmailAlternativo()!=""){
$sql.="'".$personaautorizadasDto->getEmailAlternativo()."'";
if(($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveTipoAbogado()!=""){
$sql.="'".$personaautorizadasDto->getCveTipoAbogado()."'";
if(($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getUsuario()!=""){
$sql.="'".$personaautorizadasDto->getUsuario()."'";
if(($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getPassword()!=""){
$sql.="'".$personaautorizadasDto->getPassword()."'";
if(($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getDireccion()!=""){
$sql.="'".$personaautorizadasDto->getDireccion()."'";
if(($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getTelefono()!=""){
$sql.="'".$personaautorizadasDto->getTelefono()."'";
if(($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getUsuarioRegistro()!=""){
$sql.="'".$personaautorizadasDto->getUsuarioRegistro()."'";
if(($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getJuzgadoRegistro()!=""){
$sql.="'".$personaautorizadasDto->getJuzgadoRegistro()."'";
if(($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCiudad()!=""){
$sql.="'".$personaautorizadasDto->getCiudad()."'";
if(($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveEstado()!=""){
$sql.="'".$personaautorizadasDto->getCveEstado()."'";
if(($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveEstatusRegistro()!=""){
$sql.="'".$personaautorizadasDto->getCveEstatusRegistro()."'";
if(($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveUsuario()!=""){
$sql.="'".$personaautorizadasDto->getCveUsuario()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonaautorizadasDTO();
$tmp->set($this->_proveedor->lastID());
$tmp = $this->selectPersonaautorizadas($tmp,"",$this->_proveedor);
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
public function updatePersonaautorizadas($personaautorizadasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblpersonaautorizadas SET ";
if($personaautorizadasDto->getIdPersonaAutorizada()!=""){
$sql.="IdPersonaAutorizada='".$personaautorizadasDto->getIdPersonaAutorizada()."'";
if(($personaautorizadasDto->getNombre()!="") ||($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getNombre()!=""){
$sql.="Nombre='".$personaautorizadasDto->getNombre()."'";
if(($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getPaterno()!=""){
$sql.="Paterno='".$personaautorizadasDto->getPaterno()."'";
if(($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getMaterno()!=""){
$sql.="Materno='".$personaautorizadasDto->getMaterno()."'";
if(($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCedula()!=""){
$sql.="Cedula='".$personaautorizadasDto->getCedula()."'";
if(($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getEmail()!=""){
$sql.="email='".$personaautorizadasDto->getEmail()."'";
if(($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaAlta()!=""){
$sql.="FechaAlta='".$personaautorizadasDto->getFechaAlta()."'";
if(($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaBaja()!=""){
$sql.="FechaBaja='".$personaautorizadasDto->getFechaBaja()."'";
if(($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getFechaModificacion()!=""){
$sql.="FechaModificacion='".$personaautorizadasDto->getFechaModificacion()."'";
if(($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getActivo()!=""){
$sql.="Activo='".$personaautorizadasDto->getActivo()."'";
if(($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getEmailAlternativo()!=""){
$sql.="emailAlternativo='".$personaautorizadasDto->getEmailAlternativo()."'";
if(($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveTipoAbogado()!=""){
$sql.="CveTipoAbogado='".$personaautorizadasDto->getCveTipoAbogado()."'";
if(($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getUsuario()!=""){
$sql.="Usuario='".$personaautorizadasDto->getUsuario()."'";
if(($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getPassword()!=""){
$sql.="Password='".$personaautorizadasDto->getPassword()."'";
if(($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getDireccion()!=""){
$sql.="Direccion='".$personaautorizadasDto->getDireccion()."'";
if(($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getTelefono()!=""){
$sql.="Telefono='".$personaautorizadasDto->getTelefono()."'";
if(($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getUsuarioRegistro()!=""){
$sql.="UsuarioRegistro='".$personaautorizadasDto->getUsuarioRegistro()."'";
if(($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getJuzgadoRegistro()!=""){
$sql.="JuzgadoRegistro='".$personaautorizadasDto->getJuzgadoRegistro()."'";
if(($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCiudad()!=""){
$sql.="Ciudad='".$personaautorizadasDto->getCiudad()."'";
if(($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveEstado()!=""){
$sql.="CveEstado='".$personaautorizadasDto->getCveEstado()."'";
if(($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveEstatusRegistro()!=""){
$sql.="CveEstatusRegistro='".$personaautorizadasDto->getCveEstatusRegistro()."'";
if(($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=",";
}
}
if($personaautorizadasDto->getCveUsuario()!=""){
$sql.="CveUsuario='".$personaautorizadasDto->getCveUsuario()."'";
}
$sql.=" WHERE ='".$personaautorizadasDto->get()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonaautorizadasDTO();
$tmp->set($personaautorizadasDto->get());
$tmp = $this->selectPersonaautorizadas($tmp,"",$this->_proveedor);
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
public function deletePersonaautorizadas($personaautorizadasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblpersonaautorizadas  WHERE ='".$personaautorizadasDto->get()."'";
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
public function selectPersonaautorizadas($personaautorizadasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT IdPersonaAutorizada,Nombre,Paterno,Materno,Cedula,email,FechaAlta,FechaBaja,FechaModificacion,Activo,emailAlternativo,CveTipoAbogado,Usuario,Password,Direccion,Telefono,UsuarioRegistro,JuzgadoRegistro,Ciudad,CveEstado,CveEstatusRegistro,CveUsuario FROM tblpersonaautorizadas ";
if(($personaautorizadasDto->getIdPersonaAutorizada()!="") ||($personaautorizadasDto->getNombre()!="") ||($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" WHERE ";
}
if($personaautorizadasDto->getIdPersonaAutorizada()!=""){
$sql.="IdPersonaAutorizada='".$personaautorizadasDto->getIdPersonaAutorizada()."'";
if(($personaautorizadasDto->getNombre()!="") ||($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getNombre()!=""){
$sql.="Nombre='".$personaautorizadasDto->getNombre()."'";
if(($personaautorizadasDto->getPaterno()!="") ||($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getPaterno()!=""){
$sql.="Paterno='".$personaautorizadasDto->getPaterno()."'";
if(($personaautorizadasDto->getMaterno()!="") ||($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getMaterno()!=""){
$sql.="Materno='".$personaautorizadasDto->getMaterno()."'";
if(($personaautorizadasDto->getCedula()!="") ||($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getCedula()!=""){
$sql.="Cedula='".$personaautorizadasDto->getCedula()."'";
if(($personaautorizadasDto->getEmail()!="") ||($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getEmail()!=""){
$sql.="email='".$personaautorizadasDto->getEmail()."'";
if(($personaautorizadasDto->getFechaAlta()!="") ||($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getFechaAlta()!=""){
$sql.="FechaAlta='".$personaautorizadasDto->getFechaAlta()."'";
if(($personaautorizadasDto->getFechaBaja()!="") ||($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getFechaBaja()!=""){
$sql.="FechaBaja='".$personaautorizadasDto->getFechaBaja()."'";
if(($personaautorizadasDto->getFechaModificacion()!="") ||($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getFechaModificacion()!=""){
$sql.="FechaModificacion='".$personaautorizadasDto->getFechaModificacion()."'";
if(($personaautorizadasDto->getActivo()!="") ||($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getActivo()!=""){
$sql.="Activo='".$personaautorizadasDto->getActivo()."'";
if(($personaautorizadasDto->getEmailAlternativo()!="") ||($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getEmailAlternativo()!=""){
$sql.="emailAlternativo='".$personaautorizadasDto->getEmailAlternativo()."'";
if(($personaautorizadasDto->getCveTipoAbogado()!="") ||($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getCveTipoAbogado()!=""){
$sql.="CveTipoAbogado='".$personaautorizadasDto->getCveTipoAbogado()."'";
if(($personaautorizadasDto->getUsuario()!="") ||($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getUsuario()!=""){
$sql.="Usuario='".$personaautorizadasDto->getUsuario()."'";
if(($personaautorizadasDto->getPassword()!="") ||($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getPassword()!=""){
$sql.="Password='".$personaautorizadasDto->getPassword()."'";
if(($personaautorizadasDto->getDireccion()!="") ||($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getDireccion()!=""){
$sql.="Direccion='".$personaautorizadasDto->getDireccion()."'";
if(($personaautorizadasDto->getTelefono()!="") ||($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getTelefono()!=""){
$sql.="Telefono='".$personaautorizadasDto->getTelefono()."'";
if(($personaautorizadasDto->getUsuarioRegistro()!="") ||($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getUsuarioRegistro()!=""){
$sql.="UsuarioRegistro='".$personaautorizadasDto->getUsuarioRegistro()."'";
if(($personaautorizadasDto->getJuzgadoRegistro()!="") ||($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getJuzgadoRegistro()!=""){
$sql.="JuzgadoRegistro='".$personaautorizadasDto->getJuzgadoRegistro()."'";
if(($personaautorizadasDto->getCiudad()!="") ||($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getCiudad()!=""){
$sql.="Ciudad='".$personaautorizadasDto->getCiudad()."'";
if(($personaautorizadasDto->getCveEstado()!="") ||($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getCveEstado()!=""){
$sql.="CveEstado='".$personaautorizadasDto->getCveEstado()."'";
if(($personaautorizadasDto->getCveEstatusRegistro()!="") ||($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getCveEstatusRegistro()!=""){
$sql.="CveEstatusRegistro='".$personaautorizadasDto->getCveEstatusRegistro()."'";
if(($personaautorizadasDto->getCveUsuario()!="") ){
$sql.=" AND ";
}
}
if($personaautorizadasDto->getCveUsuario()!=""){
$sql.="CveUsuario='".$personaautorizadasDto->getCveUsuario()."'";
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
$tmp[$contador] = new PersonaautorizadasDTO();
$tmp[$contador]->setIdPersonaAutorizada($row["IdPersonaAutorizada"]);
$tmp[$contador]->setNombre($row["Nombre"]);
$tmp[$contador]->setPaterno($row["Paterno"]);
$tmp[$contador]->setMaterno($row["Materno"]);
$tmp[$contador]->setCedula($row["Cedula"]);
$tmp[$contador]->setEmail($row["email"]);
$tmp[$contador]->setFechaAlta($row["FechaAlta"]);
$tmp[$contador]->setFechaBaja($row["FechaBaja"]);
$tmp[$contador]->setFechaModificacion($row["FechaModificacion"]);
$tmp[$contador]->setActivo($row["Activo"]);
$tmp[$contador]->setEmailAlternativo($row["emailAlternativo"]);
$tmp[$contador]->setCveTipoAbogado($row["CveTipoAbogado"]);
$tmp[$contador]->setUsuario($row["Usuario"]);
$tmp[$contador]->setPassword($row["Password"]);
$tmp[$contador]->setDireccion($row["Direccion"]);
$tmp[$contador]->setTelefono($row["Telefono"]);
$tmp[$contador]->setUsuarioRegistro($row["UsuarioRegistro"]);
$tmp[$contador]->setJuzgadoRegistro($row["JuzgadoRegistro"]);
$tmp[$contador]->setCiudad($row["Ciudad"]);
$tmp[$contador]->setCveEstado($row["CveEstado"]);
$tmp[$contador]->setCveEstatusRegistro($row["CveEstatusRegistro"]);
$tmp[$contador]->setCveUsuario($row["CveUsuario"]);
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