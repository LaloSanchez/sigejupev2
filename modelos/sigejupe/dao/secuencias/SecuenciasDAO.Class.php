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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/secuencias/SecuenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SecuenciasDAO{
	protected $_proveedor;
	protected $_proveedor2;
	protected $_proveedor3;
	protected $_proveedor4;
	protected $_proveedor5;
	public function __construct($gestor = "mysql", $bd = "gestion") {
		$this->_proveedor = new Proveedor('mysql', 'sigejupe');
		$this->_proveedor2 = new Proveedor('mysql', 'sigejupe');
		$this->_proveedor3 = new Proveedor('mysql', 'sigejupe');
		$this->_proveedor4 = new Proveedor('mysql', 'sigejupe');
		$this->_proveedor5 = new Proveedor('mysql', 'sigejupe');
	}
	public function _conexion(){
		$this->_proveedor->connect();
		$this->_proveedor2->connect();
		$this->_proveedor3->connect();
		$this->_proveedor4->connect();
		$this->_proveedor5->connect();
	}
	public function insertSecuencias($secuenciasDto,$proveedor=null){
		$tmp = "";
		$contador = 0;
		if ($proveedor == null) {
			$this->_conexion(null);
//$this->_proveedor->connect();
		} else if ($proveedor != null) {
			$this->_proveedor = $proveedor;
		}
		$sql="INSERT INTO tblsecuencias(";
			if($secuenciasDto->getidSecuencia()!=""){
				$sql.="idSecuencia";
				if(($secuenciasDto->getCveRolJuzgador()!="") ||($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getcveRolJuzgador()!=""){
				$sql.="cveRolJuzgador";
				if(($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getcveJuzgado()!=""){
				$sql.="cveJuzgado";
				if(($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getaparicion()!=""){
				$sql.="aparicion";
				if(($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getorden()!=""){
				$sql.="orden";
				if(($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getdescansaFinSemana()!=""){
				$sql.="descansaFinSemana";
				if(($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getactivo()!=""){
				$sql.="activo";
			}
			$sql.=",fechaRegistro";
			$sql.=",fechaActualizacion";
			$sql.=") VALUES(";
			if($secuenciasDto->getidSecuencia()!=""){
				$sql.="'".$secuenciasDto->getidSecuencia()."'";
				if(($secuenciasDto->getCveRolJuzgador()!="") ||($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getcveRolJuzgador()!=""){
				$sql.="'".$secuenciasDto->getcveRolJuzgador()."'";
				if(($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getcveJuzgado()!=""){
				$sql.="'".$secuenciasDto->getcveJuzgado()."'";
				if(($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getaparicion()!=""){
				$sql.="'".$secuenciasDto->getaparicion()."'";
				if(($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getorden()!=""){
				$sql.="'".$secuenciasDto->getorden()."'";
				if(($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getdescansaFinSemana()!=""){
				$sql.="'".$secuenciasDto->getdescansaFinSemana()."'";
				if(($secuenciasDto->getActivo()!="") ){
					$sql.=",";
				}
			}
			if($secuenciasDto->getactivo()!=""){
				$sql.="'".$secuenciasDto->getactivo()."'";
			}
			if($secuenciasDto->getfechaRegistro()!=""){
			}
			if($secuenciasDto->getfechaActualizacion()!=""){
			}
			$sql.=",now()";
			$sql.=",now()";
			$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
	$tmp = new SecuenciasDTO();
	$tmp->setidSecuencia($this->_proveedor->lastID());
	$tmp = $this->selectSecuencias($tmp,"",$this->_proveedor);
	$this->UpdateAparicionOrden($secuenciasDto->getCveJuzgado());
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
public function updateSecuencias($secuenciasDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="UPDATE tblsecuencias SET ";
	if($secuenciasDto->getcveRolJuzgador()!=""){
		$sql.="cveRolJuzgador='".$secuenciasDto->getcveRolJuzgador()."'";
		if(($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getcveJuzgado()!=""){
		$sql.="cveJuzgado='".$secuenciasDto->getcveJuzgado()."'";
		if(($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getaparicion()!=""){
		$sql.="aparicion='".$secuenciasDto->getaparicion()."'";
		if(($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getorden()!=""){
		$sql.="orden='".$secuenciasDto->getorden()."'";
		if(($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getdescansaFinSemana()!=""){
		$sql.="descansaFinSemana='".$secuenciasDto->getdescansaFinSemana()."'";
		if(($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getactivo()!=""){
		$sql.="activo='".$secuenciasDto->getactivo()."'";
		if(($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getfechaRegistro()!=""){
		$sql.="fechaRegistro='".$secuenciasDto->getfechaRegistro()."'";
		if(($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=",";
		}
	}
	if($secuenciasDto->getfechaActualizacion()!=""){
		$sql.="fechaActualizacion='".$secuenciasDto->getfechaActualizacion()."'";
	}
	$sql.=" WHERE idSecuencia='".$secuenciasDto->getidSecuencia()."'";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		$tmp = new SecuenciasDTO();
		$tmp->setidSecuencia($secuenciasDto->getidSecuencia());
		$tmp = $this->selectSecuencias($tmp,"",$this->_proveedor);
		$this->UpdateAparicionOrden($secuenciasDto->getCveJuzgado());
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
public function deleteSecuencias($secuenciasDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="DELETE FROM tblsecuencias  WHERE idSecuencia='".$secuenciasDto->getidSecuencia()."'";
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
public function selectSecuencias($secuenciasDto,$orden="",$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="SELECT idSecuencia,cveRolJuzgador,cveJuzgado,aparicion,orden,descansaFinSemana,activo,fechaRegistro,fechaActualizacion FROM tblsecuencias ";
	if(($secuenciasDto->getidSecuencia()!="") ||($secuenciasDto->getcveRolJuzgador()!="") ||($secuenciasDto->getcveJuzgado()!="") ||($secuenciasDto->getaparicion()!="") ||($secuenciasDto->getorden()!="") ||($secuenciasDto->getdescansaFinSemana()!="") ||($secuenciasDto->getactivo()!="") ||($secuenciasDto->getfechaRegistro()!="") ||($secuenciasDto->getfechaActualizacion()!="") ){
		$sql.=" WHERE ";
	}
	if($secuenciasDto->getidSecuencia()!=""){
		$sql.="idSecuencia='".$secuenciasDto->getIdSecuencia()."'";
		if(($secuenciasDto->getCveRolJuzgador()!="") ||($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getcveRolJuzgador()!=""){
		$sql.="cveRolJuzgador='".$secuenciasDto->getCveRolJuzgador()."'";
		if(($secuenciasDto->getCveJuzgado()!="") ||($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getcveJuzgado()!=""){
		$sql.="cveJuzgado='".$secuenciasDto->getCveJuzgado()."'";
		if(($secuenciasDto->getAparicion()!="") ||($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getaparicion()!=""){
		$sql.="aparicion='".$secuenciasDto->getAparicion()."'";
		if(($secuenciasDto->getOrden()!="") ||($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getorden()!=""){
		$sql.="orden='".$secuenciasDto->getOrden()."'";
		if(($secuenciasDto->getDescansaFinSemana()!="") ||($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getdescansaFinSemana()!=""){
		$sql.="descansaFinSemana='".$secuenciasDto->getDescansaFinSemana()."'";
		if(($secuenciasDto->getActivo()!="") ||($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getactivo()!=""){
		$sql.="activo='".$secuenciasDto->getActivo()."'";
		if(($secuenciasDto->getFechaRegistro()!="") ||($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getfechaRegistro()!=""){
		$sql.="fechaRegistro='".$secuenciasDto->getFechaRegistro()."'";
		if(($secuenciasDto->getFechaActualizacion()!="") ){
			$sql.=" AND ";
		}
	}
	if($secuenciasDto->getfechaActualizacion()!=""){
		$sql.="fechaActualizacion='".$secuenciasDto->getFechaActualizacion()."'";
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
				$tmp[$contador] = new SecuenciasDTO();
				$tmp[$contador]->setIdSecuencia($row["idSecuencia"]);
				$tmp[$contador]->setCveRolJuzgador($row["cveRolJuzgador"]);
				$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
				$tmp[$contador]->setAparicion($row["aparicion"]);
				$tmp[$contador]->setOrden($row["orden"]);
				$tmp[$contador]->setDescansaFinSemana($row["descansaFinSemana"]);
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
public function selectSecuenciasGenerico($secuenciasDto,$orden="",$proveedor=null){
		$tmp = "";
		$contador = 0;
		if ($proveedor == null) {
			$this->_conexion(null);
	//$this->_proveedor->connect();
		} else if ($proveedor != null) {
			$this->_proveedor = $proveedor;
		}
		//////////////////////////////////////////////////////
		/////////////////LOGICA DE PAGINACION/////////////////
		//////////////////////////////////////////////////////
		$tamanoPagina = 20;		
		$sql="SELECT * FROM tblsecuencias WHERE activo = 'S' AND cveJuzgado =".$secuenciasDto->getCveJuzgado();
		$this->_proveedor->execute($sql);
		$totalRegistros = $this->_proveedor->rows($this->_proveedor->stmt);
		$paginaActual = $secuenciasDto->getPagina();
		$pagina = $paginaActual;
		if (!$pagina) {
		   $inicio = 0;
		   $pagina = 1;
		}
		else {
		   $inicio = ($pagina - 1) * $tamanoPagina;
		}
		$totalPaginas = ceil($totalRegistros / $tamanoPagina);
		$consulta = "SELECT * FROM tblsecuencias s INNER JOIN tblrolesjuzgadores r ON s.cveRolJuzgador = r.cveRolJuzgador INNER JOIN tbljuzgados j ON s.cveJuzgado = j.cveJuzgado";
		$consulta .= " WHERE s.activo='S' AND s.cveJuzgado=".$secuenciasDto->getCveJuzgado();
		$consulta .= " ORDER BY orden ASC LIMIT ".$inicio."," . $tamanoPagina;
		$this->_proveedor->execute($consulta);
		if (!$this->_proveedor->error()) {
			if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
				while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
					$tmp[$contador] = new SecuenciasDTO();
					$tmp[$contador]->setIdSecuencia($row["idSecuencia"]);
					$tmp[$contador]->setCveRolJuzgador($row["cveRolJuzgador"]);
					$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
					$tmp[$contador]->setAparicion($row["aparicion"]);
					$tmp[$contador]->setOrden($row["orden"]);
					$tmp[$contador]->setDescansaFinSemana($row["descansaFinSemana"]);
					$tmp[$contador]->setActivo($row["activo"]);
					$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
					$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
					$tmp[$contador]->setDesRol($row["desRolJuzgador"]);
					$tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
					$tmp[$contador]->setTotalPaginas($totalPaginas);
					$tmp[$contador]->setPagina($pagina);
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
	public function UpdateAparicionOrden($iId_Juzgado){
		$sqlRoles = "SELECT DISTINCT(cveRolJuzgador) AS roles FROM tblsecuencias WHERE cveJuzgado = $iId_Juzgado;";
		$this->_proveedor->execute($sqlRoles);
		if (!$this->_proveedor->error()) {
			if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
				while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
					$sqlAparicion = "SELECT idSecuencia,cveRolJuzgador,@rownum:=@rownum+1 AS contador FROM (SELECT @rownum:=0) r, tblsecuencias
					WHERE activo = 'S' AND cveRolJuzgador = ".$row['roles']."  AND cveJuzgado = $iId_Juzgado ORDER BY idSecuencia ASC;";
					$this->_proveedor2->execute($sqlAparicion);
					if ($this->_proveedor2->rows($this->_proveedor2->stmt) > 0) {
						while ($row2 = $this->_proveedor2->fetch_array($this->_proveedor2->stmt, 0)) {
							$sqlUpdate="UPDATE tblsecuencias SET aparicion = ".$row2['contador']." WHERE idSecuencia = ".$row2['idSecuencia'].";";
							$this->_proveedor3->execute($sqlUpdate);
						}
					}
				}
			} else {
				$error = true;
			}
		} else {
			$error = true;
		}
		$sqlOrden = "SELECT idSecuencia,cveRolJuzgador,@rownum:=@rownum+1 AS contador FROM (SELECT @rownum:=0) r, tblsecuencias
					WHERE activo = 'S' AND cveJuzgado = $iId_Juzgado ORDER BY idSecuencia ASC;";
		$this->_proveedor4->execute($sqlOrden);
		if (!$this->_proveedor4->error()) {
			if ($this->_proveedor4->rows($this->_proveedor4->stmt) > 0) {
				while ($row3 = $this->_proveedor4->fetch_array($this->_proveedor4->stmt, 0)) {
					$sqlUpdateOrden="UPDATE tblsecuencias SET orden = ".$row3["contador"]." WHERE idSecuencia = ".$row3["idSecuencia"].";";
					$this->_proveedor5->execute($sqlUpdateOrden);
				}
			} else {
				$error = true;
			}
		} else {
			$error = true;
		}
	}
}
?>