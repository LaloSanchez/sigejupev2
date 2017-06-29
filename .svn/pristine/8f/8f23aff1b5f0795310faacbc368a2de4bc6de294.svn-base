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
include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actaminima/ActaminimaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActaminimaDAO{
	protected $_proveedor;
	public function __construct($gestor = "mysql", $bd = "gestion") {
		$this->_proveedor = new Proveedor('mysql', 'sigejupe');
	}
	public function _conexion(){
		$this->_proveedor->connect();
	}

	public function selectRelacionAudiencia($DTOs,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$cveTipoCarpeta = $DTOs->getcveTipoCarpeta();
	$cveNumero = $DTOs->getcveNumero();
	$cveAnio = $DTOs->getcveAnio();
	$sql = "SELECT ta.idAudiencia, tca.desCatAudiencia, ta.cveEstatusAudiencia, ta.cveJuzgado "
			."FROM tblaudiencias AS ta "
			."INNER JOIN tblcataudiencias AS tca ON tca.cveCatAudiencia=ta.cveCatAudiencia "
			."INNER JOIN tblactasaudiencias AS taa ON taa.idAudiencia=ta.idAudiencia "
			."WHERE ta.cveTipoCarpeta=" . $cveTipoCarpeta . " AND ta.numero=" . $cveNumero . " AND ta.anio=" . $cveAnio . " AND ta.cveEstatusAudiencia=1 AND ta.activo='S'";
			//echo $sql;
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
			while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
				$tmp[$contador] = new ActaminimaDTO();
				$tmp[$contador]->setcveTipoCarpeta($cveTipoCarpeta);
				$tmp[$contador]->setcveNumero($cveNumero);
				$tmp[$contador]->setcveAnio($cveAnio);
				$tmp[$contador]->setidAudiencia($row["idAudiencia"]);
				$tmp[$contador]->setdesCatAudiencia($row["desCatAudiencia"]);
				$tmp[$contador]->setcveEstatusAudiencia($row["cveEstatusAudiencia"]);
				$tmp[$contador]->setcveJuzgado($row["cveJuzgado"]);
				//$tmp[$contador]->setidReferencia('0');
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

	public function selectAudiencia($DTOs,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$cveTipoCarpeta = $DTOs->getcveTipoCarpeta();
	$cveNumero = $DTOs->getcveNumero();
	$cveAnio = $DTOs->getcveAnio();
	$sql = "SELECT ta.idAudiencia, tca.desCatAudiencia, ta.cveEstatusAudiencia, ta.cveJuzgado, ta.fechaRegistro "
			."FROM tblaudiencias AS ta "
			."INNER JOIN tblcataudiencias AS tca ON tca.cveCatAudiencia=ta.cveCatAudiencia "
			."WHERE ta.cveTipoCarpeta=" . $cveTipoCarpeta . " AND ta.numero=" . $cveNumero . " AND ta.anio=" . $cveAnio . " AND ta.cveEstatusAudiencia=1 AND ta.activo='S' "
			."AND ta.idAudiencia NOT IN ( SELECT idAudiencia FROM tblactasaudiencias WHERE activo='S')";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
			while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
				$tmp[$contador] = new ActaminimaDTO();
				$tmp[$contador]->setcveTipoCarpeta($cveTipoCarpeta);
				$tmp[$contador]->setcveNumero($cveNumero);
				$tmp[$contador]->setcveAnio($cveAnio);
				$tmp[$contador]->setidAudiencia($row["idAudiencia"]);
				$tmp[$contador]->setdesCatAudiencia($row["desCatAudiencia"]);
				$tmp[$contador]->setcveEstatusAudiencia($row["cveEstatusAudiencia"]);
				$tmp[$contador]->setcveJuzgado($row["cveJuzgado"]);
				$tmp[$contador]->setfechaRegistro($row["fechaRegistro"]);
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

	public function selectTiposrelaciones($DTOs,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}

	$sql = "SELECT tcj.cveTipoCarpeta, tcj.numero, tcj.anio, tcj.idCarpetaJudicial "
			."FROM tbltiposcarpetas AS ttc "
			."INNER JOIN tblcarpetasjudiciales AS tcj ON tcj.cveTipoCarpeta=ttc.cveTipoCarpeta AND tcj.numero=" . $DTOs->getcveNumero() . " AND tcj.anio=" . $DTOs->getcveAnio() . " AND tcj.activo='S' "
			."WHERE ttc.cveTipoCarpeta=" . $DTOs->getcveTipoCarpeta() . " AND ttc.activo='S'";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
			while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
				$tmp[$contador] = new ActaminimaDTO();
				$tmp[$contador]->setcveTipoCarpeta($row["cveTipoCarpeta"]);
				$tmp[$contador]->setcveNumero($row["numero"]);
				$tmp[$contador]->setcveAnio($row["anio"]);
				$tmp[$contador]->setidAudiencia('0');
				$tmp[$contador]->setdesCatAudiencia('0');
				$tmp[$contador]->setcveEstatusAudiencia('0');
				$tmp[$contador]->setcveJuzgado('0');
				$tmp[$contador]->setidReferencia($row["idCarpetaJudicial"]);
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
