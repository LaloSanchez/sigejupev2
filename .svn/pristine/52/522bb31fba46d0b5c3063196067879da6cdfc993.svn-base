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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ExhortosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertExhortos($exhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblexhortos(";
if($exhortosDto->getIdExhorto()!=""){
$sql.="idExhorto";
if(($exhortosDto->getIdExhortoGenerado()!="") ||($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getIdExhortoGenerado()!=""){
$sql.="IdExhortoGenerado";
if(($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumExhorto()!=""){
$sql.="numExhorto";
if(($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAniExhorto()!=""){
$sql.="aniExhorto";
if(($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveJuzgado()!=""){
$sql.="cveJuzgado";
if(($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveEstadoProcedencia()!=""){
$sql.="cveEstadoProcedencia";
if(($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveJuzgadoProcedencia()!=""){
$sql.="cveJuzgadoProcedencia";
if(($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getJuzgadoProcedencia()!=""){
$sql.="juzgadoProcedencia";
if(($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCarpetaInv()!=""){
$sql.="carpetaInv";
if(($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNuc()!=""){
$sql.="nuc";
if(($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumero()!=""){
$sql.="numero";
if(($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAnio()!=""){
$sql.="anio";
if(($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumOficio()!=""){
$sql.="numOficio";
if(($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAniOficio()!=""){
$sql.="aniOficio";
if(($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFecOficio()!=""){
$sql.="fecOficio";
if(($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFecTermino()!=""){
$sql.="fecTermino";
if(($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getTextoExhorto()!=""){
$sql.="textoExhorto";
if(($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getTelefono()!=""){
$sql.="telefono";
if(($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCorreo()!=""){
$sql.="correo";
if(($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFacultadoAcordar()!=""){
$sql.="facultadoAcordar";
if(($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getUrldocs()!=""){
$sql.="urldocs";
if(($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getSintesis()!=""){
$sql.="sintesis";
if(($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getObservaciones()!=""){
$sql.="observaciones";
if(($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveConsignacion()!=""){
$sql.="cveConsignacion";
if(($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveEstatusExhorto()!=""){
$sql.="cveEstatusExhorto";
if(($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($exhortosDto->getIdExhorto()!=""){
$sql.="'".$exhortosDto->getIdExhorto()."'";
if(($exhortosDto->getIdExhortoGenerado()!="") ||($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getIdExhortoGenerado()!=""){
$sql.="'".$exhortosDto->getIdExhortoGenerado()."'";
if(($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumExhorto()!=""){
$sql.="'".$exhortosDto->getNumExhorto()."'";
if(($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAniExhorto()!=""){
$sql.="'".$exhortosDto->getAniExhorto()."'";
if(($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveJuzgado()!=""){
$sql.="'".$exhortosDto->getCveJuzgado()."'";
if(($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveEstadoProcedencia()!=""){
$sql.="'".$exhortosDto->getCveEstadoProcedencia()."'";
if(($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveJuzgadoProcedencia()!=""){
$sql.="'".$exhortosDto->getCveJuzgadoProcedencia()."'";
if(($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getJuzgadoProcedencia()!=""){
$sql.="'".$exhortosDto->getJuzgadoProcedencia()."'";
if(($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCarpetaInv()!=""){
$sql.="'".$exhortosDto->getCarpetaInv()."'";
if(($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNuc()!=""){
$sql.="'".$exhortosDto->getNuc()."'";
if(($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumero()!=""){
$sql.="'".$exhortosDto->getNumero()."'";
if(($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAnio()!=""){
$sql.="'".$exhortosDto->getAnio()."'";
if(($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveTipoCarpeta()!=""){
$sql.="'".$exhortosDto->getCveTipoCarpeta()."'";
if(($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumOficio()!=""){
$sql.="'".$exhortosDto->getNumOficio()."'";
if(($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAniOficio()!=""){
$sql.="'".$exhortosDto->getAniOficio()."'";
if(($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFecOficio()!=""){
$sql.="'".$exhortosDto->getFecOficio()."'";
if(($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFecTermino()!=""){
$sql.="'".$exhortosDto->getFecTermino()."'";
if(($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getTextoExhorto()!=""){
$sql.="'".$exhortosDto->getTextoExhorto()."'";
if(($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getTelefono()!=""){
$sql.="'".$exhortosDto->getTelefono()."'";
if(($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCorreo()!=""){
$sql.="'".$exhortosDto->getCorreo()."'";
if(($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFacultadoAcordar()!=""){
$sql.="'".$exhortosDto->getFacultadoAcordar()."'";
if(($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getUrldocs()!=""){
$sql.="'".$exhortosDto->getUrldocs()."'";
if(($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getSintesis()!=""){
$sql.="'".$exhortosDto->getSintesis()."'";
if(($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getObservaciones()!=""){
$sql.="'".$exhortosDto->getObservaciones()."'";
if(($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveConsignacion()!=""){
$sql.="'".$exhortosDto->getCveConsignacion()."'";
if(($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveEstatusExhorto()!=""){
$sql.="'".$exhortosDto->getCveEstatusExhorto()."'";
if(($exhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($exhortosDto->getActivo()!=""){
$sql.="'".$exhortosDto->getActivo()."'";
}
if($exhortosDto->getFechaRegistro()!=""){
}
if($exhortosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ExhortosDTO();
$tmp->setidExhorto($this->_proveedor->lastID());
$tmp = $this->selectExhortos($tmp,"",$this->_proveedor);
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
public function updateExhortos($exhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblexhortos SET ";
if($exhortosDto->getIdExhorto()!=""){
$sql.="idExhorto='".$exhortosDto->getIdExhorto()."'";
if(($exhortosDto->getIdExhortoGenerado()!="") ||($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getIdExhortoGenerado()!=""){
$sql.="IdExhortoGenerado='".$exhortosDto->getIdExhortoGenerado()."'";
if(($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumExhorto()!=""){
$sql.="numExhorto='".$exhortosDto->getNumExhorto()."'";
if(($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAniExhorto()!=""){
$sql.="aniExhorto='".$exhortosDto->getAniExhorto()."'";
if(($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$exhortosDto->getCveJuzgado()."'";
if(($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveEstadoProcedencia()!=""){
$sql.="cveEstadoProcedencia='".$exhortosDto->getCveEstadoProcedencia()."'";
if(($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveJuzgadoProcedencia()!=""){
$sql.="cveJuzgadoProcedencia='".$exhortosDto->getCveJuzgadoProcedencia()."'";
if(($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getJuzgadoProcedencia()!=""){
$sql.="juzgadoProcedencia='".$exhortosDto->getJuzgadoProcedencia()."'";
if(($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCarpetaInv()!=""){
$sql.="carpetaInv='".$exhortosDto->getCarpetaInv()."'";
if(($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNuc()!=""){
$sql.="nuc='".$exhortosDto->getNuc()."'";
if(($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumero()!=""){
$sql.="numero='".$exhortosDto->getNumero()."'";
if(($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAnio()!=""){
$sql.="anio='".$exhortosDto->getAnio()."'";
if(($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$exhortosDto->getCveTipoCarpeta()."'";
if(($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getNumOficio()!=""){
$sql.="numOficio='".$exhortosDto->getNumOficio()."'";
if(($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getAniOficio()!=""){
$sql.="aniOficio='".$exhortosDto->getAniOficio()."'";
if(($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFecOficio()!=""){
$sql.="fecOficio='".$exhortosDto->getFecOficio()."'";
if(($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFecTermino()!=""){
$sql.="fecTermino='".$exhortosDto->getFecTermino()."'";
if(($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getTextoExhorto()!=""){
$sql.="textoExhorto='".$exhortosDto->getTextoExhorto()."'";
if(($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getTelefono()!=""){
$sql.="telefono='".$exhortosDto->getTelefono()."'";
if(($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCorreo()!=""){
$sql.="correo='".$exhortosDto->getCorreo()."'";
if(($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFacultadoAcordar()!=""){
$sql.="facultadoAcordar='".$exhortosDto->getFacultadoAcordar()."'";
if(($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getUrldocs()!=""){
$sql.="urldocs='".$exhortosDto->getUrldocs()."'";
if(($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getSintesis()!=""){
$sql.="sintesis='".$exhortosDto->getSintesis()."'";
if(($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getObservaciones()!=""){
$sql.="observaciones='".$exhortosDto->getObservaciones()."'";
if(($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveConsignacion()!=""){
$sql.="cveConsignacion='".$exhortosDto->getCveConsignacion()."'";
if(($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getCveEstatusExhorto()!=""){
$sql.="cveEstatusExhorto='".$exhortosDto->getCveEstatusExhorto()."'";
if(($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getActivo()!=""){
$sql.="activo='".$exhortosDto->getActivo()."'";
if(($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$exhortosDto->getFechaRegistro()."'";
if(($exhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($exhortosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$exhortosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idExhorto='".$exhortosDto->getIdExhorto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ExhortosDTO();
$tmp->setidExhorto($exhortosDto->getIdExhorto());
$tmp = $this->selectExhortos($tmp,"",$this->_proveedor);
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
public function deleteExhortos($exhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblexhortos  WHERE idExhorto='".$exhortosDto->getIdExhorto()."'";
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
public function selectExhortos($exhortosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idExhorto,IdExhortoGenerado,numExhorto,aniExhorto,cveJuzgado,cveEstadoProcedencia,cveJuzgadoProcedencia,juzgadoProcedencia,carpetaInv,nuc,numero,anio,cveTipoCarpeta,numOficio,aniOficio,fecOficio,fecTermino,textoExhorto,telefono,correo,facultadoAcordar,urldocs,sintesis,observaciones,cveConsignacion,cveEstatusExhorto,activo,fechaRegistro,fechaActualizacion FROM tblexhortos ";
if(($exhortosDto->getIdExhorto()!="") ||($exhortosDto->getIdExhortoGenerado()!="") ||($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($exhortosDto->getIdExhorto()!=""){
$sql.="idExhorto='".$exhortosDto->getIdExhorto()."'";
if(($exhortosDto->getIdExhortoGenerado()!="") ||($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getIdExhortoGenerado()!=""){
$sql.="IdExhortoGenerado='".$exhortosDto->getIdExhortoGenerado()."'";
if(($exhortosDto->getNumExhorto()!="") ||($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getNumExhorto()!=""){
$sql.="numExhorto='".$exhortosDto->getNumExhorto()."'";
if(($exhortosDto->getAniExhorto()!="") ||($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getAniExhorto()!=""){
$sql.="aniExhorto='".$exhortosDto->getAniExhorto()."'";
if(($exhortosDto->getCveJuzgado()!="") ||($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$exhortosDto->getCveJuzgado()."'";
if(($exhortosDto->getCveEstadoProcedencia()!="") ||($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCveEstadoProcedencia()!=""){
$sql.="cveEstadoProcedencia='".$exhortosDto->getCveEstadoProcedencia()."'";
if(($exhortosDto->getCveJuzgadoProcedencia()!="") ||($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCveJuzgadoProcedencia()!=""){
$sql.="cveJuzgadoProcedencia='".$exhortosDto->getCveJuzgadoProcedencia()."'";
if(($exhortosDto->getJuzgadoProcedencia()!="") ||($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getJuzgadoProcedencia()!=""){
$sql.="juzgadoProcedencia='".$exhortosDto->getJuzgadoProcedencia()."'";
if(($exhortosDto->getCarpetaInv()!="") ||($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCarpetaInv()!=""){
$sql.="carpetaInv='".$exhortosDto->getCarpetaInv()."'";
if(($exhortosDto->getNuc()!="") ||($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getNuc()!=""){
$sql.="nuc='".$exhortosDto->getNuc()."'";
if(($exhortosDto->getNumero()!="") ||($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getNumero()!=""){
$sql.="numero='".$exhortosDto->getNumero()."'";
if(($exhortosDto->getAnio()!="") ||($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getAnio()!=""){
$sql.="anio='".$exhortosDto->getAnio()."'";
if(($exhortosDto->getCveTipoCarpeta()!="") ||($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$exhortosDto->getCveTipoCarpeta()."'";
if(($exhortosDto->getNumOficio()!="") ||($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getNumOficio()!=""){
$sql.="numOficio='".$exhortosDto->getNumOficio()."'";
if(($exhortosDto->getAniOficio()!="") ||($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getAniOficio()!=""){
$sql.="aniOficio='".$exhortosDto->getAniOficio()."'";
if(($exhortosDto->getFecOficio()!="") ||($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getFecOficio()!=""){
$sql.="fecOficio='".$exhortosDto->getFecOficio()."'";
if(($exhortosDto->getFecTermino()!="") ||($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getFecTermino()!=""){
$sql.="fecTermino='".$exhortosDto->getFecTermino()."'";
if(($exhortosDto->getTextoExhorto()!="") ||($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getTextoExhorto()!=""){
$sql.="textoExhorto='".$exhortosDto->getTextoExhorto()."'";
if(($exhortosDto->getTelefono()!="") ||($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getTelefono()!=""){
$sql.="telefono='".$exhortosDto->getTelefono()."'";
if(($exhortosDto->getCorreo()!="") ||($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCorreo()!=""){
$sql.="correo='".$exhortosDto->getCorreo()."'";
if(($exhortosDto->getFacultadoAcordar()!="") ||($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getFacultadoAcordar()!=""){
$sql.="facultadoAcordar='".$exhortosDto->getFacultadoAcordar()."'";
if(($exhortosDto->getUrldocs()!="") ||($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getUrldocs()!=""){
$sql.="urldocs='".$exhortosDto->getUrldocs()."'";
if(($exhortosDto->getSintesis()!="") ||($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getSintesis()!=""){
$sql.="sintesis='".$exhortosDto->getSintesis()."'";
if(($exhortosDto->getObservaciones()!="") ||($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getObservaciones()!=""){
$sql.="observaciones='".$exhortosDto->getObservaciones()."'";
if(($exhortosDto->getCveConsignacion()!="") ||($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCveConsignacion()!=""){
$sql.="cveConsignacion='".$exhortosDto->getCveConsignacion()."'";
if(($exhortosDto->getCveEstatusExhorto()!="") ||($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getCveEstatusExhorto()!=""){
$sql.="cveEstatusExhorto='".$exhortosDto->getCveEstatusExhorto()."'";
if(($exhortosDto->getActivo()!="") ||($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getActivo()!=""){
$sql.="activo='".$exhortosDto->getActivo()."'";
if(($exhortosDto->getFechaRegistro()!="") ||($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$exhortosDto->getFechaRegistro()."'";
if(($exhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($exhortosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$exhortosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ExhortosDTO();
$tmp[$contador]->setIdExhorto($row["idExhorto"]);
$tmp[$contador]->setIdExhortoGenerado($row["IdExhortoGenerado"]);
$tmp[$contador]->setNumExhorto($row["numExhorto"]);
$tmp[$contador]->setAniExhorto($row["aniExhorto"]);
$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
$tmp[$contador]->setCveEstadoProcedencia($row["cveEstadoProcedencia"]);
$tmp[$contador]->setCveJuzgadoProcedencia($row["cveJuzgadoProcedencia"]);
$tmp[$contador]->setJuzgadoProcedencia($row["juzgadoProcedencia"]);
$tmp[$contador]->setCarpetaInv($row["carpetaInv"]);
$tmp[$contador]->setNuc($row["nuc"]);
$tmp[$contador]->setNumero($row["numero"]);
$tmp[$contador]->setAnio($row["anio"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
$tmp[$contador]->setNumOficio($row["numOficio"]);
$tmp[$contador]->setAniOficio($row["aniOficio"]);
$tmp[$contador]->setFecOficio($row["fecOficio"]);
$tmp[$contador]->setFecTermino($row["fecTermino"]);
$tmp[$contador]->setTextoExhorto($row["textoExhorto"]);
$tmp[$contador]->setTelefono($row["telefono"]);
$tmp[$contador]->setCorreo($row["correo"]);
$tmp[$contador]->setFacultadoAcordar($row["facultadoAcordar"]);
$tmp[$contador]->setUrldocs($row["urldocs"]);
$tmp[$contador]->setSintesis($row["sintesis"]);
$tmp[$contador]->setObservaciones($row["observaciones"]);
$tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
$tmp[$contador]->setCveEstatusExhorto($row["cveEstatusExhorto"]);
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