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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/regionessalas/RegionessalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class RegionessalasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertRegionessalas($regionessalasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblregionessalas(";
if($regionessalasDto->getIdRegionSala()!=""){
$sql.="idRegionSala";
if(($regionessalasDto->getCveRegion()!="") ||($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getCveRegion()!=""){
$sql.="cveRegion";
if(($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado";
if(($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getProporcion()!=""){
$sql.="proporcion";
if(($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getProporcionExhorto()!=""){
$sql.="proporcionExhorto";
if(($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaNoDisponibilidadIncio()!=""){
$sql.="fechaNoDisponibilidadIncio";
if(($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaNoDisponibilidadTermino()!=""){
$sql.="fechaNoDisponibilidadTermino";
if(($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getControl()!=""){
$sql.="control";
if(($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTotalTocas()!=""){
$sql.="totalTocas";
if(($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTotalExhortos()!=""){
$sql.="totalExhortos";
if(($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTipoSala()!=""){
$sql.="tipoSala";
if(($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($regionessalasDto->getIdRegionSala()!=""){
$sql.="'".$regionessalasDto->getIdRegionSala()."'";
if(($regionessalasDto->getCveRegion()!="") ||($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getCveRegion()!=""){
$sql.="'".$regionessalasDto->getCveRegion()."'";
if(($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getCveJuzgado()!=""){
$sql.="'".$regionessalasDto->getCveJuzgado()."'";
if(($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getProporcion()!=""){
$sql.="'".$regionessalasDto->getProporcion()."'";
if(($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getProporcionExhorto()!=""){
$sql.="'".$regionessalasDto->getProporcionExhorto()."'";
if(($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaNoDisponibilidadIncio()!=""){
$sql.="'".$regionessalasDto->getFechaNoDisponibilidadIncio()."'";
if(($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaNoDisponibilidadTermino()!=""){
$sql.="'".$regionessalasDto->getFechaNoDisponibilidadTermino()."'";
if(($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getControl()!=""){
$sql.="'".$regionessalasDto->getControl()."'";
if(($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTotalTocas()!=""){
$sql.="'".$regionessalasDto->getTotalTocas()."'";
if(($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTotalExhortos()!=""){
$sql.="'".$regionessalasDto->getTotalExhortos()."'";
if(($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTipoSala()!=""){
$sql.="'".$regionessalasDto->getTipoSala()."'";
if(($regionessalasDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getActivo()!=""){
$sql.="'".$regionessalasDto->getActivo()."'";
}
if($regionessalasDto->getFechaRegistro()!=""){
}
if($regionessalasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RegionessalasDTO();
$tmp->setidRegionSala($this->_proveedor->lastID());
$tmp = $this->selectRegionessalas($tmp,"",$this->_proveedor);
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
public function updateRegionessalas($regionessalasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblregionessalas SET ";
if($regionessalasDto->getIdRegionSala()!=""){
$sql.="idRegionSala='".$regionessalasDto->getIdRegionSala()."'";
if(($regionessalasDto->getCveRegion()!="") ||($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getCveRegion()!=""){
$sql.="cveRegion='".$regionessalasDto->getCveRegion()."'";
if(($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$regionessalasDto->getCveJuzgado()."'";
if(($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getProporcion()!=""){
$sql.="proporcion='".$regionessalasDto->getProporcion()."'";
if(($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getProporcionExhorto()!=""){
$sql.="proporcionExhorto='".$regionessalasDto->getProporcionExhorto()."'";
if(($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaNoDisponibilidadIncio()!=""){
$sql.="fechaNoDisponibilidadIncio='".$regionessalasDto->getFechaNoDisponibilidadIncio()."'";
if(($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaNoDisponibilidadTermino()!=""){
$sql.="fechaNoDisponibilidadTermino='".$regionessalasDto->getFechaNoDisponibilidadTermino()."'";
if(($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getControl()!=""){
$sql.="control='".$regionessalasDto->getControl()."'";
if(($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTotalTocas()!=""){
$sql.="totalTocas='".$regionessalasDto->getTotalTocas()."'";
if(($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTotalExhortos()!=""){
$sql.="totalExhortos='".$regionessalasDto->getTotalExhortos()."'";
if(($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getTipoSala()!=""){
$sql.="tipoSala='".$regionessalasDto->getTipoSala()."'";
if(($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getActivo()!=""){
$sql.="activo='".$regionessalasDto->getActivo()."'";
if(($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$regionessalasDto->getFechaRegistro()."'";
if(($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionessalasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$regionessalasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idRegionSala='".$regionessalasDto->getIdRegionSala()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RegionessalasDTO();
$tmp->setidRegionSala($regionessalasDto->getIdRegionSala());
$tmp = $this->selectRegionessalas($tmp,"",$this->_proveedor);
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
public function deleteRegionessalas($regionessalasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblregionessalas  WHERE idRegionSala='".$regionessalasDto->getIdRegionSala()."'";
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
public function selectRegionessalas($regionessalasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idRegionSala,cveRegion,cveJuzgado,proporcion,proporcionExhorto,fechaNoDisponibilidadIncio,fechaNoDisponibilidadTermino,control,totalTocas,totalExhortos,tipoSala,activo,fechaRegistro,fechaActualizacion FROM tblregionessalas ";
if(($regionessalasDto->getIdRegionSala()!="") ||($regionessalasDto->getCveRegion()!="") ||($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($regionessalasDto->getIdRegionSala()!=""){
$sql.="idRegionSala='".$regionessalasDto->getIdRegionSala()."'";
if(($regionessalasDto->getCveRegion()!="") ||($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getCveRegion()!=""){
$sql.="cveRegion='".$regionessalasDto->getCveRegion()."'";
if(($regionessalasDto->getCveJuzgado()!="") ||($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$regionessalasDto->getCveJuzgado()."'";
if(($regionessalasDto->getProporcion()!="") ||($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getProporcion()!=""){
$sql.="proporcion='".$regionessalasDto->getProporcion()."'";
if(($regionessalasDto->getProporcionExhorto()!="") ||($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getProporcionExhorto()!=""){
$sql.="proporcionExhorto='".$regionessalasDto->getProporcionExhorto()."'";
if(($regionessalasDto->getFechaNoDisponibilidadIncio()!="") ||($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getFechaNoDisponibilidadIncio()!=""){
$sql.="fechaNoDisponibilidadIncio='".$regionessalasDto->getFechaNoDisponibilidadIncio()."'";
if(($regionessalasDto->getFechaNoDisponibilidadTermino()!="") ||($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getFechaNoDisponibilidadTermino()!=""){
$sql.="fechaNoDisponibilidadTermino='".$regionessalasDto->getFechaNoDisponibilidadTermino()."'";
if(($regionessalasDto->getControl()!="") ||($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getControl()!=""){
$sql.="control='".$regionessalasDto->getControl()."'";
if(($regionessalasDto->getTotalTocas()!="") ||($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getTotalTocas()!=""){
$sql.="totalTocas='".$regionessalasDto->getTotalTocas()."'";
if(($regionessalasDto->getTotalExhortos()!="") ||($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getTotalExhortos()!=""){
$sql.="totalExhortos='".$regionessalasDto->getTotalExhortos()."'";
if(($regionessalasDto->getTipoSala()!="") ||($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getTipoSala()!=""){
$sql.="tipoSala='".$regionessalasDto->getTipoSala()."'";
if(($regionessalasDto->getActivo()!="") ||($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getActivo()!=""){
$sql.="activo='".$regionessalasDto->getActivo()."'";
if(($regionessalasDto->getFechaRegistro()!="") ||($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$regionessalasDto->getFechaRegistro()."'";
if(($regionessalasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionessalasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$regionessalasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new RegionessalasDTO();
$tmp[$contador]->setIdRegionSala($row["idRegionSala"]);
$tmp[$contador]->setCveRegion($row["cveRegion"]);
$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
$tmp[$contador]->setProporcion($row["proporcion"]);
$tmp[$contador]->setProporcionExhorto($row["proporcionExhorto"]);
$tmp[$contador]->setFechaNoDisponibilidadIncio($row["fechaNoDisponibilidadIncio"]);
$tmp[$contador]->setFechaNoDisponibilidadTermino($row["fechaNoDisponibilidadTermino"]);
$tmp[$contador]->setControl($row["control"]);
$tmp[$contador]->setTotalTocas($row["totalTocas"]);
$tmp[$contador]->setTotalExhortos($row["totalExhortos"]);
$tmp[$contador]->setTipoSala($row["tipoSala"]);
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