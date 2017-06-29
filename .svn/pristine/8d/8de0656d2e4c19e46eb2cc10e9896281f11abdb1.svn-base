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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/aperturasapeladas/AperturasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AperturasapeladasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAperturasapeladas($aperturasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblaperturasapeladas(";
if($aperturasapeladasDto->getIdAperturaApelada()!=""){
$sql.="idAperturaApelada";
if(($aperturasapeladasDto->getIdAperturaJuicio()!="") ||($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getIdAperturaJuicio()!=""){
$sql.="idAperturaJuicio";
if(($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getCveSentido()!=""){
$sql.="cveSentido";
if(($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getNumToca()!=""){
$sql.="NumToca";
if(($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getAnioToca()!=""){
$sql.="AnioToca";
if(($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getCveSala()!=""){
$sql.="CveSala";
if(($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getNumAmp()!=""){
$sql.="NumAmp";
if(($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getAnioAmp()!=""){
$sql.="AnioAmp";
if(($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getJuzDistrito()!=""){
$sql.="JuzDistrito";
if(($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($aperturasapeladasDto->getIdAperturaApelada()!=""){
$sql.="'".$aperturasapeladasDto->getIdAperturaApelada()."'";
if(($aperturasapeladasDto->getIdAperturaJuicio()!="") ||($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getIdAperturaJuicio()!=""){
$sql.="'".$aperturasapeladasDto->getIdAperturaJuicio()."'";
if(($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getCveSentido()!=""){
$sql.="'".$aperturasapeladasDto->getCveSentido()."'";
if(($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getNumToca()!=""){
$sql.="'".$aperturasapeladasDto->getNumToca()."'";
if(($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getAnioToca()!=""){
$sql.="'".$aperturasapeladasDto->getAnioToca()."'";
if(($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getCveSala()!=""){
$sql.="'".$aperturasapeladasDto->getCveSala()."'";
if(($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getNumAmp()!=""){
$sql.="'".$aperturasapeladasDto->getNumAmp()."'";
if(($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getAnioAmp()!=""){
$sql.="'".$aperturasapeladasDto->getAnioAmp()."'";
if(($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getJuzDistrito()!=""){
$sql.="'".$aperturasapeladasDto->getJuzDistrito()."'";
if(($aperturasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getActivo()!=""){
$sql.="'".$aperturasapeladasDto->getActivo()."'";
}
if($aperturasapeladasDto->getFechaRegistro()!=""){
}
if($aperturasapeladasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AperturasapeladasDTO();
$tmp->setidAperturaApelada($this->_proveedor->lastID());
$tmp = $this->selectAperturasapeladas($tmp,"",$this->_proveedor);
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
public function updateAperturasapeladas($aperturasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblaperturasapeladas SET ";
if($aperturasapeladasDto->getIdAperturaApelada()!=""){
$sql.="idAperturaApelada='".$aperturasapeladasDto->getIdAperturaApelada()."'";
if(($aperturasapeladasDto->getIdAperturaJuicio()!="") ||($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getIdAperturaJuicio()!=""){
$sql.="idAperturaJuicio='".$aperturasapeladasDto->getIdAperturaJuicio()."'";
if(($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$aperturasapeladasDto->getCveSentido()."'";
if(($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$aperturasapeladasDto->getNumToca()."'";
if(($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$aperturasapeladasDto->getAnioToca()."'";
if(($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$aperturasapeladasDto->getCveSala()."'";
if(($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getNumAmp()!=""){
$sql.="NumAmp='".$aperturasapeladasDto->getNumAmp()."'";
if(($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getAnioAmp()!=""){
$sql.="AnioAmp='".$aperturasapeladasDto->getAnioAmp()."'";
if(($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getJuzDistrito()!=""){
$sql.="JuzDistrito='".$aperturasapeladasDto->getJuzDistrito()."'";
if(($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getActivo()!=""){
$sql.="activo='".$aperturasapeladasDto->getActivo()."'";
if(($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$aperturasapeladasDto->getFechaRegistro()."'";
if(($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($aperturasapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$aperturasapeladasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idAperturaApelada='".$aperturasapeladasDto->getIdAperturaApelada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AperturasapeladasDTO();
$tmp->setidAperturaApelada($aperturasapeladasDto->getIdAperturaApelada());
$tmp = $this->selectAperturasapeladas($tmp,"",$this->_proveedor);
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
public function deleteAperturasapeladas($aperturasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblaperturasapeladas  WHERE idAperturaApelada='".$aperturasapeladasDto->getIdAperturaApelada()."'";
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
public function selectAperturasapeladas($aperturasapeladasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAperturaApelada,idAperturaJuicio,cveSentido,NumToca,AnioToca,CveSala,NumAmp,AnioAmp,JuzDistrito,activo,fechaRegistro,fechaActualizacion FROM tblaperturasapeladas ";
if(($aperturasapeladasDto->getIdAperturaApelada()!="") ||($aperturasapeladasDto->getIdAperturaJuicio()!="") ||($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($aperturasapeladasDto->getIdAperturaApelada()!=""){
$sql.="idAperturaApelada='".$aperturasapeladasDto->getIdAperturaApelada()."'";
if(($aperturasapeladasDto->getIdAperturaJuicio()!="") ||($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getIdAperturaJuicio()!=""){
$sql.="idAperturaJuicio='".$aperturasapeladasDto->getIdAperturaJuicio()."'";
if(($aperturasapeladasDto->getCveSentido()!="") ||($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$aperturasapeladasDto->getCveSentido()."'";
if(($aperturasapeladasDto->getNumToca()!="") ||($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$aperturasapeladasDto->getNumToca()."'";
if(($aperturasapeladasDto->getAnioToca()!="") ||($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$aperturasapeladasDto->getAnioToca()."'";
if(($aperturasapeladasDto->getCveSala()!="") ||($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$aperturasapeladasDto->getCveSala()."'";
if(($aperturasapeladasDto->getNumAmp()!="") ||($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getNumAmp()!=""){
$sql.="NumAmp='".$aperturasapeladasDto->getNumAmp()."'";
if(($aperturasapeladasDto->getAnioAmp()!="") ||($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getAnioAmp()!=""){
$sql.="AnioAmp='".$aperturasapeladasDto->getAnioAmp()."'";
if(($aperturasapeladasDto->getJuzDistrito()!="") ||($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getJuzDistrito()!=""){
$sql.="JuzDistrito='".$aperturasapeladasDto->getJuzDistrito()."'";
if(($aperturasapeladasDto->getActivo()!="") ||($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getActivo()!=""){
$sql.="activo='".$aperturasapeladasDto->getActivo()."'";
if(($aperturasapeladasDto->getFechaRegistro()!="") ||($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$aperturasapeladasDto->getFechaRegistro()."'";
if(($aperturasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($aperturasapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$aperturasapeladasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AperturasapeladasDTO();
$tmp[$contador]->setIdAperturaApelada($row["idAperturaApelada"]);
$tmp[$contador]->setIdAperturaJuicio($row["idAperturaJuicio"]);
$tmp[$contador]->setCveSentido($row["cveSentido"]);
$tmp[$contador]->setNumToca($row["NumToca"]);
$tmp[$contador]->setAnioToca($row["AnioToca"]);
$tmp[$contador]->setCveSala($row["CveSala"]);
$tmp[$contador]->setNumAmp($row["NumAmp"]);
$tmp[$contador]->setAnioAmp($row["AnioAmp"]);
$tmp[$contador]->setJuzDistrito($row["JuzDistrito"]);
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