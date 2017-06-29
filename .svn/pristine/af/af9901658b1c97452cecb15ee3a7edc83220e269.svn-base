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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tercerosperjudicados/TercerosperjudicadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TercerosperjudicadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTercerosperjudicados($tercerosperjudicadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltercerosperjudicados(";
if($tercerosperjudicadosDto->getIdTercero()!=""){
$sql.="idTercero";
if(($tercerosperjudicadosDto->getIdAmparo()!="") ||($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getIdAmparo()!=""){
$sql.="idAmparo";
if(($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getPaternoT()!=""){
$sql.="paternoT";
if(($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getMaternoT()!=""){
$sql.="maternoT";
if(($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getNombreT()!=""){
$sql.="nombreT";
if(($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getNombreMoral()!=""){
$sql.="NombreMoral";
if(($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getDomicilio()!=""){
$sql.="domicilio";
if(($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getEmail()!=""){
$sql.="email";
if(($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveMunicipio()!=""){
$sql.="cveMunicipio";
if(($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=") VALUES(";
if($tercerosperjudicadosDto->getIdTercero()!=""){
$sql.="'".$tercerosperjudicadosDto->getIdTercero()."'";
if(($tercerosperjudicadosDto->getIdAmparo()!="") ||($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getIdAmparo()!=""){
$sql.="'".$tercerosperjudicadosDto->getIdAmparo()."'";
if(($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getPaternoT()!=""){
$sql.="'".$tercerosperjudicadosDto->getPaternoT()."'";
if(($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getMaternoT()!=""){
$sql.="'".$tercerosperjudicadosDto->getMaternoT()."'";
if(($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getNombreT()!=""){
$sql.="'".$tercerosperjudicadosDto->getNombreT()."'";
if(($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getNombreMoral()!=""){
$sql.="'".$tercerosperjudicadosDto->getNombreMoral()."'";
if(($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getDomicilio()!=""){
$sql.="'".$tercerosperjudicadosDto->getDomicilio()."'";
if(($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveTipoPersona()!=""){
$sql.="'".$tercerosperjudicadosDto->getCveTipoPersona()."'";
if(($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getEmail()!=""){
$sql.="'".$tercerosperjudicadosDto->getEmail()."'";
if(($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveMunicipio()!=""){
$sql.="'".$tercerosperjudicadosDto->getCveMunicipio()."'";
if(($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveGenero()!=""){
$sql.="'".$tercerosperjudicadosDto->getCveGenero()."'";
if(($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getActivo()!=""){
$sql.="'".$tercerosperjudicadosDto->getActivo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TercerosperjudicadosDTO();
$tmp->setidTercero($this->_proveedor->lastID());
$tmp = $this->selectTercerosperjudicados($tmp,"",$this->_proveedor);
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
public function updateTercerosperjudicados($tercerosperjudicadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltercerosperjudicados SET ";
if($tercerosperjudicadosDto->getIdTercero()!=""){
$sql.="idTercero='".$tercerosperjudicadosDto->getIdTercero()."'";
if(($tercerosperjudicadosDto->getIdAmparo()!="") ||($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getIdAmparo()!=""){
$sql.="idAmparo='".$tercerosperjudicadosDto->getIdAmparo()."'";
if(($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getPaternoT()!=""){
$sql.="paternoT='".$tercerosperjudicadosDto->getPaternoT()."'";
if(($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getMaternoT()!=""){
$sql.="maternoT='".$tercerosperjudicadosDto->getMaternoT()."'";
if(($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getNombreT()!=""){
$sql.="nombreT='".$tercerosperjudicadosDto->getNombreT()."'";
if(($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getNombreMoral()!=""){
$sql.="NombreMoral='".$tercerosperjudicadosDto->getNombreMoral()."'";
if(($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getDomicilio()!=""){
$sql.="domicilio='".$tercerosperjudicadosDto->getDomicilio()."'";
if(($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$tercerosperjudicadosDto->getCveTipoPersona()."'";
if(($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getEmail()!=""){
$sql.="email='".$tercerosperjudicadosDto->getEmail()."'";
if(($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveMunicipio()!=""){
$sql.="cveMunicipio='".$tercerosperjudicadosDto->getCveMunicipio()."'";
if(($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getCveGenero()!=""){
$sql.="cveGenero='".$tercerosperjudicadosDto->getCveGenero()."'";
if(($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tercerosperjudicadosDto->getActivo()!=""){
$sql.="activo='".$tercerosperjudicadosDto->getActivo()."'";
}
$sql.=" WHERE idTercero='".$tercerosperjudicadosDto->getIdTercero()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TercerosperjudicadosDTO();
$tmp->setidTercero($tercerosperjudicadosDto->getIdTercero());
$tmp = $this->selectTercerosperjudicados($tmp,"",$this->_proveedor);
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
public function deleteTercerosperjudicados($tercerosperjudicadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltercerosperjudicados  WHERE idTercero='".$tercerosperjudicadosDto->getIdTercero()."'";
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
public function selectTercerosperjudicados($tercerosperjudicadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTercero,idAmparo,paternoT,maternoT,nombreT,NombreMoral,domicilio,cveTipoPersona,email,cveMunicipio,cveGenero,activo FROM tbltercerosperjudicados ";
if(($tercerosperjudicadosDto->getIdTercero()!="") ||($tercerosperjudicadosDto->getIdAmparo()!="") ||($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($tercerosperjudicadosDto->getIdTercero()!=""){
$sql.="idTercero='".$tercerosperjudicadosDto->getIdTercero()."'";
if(($tercerosperjudicadosDto->getIdAmparo()!="") ||($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getIdAmparo()!=""){
$sql.="idAmparo='".$tercerosperjudicadosDto->getIdAmparo()."'";
if(($tercerosperjudicadosDto->getPaternoT()!="") ||($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getPaternoT()!=""){
$sql.="paternoT='".$tercerosperjudicadosDto->getPaternoT()."'";
if(($tercerosperjudicadosDto->getMaternoT()!="") ||($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getMaternoT()!=""){
$sql.="maternoT='".$tercerosperjudicadosDto->getMaternoT()."'";
if(($tercerosperjudicadosDto->getNombreT()!="") ||($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getNombreT()!=""){
$sql.="nombreT='".$tercerosperjudicadosDto->getNombreT()."'";
if(($tercerosperjudicadosDto->getNombreMoral()!="") ||($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getNombreMoral()!=""){
$sql.="NombreMoral='".$tercerosperjudicadosDto->getNombreMoral()."'";
if(($tercerosperjudicadosDto->getDomicilio()!="") ||($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getDomicilio()!=""){
$sql.="domicilio='".$tercerosperjudicadosDto->getDomicilio()."'";
if(($tercerosperjudicadosDto->getCveTipoPersona()!="") ||($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$tercerosperjudicadosDto->getCveTipoPersona()."'";
if(($tercerosperjudicadosDto->getEmail()!="") ||($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getEmail()!=""){
$sql.="email='".$tercerosperjudicadosDto->getEmail()."'";
if(($tercerosperjudicadosDto->getCveMunicipio()!="") ||($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getCveMunicipio()!=""){
$sql.="cveMunicipio='".$tercerosperjudicadosDto->getCveMunicipio()."'";
if(($tercerosperjudicadosDto->getCveGenero()!="") ||($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getCveGenero()!=""){
$sql.="cveGenero='".$tercerosperjudicadosDto->getCveGenero()."'";
if(($tercerosperjudicadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tercerosperjudicadosDto->getActivo()!=""){
$sql.="activo='".$tercerosperjudicadosDto->getActivo()."'";
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
$tmp[$contador] = new TercerosperjudicadosDTO();
$tmp[$contador]->setIdTercero($row["idTercero"]);
$tmp[$contador]->setIdAmparo($row["idAmparo"]);
$tmp[$contador]->setPaternoT($row["paternoT"]);
$tmp[$contador]->setMaternoT($row["maternoT"]);
$tmp[$contador]->setNombreT($row["nombreT"]);
$tmp[$contador]->setNombreMoral($row["NombreMoral"]);
$tmp[$contador]->setDomicilio($row["domicilio"]);
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setEmail($row["email"]);
$tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setActivo($row["activo"]);
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