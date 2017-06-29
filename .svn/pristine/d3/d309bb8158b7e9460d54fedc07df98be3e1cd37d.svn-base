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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AudienciasdistritosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAudienciasdistritos($audienciasdistritosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblaudienciasdistritos(";
if($audienciasdistritosDto->getIdAudienciaDistrito()!=""){
$sql.="idAudienciaDistrito";
if(($audienciasdistritosDto->getCveDistrito()!="") ||($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getCveDistrito()!=""){
$sql.="cveDistrito";
if(($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getCveCatAudiencia()!=""){
$sql.="cveCatAudiencia";
if(($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMinHorasDesahogar()!=""){
$sql.="minHorasDesahogar";
if(($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMaxHorasDesahogar()!=""){
$sql.="maxHorasDesahogar";
if(($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getHolgura()!=""){
$sql.="holgura";
if(($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMinDuracion()!=""){
$sql.="minDuracion";
if(($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMaxDuracion()!=""){
$sql.="maxDuracion";
if(($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getFinSemana()!=""){
$sql.="finSemana";
if(($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($audienciasdistritosDto->getIdAudienciaDistrito()!=""){
$sql.="'".$audienciasdistritosDto->getIdAudienciaDistrito()."'";
if(($audienciasdistritosDto->getCveDistrito()!="") ||($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getCveDistrito()!=""){
$sql.="'".$audienciasdistritosDto->getCveDistrito()."'";
if(($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getCveCatAudiencia()!=""){
$sql.="'".$audienciasdistritosDto->getCveCatAudiencia()."'";
if(($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMinHorasDesahogar()!=""){
$sql.="'".$audienciasdistritosDto->getMinHorasDesahogar()."'";
if(($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMaxHorasDesahogar()!=""){
$sql.="'".$audienciasdistritosDto->getMaxHorasDesahogar()."'";
if(($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getHolgura()!=""){
$sql.="'".$audienciasdistritosDto->getHolgura()."'";
if(($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMinDuracion()!=""){
$sql.="'".$audienciasdistritosDto->getMinDuracion()."'";
if(($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMaxDuracion()!=""){
$sql.="'".$audienciasdistritosDto->getMaxDuracion()."'";
if(($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getFinSemana()!=""){
$sql.="'".$audienciasdistritosDto->getFinSemana()."'";
if(($audienciasdistritosDto->getActivo()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getActivo()!=""){
$sql.="'".$audienciasdistritosDto->getActivo()."'";
}
if($audienciasdistritosDto->getFechaRegistro()!=""){
}
if($audienciasdistritosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AudienciasdistritosDTO();
$tmp->setidAudienciaDistrito($this->_proveedor->lastID());
$tmp = $this->selectAudienciasdistritos($tmp,"",$this->_proveedor);
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
public function updateAudienciasdistritos($audienciasdistritosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblaudienciasdistritos SET ";
if($audienciasdistritosDto->getIdAudienciaDistrito()!=""){
$sql.="idAudienciaDistrito='".$audienciasdistritosDto->getIdAudienciaDistrito()."'";
if(($audienciasdistritosDto->getCveDistrito()!="") ||($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getCveDistrito()!=""){
$sql.="cveDistrito='".$audienciasdistritosDto->getCveDistrito()."'";
if(($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getCveCatAudiencia()!=""){
$sql.="cveCatAudiencia='".$audienciasdistritosDto->getCveCatAudiencia()."'";
if(($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMinHorasDesahogar()!=""){
$sql.="minHorasDesahogar='".$audienciasdistritosDto->getMinHorasDesahogar()."'";
if(($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMaxHorasDesahogar()!=""){
$sql.="maxHorasDesahogar='".$audienciasdistritosDto->getMaxHorasDesahogar()."'";
if(($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getHolgura()!=""){
$sql.="holgura='".$audienciasdistritosDto->getHolgura()."'";
if(($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMinDuracion()!=""){
$sql.="minDuracion='".$audienciasdistritosDto->getMinDuracion()."'";
if(($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getMaxDuracion()!=""){
$sql.="maxDuracion='".$audienciasdistritosDto->getMaxDuracion()."'";
if(($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getFinSemana()!=""){
$sql.="finSemana='".$audienciasdistritosDto->getFinSemana()."'";
if(($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getActivo()!=""){
$sql.="activo='".$audienciasdistritosDto->getActivo()."'";
if(($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$audienciasdistritosDto->getFechaRegistro()."'";
if(($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($audienciasdistritosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$audienciasdistritosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idAudienciaDistrito='".$audienciasdistritosDto->getIdAudienciaDistrito()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AudienciasdistritosDTO();
$tmp->setidAudienciaDistrito($audienciasdistritosDto->getIdAudienciaDistrito());
$tmp = $this->selectAudienciasdistritos($tmp,"",$this->_proveedor);
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
public function deleteAudienciasdistritos($audienciasdistritosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblaudienciasdistritos  WHERE idAudienciaDistrito='".$audienciasdistritosDto->getIdAudienciaDistrito()."'";
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
public function selectAudienciasdistritos($audienciasdistritosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAudienciaDistrito,cveDistrito,cveCatAudiencia,minHorasDesahogar,maxHorasDesahogar,holgura,minDuracion,maxDuracion,finSemana,activo,fechaRegistro,fechaActualizacion FROM tblaudienciasdistritos ";
if(($audienciasdistritosDto->getIdAudienciaDistrito()!="") ||($audienciasdistritosDto->getCveDistrito()!="") ||($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($audienciasdistritosDto->getIdAudienciaDistrito()!=""){
$sql.="idAudienciaDistrito='".$audienciasdistritosDto->getIdAudienciaDistrito()."'";
if(($audienciasdistritosDto->getCveDistrito()!="") ||($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getCveDistrito()!=""){
$sql.="cveDistrito='".$audienciasdistritosDto->getCveDistrito()."'";
if(($audienciasdistritosDto->getCveCatAudiencia()!="") ||($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getCveCatAudiencia()!=""){
$sql.="cveCatAudiencia='".$audienciasdistritosDto->getCveCatAudiencia()."'";
if(($audienciasdistritosDto->getMinHorasDesahogar()!="") ||($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getMinHorasDesahogar()!=""){
$sql.="minHorasDesahogar='".$audienciasdistritosDto->getMinHorasDesahogar()."'";
if(($audienciasdistritosDto->getMaxHorasDesahogar()!="") ||($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getMaxHorasDesahogar()!=""){
$sql.="maxHorasDesahogar='".$audienciasdistritosDto->getMaxHorasDesahogar()."'";
if(($audienciasdistritosDto->getHolgura()!="") ||($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getHolgura()!=""){
$sql.="holgura='".$audienciasdistritosDto->getHolgura()."'";
if(($audienciasdistritosDto->getMinDuracion()!="") ||($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getMinDuracion()!=""){
$sql.="minDuracion='".$audienciasdistritosDto->getMinDuracion()."'";
if(($audienciasdistritosDto->getMaxDuracion()!="") ||($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getMaxDuracion()!=""){
$sql.="maxDuracion='".$audienciasdistritosDto->getMaxDuracion()."'";
if(($audienciasdistritosDto->getFinSemana()!="") ||($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getFinSemana()!=""){
$sql.="finSemana='".$audienciasdistritosDto->getFinSemana()."'";
if(($audienciasdistritosDto->getActivo()!="") ||($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getActivo()!=""){
$sql.="activo='".$audienciasdistritosDto->getActivo()."'";
if(($audienciasdistritosDto->getFechaRegistro()!="") ||($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$audienciasdistritosDto->getFechaRegistro()."'";
if(($audienciasdistritosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($audienciasdistritosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$audienciasdistritosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AudienciasdistritosDTO();
$tmp[$contador]->setIdAudienciaDistrito($row["idAudienciaDistrito"]);
$tmp[$contador]->setCveDistrito($row["cveDistrito"]);
$tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
$tmp[$contador]->setMinHorasDesahogar($row["minHorasDesahogar"]);
$tmp[$contador]->setMaxHorasDesahogar($row["maxHorasDesahogar"]);
$tmp[$contador]->setHolgura($row["holgura"]);
$tmp[$contador]->setMinDuracion($row["minDuracion"]);
$tmp[$contador]->setMaxDuracion($row["maxDuracion"]);
$tmp[$contador]->setFinSemana($row["finSemana"]);
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