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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class BeneficiosesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertBeneficioses($beneficiosesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblbeneficioses(";
if($beneficiosesDto->getIdBeneficioES()!=""){
$sql.="idBeneficioES";
if(($beneficiosesDto->getIdActuacion()!="") ||($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoSancion()!=""){
$sql.="idImputadoSancion";
if(($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoSancionNvo()!=""){
$sql.="IdImputadoSancionNvo";
if(($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getApelada()!=""){
$sql.="Apelada";
if(($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaInicio()!=""){
$sql.="fechaInicio";
if(($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaTermina()!=""){
$sql.="fechaTermina";
if(($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion";
if(($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="cveTipoBeneficioES";
if(($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($beneficiosesDto->getIdBeneficioES()!=""){
$sql.="'".$beneficiosesDto->getIdBeneficioES()."'";
if(($beneficiosesDto->getIdActuacion()!="") ||($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdActuacion()!=""){
$sql.="'".$beneficiosesDto->getIdActuacion()."'";
if(($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoCarpeta()!=""){
$sql.="'".$beneficiosesDto->getIdImputadoCarpeta()."'";
if(($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoSancion()!=""){
$sql.="'".$beneficiosesDto->getIdImputadoSancion()."'";
if(($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoSancionNvo()!=""){
$sql.="'".$beneficiosesDto->getIdImputadoSancionNvo()."'";
if(($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getApelada()!=""){
$sql.="'".$beneficiosesDto->getApelada()."'";
if(($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaInicio()!=""){
$sql.="'".$beneficiosesDto->getFechaInicio()."'";
if(($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaTermina()!=""){
$sql.="'".$beneficiosesDto->getFechaTermina()."'";
if(($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getCveTipoSancion()!=""){
$sql.="'".$beneficiosesDto->getCveTipoSancion()."'";
if(($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="'".$beneficiosesDto->getCveTipoBeneficioES()."'";
if(($beneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getActivo()!=""){
$sql.="'".$beneficiosesDto->getActivo()."'";
}
if($beneficiosesDto->getFechaRegistro()!=""){
}
if($beneficiosesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new BeneficiosesDTO();
$tmp->setidBeneficioES($this->_proveedor->lastID());
$tmp = $this->selectBeneficioses($tmp,"",$this->_proveedor);
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
public function updateBeneficioses($beneficiosesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor; 
}
$sql="UPDATE tblbeneficioses SET ";
if($beneficiosesDto->getIdBeneficioES()!=""){
$sql.="idBeneficioES='".$beneficiosesDto->getIdBeneficioES()."'";
if(($beneficiosesDto->getIdActuacion()!="") ||($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$beneficiosesDto->getIdActuacion()."'";
if(($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$beneficiosesDto->getIdImputadoCarpeta()."'";
if(($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoSancion()!=""){
$sql.="idImputadoSancion='".$beneficiosesDto->getIdImputadoSancion()."'";
if(($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getIdImputadoSancionNvo()!=""){
$sql.="IdImputadoSancionNvo='".$beneficiosesDto->getIdImputadoSancionNvo()."'";
if(($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getApelada()!=""){
$sql.="Apelada='".$beneficiosesDto->getApelada()."'";
if(($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$beneficiosesDto->getFechaInicio()."'";
if(($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaTermina()!=""){
$sql.="fechaTermina='".$beneficiosesDto->getFechaTermina()."'";
if(($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion='".$beneficiosesDto->getCveTipoSancion()."'";
if(($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="cveTipoBeneficioES='".$beneficiosesDto->getCveTipoBeneficioES()."'";
if(($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getActivo()!=""){
$sql.="activo='".$beneficiosesDto->getActivo()."'";
if(($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$beneficiosesDto->getFechaRegistro()."'";
if(($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($beneficiosesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$beneficiosesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idBeneficioES='".$beneficiosesDto->getIdBeneficioES()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new BeneficiosesDTO();
$tmp->setidBeneficioES($beneficiosesDto->getIdBeneficioES());
$tmp = $this->selectBeneficioses($tmp,"",$this->_proveedor);
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
public function deleteBeneficioses($beneficiosesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblbeneficioses  WHERE idBeneficioES='".$beneficiosesDto->getIdBeneficioES()."'";
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
public function selectBeneficioses($beneficiosesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idBeneficioES,idActuacion,idImputadoCarpeta,idImputadoSancion,IdImputadoSancionNvo,Apelada,fechaInicio,fechaTermina,cveTipoSancion,cveTipoBeneficioES,activo,fechaRegistro,fechaActualizacion FROM tblbeneficioses ";
if(($beneficiosesDto->getIdBeneficioES()!="") ||($beneficiosesDto->getIdActuacion()!="") ||($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($beneficiosesDto->getIdBeneficioES()!=""){
$sql.="idBeneficioES='".$beneficiosesDto->getIdBeneficioES()."'";
if(($beneficiosesDto->getIdActuacion()!="") ||($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$beneficiosesDto->getIdActuacion()."'";
if(($beneficiosesDto->getIdImputadoCarpeta()!="") ||($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$beneficiosesDto->getIdImputadoCarpeta()."'";
if(($beneficiosesDto->getIdImputadoSancion()!="") ||($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getIdImputadoSancion()!=""){
$sql.="idImputadoSancion='".$beneficiosesDto->getIdImputadoSancion()."'";
if(($beneficiosesDto->getIdImputadoSancionNvo()!="") ||($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getIdImputadoSancionNvo()!=""){
$sql.="IdImputadoSancionNvo='".$beneficiosesDto->getIdImputadoSancionNvo()."'";
if(($beneficiosesDto->getApelada()!="") ||($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getApelada()!=""){
$sql.="Apelada='".$beneficiosesDto->getApelada()."'";
if(($beneficiosesDto->getFechaInicio()!="") ||($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$beneficiosesDto->getFechaInicio()."'";
if(($beneficiosesDto->getFechaTermina()!="") ||($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getFechaTermina()!=""){
$sql.="fechaTermina='".$beneficiosesDto->getFechaTermina()."'";
if(($beneficiosesDto->getCveTipoSancion()!="") ||($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion='".$beneficiosesDto->getCveTipoSancion()."'";
if(($beneficiosesDto->getCveTipoBeneficioES()!="") ||($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="cveTipoBeneficioES='".$beneficiosesDto->getCveTipoBeneficioES()."'";
if(($beneficiosesDto->getActivo()!="") ||($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getActivo()!=""){
$sql.="activo='".$beneficiosesDto->getActivo()."'";
if(($beneficiosesDto->getFechaRegistro()!="") ||($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$beneficiosesDto->getFechaRegistro()."'";
if(($beneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($beneficiosesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$beneficiosesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new BeneficiosesDTO();
$tmp[$contador]->setIdBeneficioES($row["idBeneficioES"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setIdImputadoSancion($row["idImputadoSancion"]);
$tmp[$contador]->setIdImputadoSancionNvo($row["IdImputadoSancionNvo"]);
$tmp[$contador]->setApelada($row["Apelada"]);
$tmp[$contador]->setFechaInicio($row["fechaInicio"]);
$tmp[$contador]->setFechaTermina($row["fechaTermina"]);
$tmp[$contador]->setCveTipoSancion($row["cveTipoSancion"]);
$tmp[$contador]->setCveTipoBeneficioES($row["cveTipoBeneficioES"]);
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