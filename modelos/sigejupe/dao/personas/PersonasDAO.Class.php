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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/personas/PersonasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class PersonasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertPersonas($personasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblpersonas(";
if($personasDto->getidPersona()!=""){
$sql.="idPersona";
if(($personasDto->getIdSolicitudCateo()!="") ||($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo";
if(($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getpaterno()!=""){
$sql.="paterno";
if(($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getmaterno()!=""){
$sql.="materno";
if(($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getnombre()!=""){
$sql.="nombre";
if(($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getdomicilio()!=""){
$sql.="domicilio";
if(($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveMunicipio()!=""){
$sql.="cveMunicipio";
if(($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveGenero()!=""){
$sql.="cveGenero";
if(($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveOrigen()!=""){
$sql.="cveOrigen";
}
$sql.=") VALUES(";
if($personasDto->getidPersona()!=""){
$sql.="'".$personasDto->getidPersona()."'";
if(($personasDto->getIdSolicitudCateo()!="") ||($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getidSolicitudCateo()!=""){
$sql.="'".$personasDto->getidSolicitudCateo()."'";
if(($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getpaterno()!=""){
$sql.="'".$personasDto->getpaterno()."'";
if(($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getmaterno()!=""){
$sql.="'".$personasDto->getmaterno()."'";
if(($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getnombre()!=""){
$sql.="'".$personasDto->getnombre()."'";
if(($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getdomicilio()!=""){
$sql.="'".$personasDto->getdomicilio()."'";
if(($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveMunicipio()!=""){
$sql.="'".$personasDto->getcveMunicipio()."'";
if(($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveGenero()!=""){
$sql.="'".$personasDto->getcveGenero()."'";
if(($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveOrigen()!=""){
$sql.="'".$personasDto->getcveOrigen()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonasDTO();
$tmp->setidPersona($this->_proveedor->lastID());
$tmp = $this->selectPersonas($tmp,"",$this->_proveedor);
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
public function updatePersonas($personasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblpersonas SET ";
if($personasDto->getidPersona()!=""){
$sql.="idPersona='".$personasDto->getidPersona()."'";
if(($personasDto->getIdSolicitudCateo()!="") ||($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$personasDto->getidSolicitudCateo()."'";
if(($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getpaterno()!=""){
$sql.="paterno='".$personasDto->getpaterno()."'";
if(($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getmaterno()!=""){
$sql.="materno='".$personasDto->getmaterno()."'";
if(($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getnombre()!=""){
$sql.="nombre='".$personasDto->getnombre()."'";
if(($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getdomicilio()!=""){
$sql.="domicilio='".$personasDto->getdomicilio()."'";
if(($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveMunicipio()!=""){
$sql.="cveMunicipio='".$personasDto->getcveMunicipio()."'";
if(($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveGenero()!=""){
$sql.="cveGenero='".$personasDto->getcveGenero()."'";
if(($personasDto->getCveOrigen()!="") ){
$sql.=",";
}
}
if($personasDto->getcveOrigen()!=""){
$sql.="cveOrigen='".$personasDto->getcveOrigen()."'";
}
$sql.=" WHERE idPersona='".$personasDto->getidPersona()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonasDTO();
$tmp->setidPersona($personasDto->getidPersona());
$tmp = $this->selectPersonas($tmp,"",$this->_proveedor);
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
public function deletePersonas($personasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblpersonas  WHERE idPersona='".$personasDto->getidPersona()."'";
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
public function selectPersonas($personasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idPersona,idSolicitudCateo,paterno,materno,nombre,domicilio,cveMunicipio,cveGenero,cveOrigen FROM tblpersonas ";
if(($personasDto->getidPersona()!="") ||($personasDto->getidSolicitudCateo()!="") ||($personasDto->getpaterno()!="") ||($personasDto->getmaterno()!="") ||($personasDto->getnombre()!="") ||($personasDto->getdomicilio()!="") ||($personasDto->getcveMunicipio()!="") ||($personasDto->getcveGenero()!="") ||($personasDto->getcveOrigen()!="") ){
$sql.=" WHERE ";
}
if($personasDto->getidPersona()!=""){
$sql.="idPersona='".$personasDto->getIdPersona()."'";
if(($personasDto->getIdSolicitudCateo()!="") ||($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$personasDto->getIdSolicitudCateo()."'";
if(($personasDto->getPaterno()!="") ||($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getpaterno()!=""){
$sql.="paterno='".$personasDto->getPaterno()."'";
if(($personasDto->getMaterno()!="") ||($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getmaterno()!=""){
$sql.="materno='".$personasDto->getMaterno()."'";
if(($personasDto->getNombre()!="") ||($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getnombre()!=""){
$sql.="nombre='".$personasDto->getNombre()."'";
if(($personasDto->getDomicilio()!="") ||($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getdomicilio()!=""){
$sql.="domicilio='".$personasDto->getDomicilio()."'";
if(($personasDto->getCveMunicipio()!="") ||($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getcveMunicipio()!=""){
$sql.="cveMunicipio='".$personasDto->getCveMunicipio()."'";
if(($personasDto->getCveGenero()!="") ||($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getcveGenero()!=""){
$sql.="cveGenero='".$personasDto->getCveGenero()."'";
if(($personasDto->getCveOrigen()!="") ){
$sql.=" AND ";
}
}
if($personasDto->getcveOrigen()!=""){
$sql.="cveOrigen='".$personasDto->getCveOrigen()."'";
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
$tmp[$contador] = new PersonasDTO();
$tmp[$contador]->setIdPersona($row["idPersona"]);
$tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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