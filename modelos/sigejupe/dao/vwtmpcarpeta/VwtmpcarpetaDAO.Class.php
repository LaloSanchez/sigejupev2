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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/vwtmpcarpeta/VwtmpcarpetaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class VwtmpcarpetaDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertVwtmpcarpeta($vwtmpcarpetaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO vwtmpcarpeta(";
if($vwtmpcarpetaDto->getidCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial";
if(($vwtmpcarpetaDto->getNumero()!="") ||($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getnumero()!=""){
$sql.="numero";
if(($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getanio()!=""){
$sql.="anio";
if(($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getnuc()!=""){
$sql.="nuc";
if(($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcarpetaInv()!=""){
$sql.="carpetaInv";
if(($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveJuzgado()!=""){
$sql.="cveJuzgado";
if(($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal";
if(($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getactivo()!=""){
$sql.="activo";
}
$sql.=") VALUES(";
if($vwtmpcarpetaDto->getidCarpetaJudicial()!=""){
$sql.="'".$vwtmpcarpetaDto->getidCarpetaJudicial()."'";
if(($vwtmpcarpetaDto->getNumero()!="") ||($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getnumero()!=""){
$sql.="'".$vwtmpcarpetaDto->getnumero()."'";
if(($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getanio()!=""){
$sql.="'".$vwtmpcarpetaDto->getanio()."'";
if(($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveTipoCarpeta()!=""){
$sql.="'".$vwtmpcarpetaDto->getcveTipoCarpeta()."'";
if(($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getnuc()!=""){
$sql.="'".$vwtmpcarpetaDto->getnuc()."'";
if(($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcarpetaInv()!=""){
$sql.="'".$vwtmpcarpetaDto->getcarpetaInv()."'";
if(($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveJuzgado()!=""){
$sql.="'".$vwtmpcarpetaDto->getcveJuzgado()."'";
if(($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveEtapaProcesal()!=""){
$sql.="'".$vwtmpcarpetaDto->getcveEtapaProcesal()."'";
if(($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getactivo()!=""){
$sql.="'".$vwtmpcarpetaDto->getactivo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VwtmpcarpetaDTO();
$tmp->set($this->_proveedor->lastID());
$tmp = $this->selectVwtmpcarpeta($tmp,"",$this->_proveedor);
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
public function updateVwtmpcarpeta($vwtmpcarpetaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE vwtmpcarpeta SET ";
if($vwtmpcarpetaDto->getidCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$vwtmpcarpetaDto->getidCarpetaJudicial()."'";
if(($vwtmpcarpetaDto->getNumero()!="") ||($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getnumero()!=""){
$sql.="numero='".$vwtmpcarpetaDto->getnumero()."'";
if(($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getanio()!=""){
$sql.="anio='".$vwtmpcarpetaDto->getanio()."'";
if(($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$vwtmpcarpetaDto->getcveTipoCarpeta()."'";
if(($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getnuc()!=""){
$sql.="nuc='".$vwtmpcarpetaDto->getnuc()."'";
if(($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcarpetaInv()!=""){
$sql.="carpetaInv='".$vwtmpcarpetaDto->getcarpetaInv()."'";
if(($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveJuzgado()!=""){
$sql.="cveJuzgado='".$vwtmpcarpetaDto->getcveJuzgado()."'";
if(($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$vwtmpcarpetaDto->getcveEtapaProcesal()."'";
if(($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=",";
}
}
if($vwtmpcarpetaDto->getactivo()!=""){
$sql.="activo='".$vwtmpcarpetaDto->getactivo()."'";
}
$sql.=" WHERE ='".$vwtmpcarpetaDto->get()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VwtmpcarpetaDTO();
$tmp->set($vwtmpcarpetaDto->get());
$tmp = $this->selectVwtmpcarpeta($tmp,"",$this->_proveedor);
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
public function deleteVwtmpcarpeta($vwtmpcarpetaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM vwtmpcarpeta  WHERE ='".$vwtmpcarpetaDto->get()."'";
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
public function selectVwtmpcarpeta($vwtmpcarpetaDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idCarpetaJudicial,numero,anio,cveTipoCarpeta,nuc,carpetaInv,cveJuzgado,cveEtapaProcesal,activo FROM vwtmpcarpeta ";
if(($vwtmpcarpetaDto->getidCarpetaJudicial()!="") ||($vwtmpcarpetaDto->getnumero()!="") ||($vwtmpcarpetaDto->getanio()!="") ||($vwtmpcarpetaDto->getcveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getnuc()!="") ||($vwtmpcarpetaDto->getcarpetaInv()!="") ||($vwtmpcarpetaDto->getcveJuzgado()!="") ||($vwtmpcarpetaDto->getcveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getactivo()!="") ){
$sql.=" WHERE ";
}
if($vwtmpcarpetaDto->getidCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$vwtmpcarpetaDto->getIdCarpetaJudicial()."'";
if(($vwtmpcarpetaDto->getNumero()!="") ||($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getnumero()!=""){
$sql.="numero='".$vwtmpcarpetaDto->getNumero()."'";
if(($vwtmpcarpetaDto->getAnio()!="") ||($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getanio()!=""){
$sql.="anio='".$vwtmpcarpetaDto->getAnio()."'";
if(($vwtmpcarpetaDto->getCveTipoCarpeta()!="") ||($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getcveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$vwtmpcarpetaDto->getCveTipoCarpeta()."'";
if(($vwtmpcarpetaDto->getNuc()!="") ||($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getnuc()!=""){
$sql.="nuc='".$vwtmpcarpetaDto->getNuc()."'";
if(($vwtmpcarpetaDto->getCarpetaInv()!="") ||($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getcarpetaInv()!=""){
$sql.="carpetaInv='".$vwtmpcarpetaDto->getCarpetaInv()."'";
if(($vwtmpcarpetaDto->getCveJuzgado()!="") ||($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getcveJuzgado()!=""){
$sql.="cveJuzgado='".$vwtmpcarpetaDto->getCveJuzgado()."'";
if(($vwtmpcarpetaDto->getCveEtapaProcesal()!="") ||($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$vwtmpcarpetaDto->getCveEtapaProcesal()."'";
if(($vwtmpcarpetaDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($vwtmpcarpetaDto->getactivo()!=""){
$sql.="activo='".$vwtmpcarpetaDto->getActivo()."'";
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
$tmp[$contador] = new VwtmpcarpetaDTO();
$tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
$tmp[$contador]->setNumero($row["numero"]);
$tmp[$contador]->setAnio($row["anio"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
$tmp[$contador]->setNuc($row["nuc"]);
$tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
$tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
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