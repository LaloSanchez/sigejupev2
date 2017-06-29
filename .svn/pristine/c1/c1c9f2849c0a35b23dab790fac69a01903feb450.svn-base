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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/incompetencias/IncompetenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class IncompetenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertIncompetencias($incompetenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblincompetencias(";
if($incompetenciasDto->getIdIncompetencias()!=""){
$sql.="idIncompetencias";
if(($incompetenciasDto->getIdActuacion()!="") ||($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveTipoIncompetencia()!=""){
$sql.="cveTipoIncompetencia";
if(($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveJuzgadoOrigen()!=""){
$sql.="cveJuzgadoOrigen";
if(($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveTipoCarpetaOrigen()!=""){
$sql.="cveTipoCarpetaOrigen";
if(($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getNumero()!=""){
$sql.="numero";
if(($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getAnio()!=""){
$sql.="anio";
if(($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getOtroTipoCarpetaOrigen()!=""){
$sql.="otroTipoCarpetaOrigen";
if(($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getOtroJuzgadoOrigen()!=""){
$sql.="otroJuzgadoOrigen";
if(($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($incompetenciasDto->getIdIncompetencias()!=""){
$sql.="'".$incompetenciasDto->getIdIncompetencias()."'";
if(($incompetenciasDto->getIdActuacion()!="") ||($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getIdActuacion()!=""){
$sql.="'".$incompetenciasDto->getIdActuacion()."'";
if(($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveTipoIncompetencia()!=""){
$sql.="'".$incompetenciasDto->getCveTipoIncompetencia()."'";
if(($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveJuzgadoOrigen()!=""){
$sql.="'".$incompetenciasDto->getCveJuzgadoOrigen()."'";
if(($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveTipoCarpetaOrigen()!=""){
$sql.="'".$incompetenciasDto->getCveTipoCarpetaOrigen()."'";
if(($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getNumero()!=""){
$sql.="'".$incompetenciasDto->getNumero()."'";
if(($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getAnio()!=""){
$sql.="'".$incompetenciasDto->getAnio()."'";
if(($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getOtroTipoCarpetaOrigen()!=""){
$sql.="'".$incompetenciasDto->getOtroTipoCarpetaOrigen()."'";
if(($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getOtroJuzgadoOrigen()!=""){
$sql.="'".$incompetenciasDto->getOtroJuzgadoOrigen()."'";
if(($incompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getActivo()!=""){
$sql.="'".$incompetenciasDto->getActivo()."'";
}
if($incompetenciasDto->getFechaRegistro()!=""){
}
if($incompetenciasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new IncompetenciasDTO();
$tmp->setidIncompetencias($this->_proveedor->lastID());
$tmp = $this->selectIncompetencias($tmp,"",$this->_proveedor);
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
public function updateIncompetencias($incompetenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblincompetencias SET ";
if($incompetenciasDto->getIdIncompetencias()!=""){
$sql.="idIncompetencias='".$incompetenciasDto->getIdIncompetencias()."'";
if(($incompetenciasDto->getIdActuacion()!="") ||($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$incompetenciasDto->getIdActuacion()."'";
if(($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveTipoIncompetencia()!=""){
$sql.="cveTipoIncompetencia='".$incompetenciasDto->getCveTipoIncompetencia()."'";
if(($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveJuzgadoOrigen()!=""){
$sql.="cveJuzgadoOrigen='".$incompetenciasDto->getCveJuzgadoOrigen()."'";
if(($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getCveTipoCarpetaOrigen()!=""){
$sql.="cveTipoCarpetaOrigen='".$incompetenciasDto->getCveTipoCarpetaOrigen()."'";
if(($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getNumero()!=""){
$sql.="numero='".$incompetenciasDto->getNumero()."'";
if(($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getAnio()!=""){
$sql.="anio='".$incompetenciasDto->getAnio()."'";
if(($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getOtroTipoCarpetaOrigen()!=""){
$sql.="otroTipoCarpetaOrigen='".$incompetenciasDto->getOtroTipoCarpetaOrigen()."'";
if(($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getOtroJuzgadoOrigen()!=""){
$sql.="otroJuzgadoOrigen='".$incompetenciasDto->getOtroJuzgadoOrigen()."'";
if(($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getActivo()!=""){
$sql.="activo='".$incompetenciasDto->getActivo()."'";
if(($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$incompetenciasDto->getFechaRegistro()."'";
if(($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($incompetenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$incompetenciasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idIncompetencias='".$incompetenciasDto->getIdIncompetencias()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new IncompetenciasDTO();
$tmp->setidIncompetencias($incompetenciasDto->getIdIncompetencias());
$tmp = $this->selectIncompetencias($tmp,"",$this->_proveedor);
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
public function deleteIncompetencias($incompetenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblincompetencias  WHERE idIncompetencias='".$incompetenciasDto->getIdIncompetencias()."'";
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
public function selectIncompetencias($incompetenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idIncompetencias,idActuacion,cveTipoIncompetencia,cveJuzgadoOrigen,cveTipoCarpetaOrigen,numero,anio,otroTipoCarpetaOrigen,otroJuzgadoOrigen,activo,fechaRegistro,fechaActualizacion FROM tblincompetencias ";
if(($incompetenciasDto->getIdIncompetencias()!="") ||($incompetenciasDto->getIdActuacion()!="") ||($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($incompetenciasDto->getIdIncompetencias()!=""){
$sql.="idIncompetencias='".$incompetenciasDto->getIdIncompetencias()."'";
if(($incompetenciasDto->getIdActuacion()!="") ||($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$incompetenciasDto->getIdActuacion()."'";
if(($incompetenciasDto->getCveTipoIncompetencia()!="") ||($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getCveTipoIncompetencia()!=""){
$sql.="cveTipoIncompetencia='".$incompetenciasDto->getCveTipoIncompetencia()."'";
if(($incompetenciasDto->getCveJuzgadoOrigen()!="") ||($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getCveJuzgadoOrigen()!=""){
$sql.="cveJuzgadoOrigen='".$incompetenciasDto->getCveJuzgadoOrigen()."'";
if(($incompetenciasDto->getCveTipoCarpetaOrigen()!="") ||($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getCveTipoCarpetaOrigen()!=""){
$sql.="cveTipoCarpetaOrigen='".$incompetenciasDto->getCveTipoCarpetaOrigen()."'";
if(($incompetenciasDto->getNumero()!="") ||($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getNumero()!=""){
$sql.="numero='".$incompetenciasDto->getNumero()."'";
if(($incompetenciasDto->getAnio()!="") ||($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getAnio()!=""){
$sql.="anio='".$incompetenciasDto->getAnio()."'";
if(($incompetenciasDto->getOtroTipoCarpetaOrigen()!="") ||($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getOtroTipoCarpetaOrigen()!=""){
$sql.="otroTipoCarpetaOrigen='".$incompetenciasDto->getOtroTipoCarpetaOrigen()."'";
if(($incompetenciasDto->getOtroJuzgadoOrigen()!="") ||($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getOtroJuzgadoOrigen()!=""){
$sql.="otroJuzgadoOrigen='".$incompetenciasDto->getOtroJuzgadoOrigen()."'";
if(($incompetenciasDto->getActivo()!="") ||($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getActivo()!=""){
$sql.="activo='".$incompetenciasDto->getActivo()."'";
if(($incompetenciasDto->getFechaRegistro()!="") ||($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$incompetenciasDto->getFechaRegistro()."'";
if(($incompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($incompetenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$incompetenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new IncompetenciasDTO();
$tmp[$contador]->setIdIncompetencias($row["idIncompetencias"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setCveTipoIncompetencia($row["cveTipoIncompetencia"]);
$tmp[$contador]->setCveJuzgadoOrigen($row["cveJuzgadoOrigen"]);
$tmp[$contador]->setCveTipoCarpetaOrigen($row["cveTipoCarpetaOrigen"]);
$tmp[$contador]->setNumero($row["numero"]);
$tmp[$contador]->setAnio($row["anio"]);
$tmp[$contador]->setOtroTipoCarpetaOrigen($row["otroTipoCarpetaOrigen"]);
$tmp[$contador]->setOtroJuzgadoOrigen($row["otroJuzgadoOrigen"]);
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