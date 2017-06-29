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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../../controladores/sigejupe/programacionsalas/ProgramacionsalasController.Class.php");
include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
class UltimoroljuzgadorDAO{
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
	public function insertUltimoroljuzgador($ultimoroljuzgadorDto,$proveedor=null){
		$tmp = "";
		$contador = 0;
		if ($proveedor == null) {
			$this->_conexion(null);
//$this->_proveedor->connect();
		} else if ($proveedor != null) {
			$this->_proveedor = $proveedor;
		}
		$sql="INSERT INTO tblultimoroljuzgador(";
			if($ultimoroljuzgadorDto->getidUltimoRolJuzgador()!=""){
				$sql.="idUltimoRolJuzgador";
				if(($ultimoroljuzgadorDto->getIdProgramacion()!="") ||($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getidProgramacion()!=""){
				$sql.="idProgramacion";
				if(($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getcveRolJuzgador()!=""){
				$sql.="cveRolJuzgador";
				if(($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getaparicion()!=""){
				$sql.="aparicion";
				if(($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getidJuzgador()!=""){
				$sql.="idJuzgador";
				if(($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getnumSemana()!=""){
				$sql.="numSemana";
			}
			$sql.=") VALUES(";
			if($ultimoroljuzgadorDto->getidUltimoRolJuzgador()!=""){
				$sql.="'".$ultimoroljuzgadorDto->getidUltimoRolJuzgador()."'";
				if(($ultimoroljuzgadorDto->getIdProgramacion()!="") ||($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getidProgramacion()!=""){
				$sql.="'".$ultimoroljuzgadorDto->getidProgramacion()."'";
				if(($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getcveRolJuzgador()!=""){
				$sql.="'".$ultimoroljuzgadorDto->getcveRolJuzgador()."'";
				if(($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getaparicion()!=""){
				$sql.="'".$ultimoroljuzgadorDto->getaparicion()."'";
				if(($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getidJuzgador()!=""){
				$sql.="'".$ultimoroljuzgadorDto->getidJuzgador()."'";
				if(($ultimoroljuzgadorDto->getNumSemana()!="") ){
					$sql.=",";
				}
			}
			if($ultimoroljuzgadorDto->getnumSemana()!=""){
				$sql.="'".$ultimoroljuzgadorDto->getnumSemana()."'";
			}
			 $sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
	$tmp = new UltimoroljuzgadorDTO();
	$tmp->setidUltimoRolJuzgador($this->_proveedor->lastID());
	$tmp = $this->selectUltimoroljuzgador($tmp,"",$this->_proveedor);
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
public function updateUltimoroljuzgador($ultimoroljuzgadorDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="UPDATE tblultimoroljuzgador SET ";
	if($ultimoroljuzgadorDto->getidUltimoRolJuzgador()!=""){
		$sql.="idUltimoRolJuzgador='".$ultimoroljuzgadorDto->getidUltimoRolJuzgador()."'";
		if(($ultimoroljuzgadorDto->getIdProgramacion()!="") ||($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
			$sql.=",";
		}
	}
	if($ultimoroljuzgadorDto->getidProgramacion()!=""){
		$sql.="idProgramacion='".$ultimoroljuzgadorDto->getidProgramacion()."'";
		if(($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
			$sql.=",";
		}
	}
	if($ultimoroljuzgadorDto->getcveRolJuzgador()!=""){
		$sql.="cveRolJuzgador='".$ultimoroljuzgadorDto->getcveRolJuzgador()."'";
		if(($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
			$sql.=",";
		}
	}
	if($ultimoroljuzgadorDto->getaparicion()!=""){
		$sql.="aparicion='".$ultimoroljuzgadorDto->getaparicion()."'";
		if(($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
			$sql.=",";
		}
	}
	if($ultimoroljuzgadorDto->getidJuzgador()!=""){
		$sql.="idJuzgador='".$ultimoroljuzgadorDto->getidJuzgador()."'";
		if(($ultimoroljuzgadorDto->getNumSemana()!="") ){
			$sql.=",";
		}
	}
	if($ultimoroljuzgadorDto->getnumSemana()!=""){
		$sql.="numSemana='".$ultimoroljuzgadorDto->getnumSemana()."'";
	}
	$sql.=" WHERE idUltimoRolJuzgador='".$ultimoroljuzgadorDto->getidUltimoRolJuzgador()."'";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		$tmp = new UltimoroljuzgadorDTO();
		$tmp->setidUltimoRolJuzgador($ultimoroljuzgadorDto->getidUltimoRolJuzgador());
		$tmp = $this->selectUltimoroljuzgador($tmp,"",$this->_proveedor);
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
public function deleteUltimoroljuzgador($ultimoroljuzgadorDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="DELETE FROM tblultimoroljuzgador  WHERE idUltimoRolJuzgador='".$ultimoroljuzgadorDto->getidUltimoRolJuzgador()."'";
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
public function borraUltimoRol($ultimoroljuzgadorDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="DELETE FROM tblultimoroljuzgador  WHERE idProgramacion='".$ultimoroljuzgadorDto->getIdProgramacion()."' AND numSemana=".$ultimoroljuzgadorDto->getNumSemana();
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
public function guardaUltimoRol($ultimoroljuzgadorDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
//$this->_proveedor->connect();
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	if(isset($ultimoroljuzgadorDto->getIdUltimoRolJuzgador)){
		$sql="DELETE FROM tblultimoroljuzgador  WHERE idUltimoRolJuzgador='".$ultimoroljuzgadorDto->getIdUltimoRolJuzgador()."'";
		$this->_proveedor->execute($sql);
	}
	$select = "SELECT * FROM tblultimoroljuzgador  WHERE idProgramacion='".$ultimoroljuzgadorDto->getIdProgramacion()."' AND numSemana=".$ultimoroljuzgadorDto->getNumSemana()." AND idJuzgador = ".$ultimoroljuzgadorDto->getIdJuzgador();
	$this->_proveedor2->execute($select);
	$countRes = $this->_proveedor2->rows($this->_proveedor2->stmt);
	if($countRes == 0)	{
		$sqlInsert="INSERT INTO tblultimoroljuzgador VALUES (DEFAULT, '".$ultimoroljuzgadorDto->getIdProgramacion()."', '".$ultimoroljuzgadorDto->getCveRolJuzgador()."', '".$ultimoroljuzgadorDto->getAparicion()."', '".$ultimoroljuzgadorDto->getIdJuzgador()."', '".$ultimoroljuzgadorDto->getnumSemana()."');";
		$this->_proveedor3->execute($sqlInsert);
		$tmp = true;
	}else{
		$tmp = false;
	}
	if ($proveedor == null) {
		$this->_proveedor->close();
	}
	unset($contador);
	unset($sql);
	return $tmp;
}
	public function selectUltimoroljuzgador($ultimoroljuzgadorDto,$orden="",$proveedor=null){
		$tmp = array();
		$contador = 0;
		if ($proveedor == null) {
			$this->_conexion(null);
	//$this->_proveedor->connect();
		} else if ($proveedor != null) {
			$this->_proveedor = $proveedor;
		}
		$sql="SELECT idUltimoRolJuzgador,idProgramacion,cveRolJuzgador,aparicion,idJuzgador,numSemana FROM tblultimoroljuzgador ";
		if(($ultimoroljuzgadorDto->getidUltimoRolJuzgador()!="") ||($ultimoroljuzgadorDto->getidProgramacion()!="") ||($ultimoroljuzgadorDto->getcveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getaparicion()!="") ||($ultimoroljuzgadorDto->getidJuzgador()!="") ||($ultimoroljuzgadorDto->getnumSemana()!="") ){
			$sql.=" WHERE ";
		}
		if($ultimoroljuzgadorDto->getidUltimoRolJuzgador()!=""){
			$sql.="idUltimoRolJuzgador='".$ultimoroljuzgadorDto->getIdUltimoRolJuzgador()."'";
			if(($ultimoroljuzgadorDto->getIdProgramacion()!="") ||($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
				$sql.=" AND ";
			}
		}
		if($ultimoroljuzgadorDto->getidProgramacion()!=""){
			$sql.="idProgramacion='".$ultimoroljuzgadorDto->getIdProgramacion()."'";
			if(($ultimoroljuzgadorDto->getCveRolJuzgador()!="") ||($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
				$sql.=" AND ";
			}
		}
		if($ultimoroljuzgadorDto->getcveRolJuzgador()!=""){
			$sql.="cveRolJuzgador='".$ultimoroljuzgadorDto->getCveRolJuzgador()."'";
			if(($ultimoroljuzgadorDto->getAparicion()!="") ||($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
				$sql.=" AND ";
			}
		}
		if($ultimoroljuzgadorDto->getaparicion()!=""){
			$sql.="aparicion='".$ultimoroljuzgadorDto->getAparicion()."'";
			if(($ultimoroljuzgadorDto->getIdJuzgador()!="") ||($ultimoroljuzgadorDto->getNumSemana()!="") ){
				$sql.=" AND ";
			}
		}
		if($ultimoroljuzgadorDto->getidJuzgador()!=""){
			$sql.="idJuzgador='".$ultimoroljuzgadorDto->getIdJuzgador()."'";
			if(($ultimoroljuzgadorDto->getNumSemana()!="") ){
				$sql.=" AND ";
			}
		}
		if($ultimoroljuzgadorDto->getnumSemana()!=""){
			$sql.="numSemana='".$ultimoroljuzgadorDto->getNumSemana()."'";
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
					$tmp[$contador] = new UltimoroljuzgadorDTO();
					$tmp[$contador]->setIdUltimoRolJuzgador($row["idUltimoRolJuzgador"]);
					$tmp[$contador]->setIdProgramacion($row["idProgramacion"]);
					$tmp[$contador]->setCveRolJuzgador($row["cveRolJuzgador"]);
					$tmp[$contador]->setAparicion($row["aparicion"]);
					$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
					$tmp[$contador]->setNumSemana($row["numSemana"]);
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
	public function selectUltimoroljuzgadorSecuencia($ultimoroljuzgadorDto,$orden="",$proveedor=null){
		$tmp = "";
		$contador = 0;
		if ($proveedor == null) {
			$this->_conexion(null);
		} else if ($proveedor != null) {
			$this->_proveedor = $proveedor;
		}
		$resultado = array();
	    $idsProgramaciones = array();
	    $queryProgramaciones = "SELECT * FROM tblprogramaciones 
	    								WHERE cveJuzgado= ".$ultimoroljuzgadorDto->getCveJuzgado()."
	    								AND anio = date_format(now(),'%Y')
										AND cveMes = date_format(now(),'%m')
                                        OR (cveMes = date_format(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%m')
											AND anio = date_format(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%Y') AND cveJuzgado=".$ultimoroljuzgadorDto->getCveJuzgado().");";
		$this->_proveedor->execute($queryProgramaciones);
		if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
			while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
				array_push($idsProgramaciones, $row["idProgramacion"]);
			}
			$maxIdProgramacion = max($idsProgramaciones);

			        $query = "SELECT CONCAT(j.nombre, ' ', j.paterno, ' ', j.materno) AS nombre, rj.desRolJuzgador AS rolDesc, tj.desTipoJuzgador AS tipoDesc 
								FROM tblultimoroljuzgador u 
								INNER JOIN tblrolesjuzgadores rj ON u.cveRolJuzgador = rj.cveRolJuzgador
								INNER JOIN tbljuzgadores j ON u.idJuzgador = j.idJuzgador
								INNER JOIN tbltiposjuzgadores tj ON j.cveTipoJuzgador = tj.cveTipoJuzgador
								WHERE idProgramacion =".$maxIdProgramacion."
								AND numSemana = (SELECT MAX(numSemana) FROM tblultimoroljuzgador WHERE idProgramacion = ".$maxIdProgramacion.")";
			        $query .= " ORDER BY u.idUltimoRolJuzgador";
			        $this->_proveedor2->execute($query);
					if ($this->_proveedor2->rows($this->_proveedor2->stmt) > 0) {
						while ($row2 = $this->_proveedor2->fetch_array($this->_proveedor2->stmt, 0)) {
							$tmp[$contador] = new UltimoroljuzgadorDTO();
							$tmp[$contador]->setNombreJuzgador($row2["nombre"]);
							$tmp[$contador]->setRolDesc($row2["rolDesc"]);
							$tmp[$contador]->setTipoDesc($row2["tipoDesc"]);
							$contador++;
						}
					} 
		}
		if ($proveedor == null) {
			$this->_proveedor->close();
		}
		unset($contador);
		unset($sql);
		return $tmp;
	}
	public function selectSecuenciasRoles($ultimoroljuzgadorDto,$orden="",$proveedor=null){
		$resultado1 = array();
    	$resultado2 = array();
    	$resultado3 = array();
    	$arrayResultados = array();
    	$idsProgramaciones = array();
		$tmp = "";
		$contador = 0;
		if ($proveedor == null) {
			$this->_conexion(null);
		} else if ($proveedor != null) {
			$this->_proveedor = $proveedor;
		}
	    $queryProgramaciones = "SELECT * FROM tblprogramaciones 
	    								WHERE cveJuzgado= ".$ultimoroljuzgadorDto->getCveJuzgado()."
	    								AND anio = date_format(now(),'%Y')
										AND cveMes = date_format(now(),'%m')
                                        OR (cveMes = date_format(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%m')
											AND anio = date_format(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%Y') AND cveJuzgado=".$ultimoroljuzgadorDto->getCveJuzgado().");";
		$this->_proveedor->execute($queryProgramaciones);
		if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
			while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
				array_push($idsProgramaciones, $row["idProgramacion"]);
			}
			$maxIdProgramacion = max($idsProgramaciones);
	        $query = "SELECT u.idUltimoRolJuzgador,u.idProgramacion,u.cveRolJuzgador,u.idJuzgador,u.aparicion,u.numSemana,tj.desTipoJuzgador
						FROM tblultimoroljuzgador u 
						INNER JOIN tblrolesjuzgadores rj ON u.cveRolJuzgador = rj.cveRolJuzgador
						INNER JOIN tbljuzgadores j ON u.idJuzgador = j.idJuzgador
						INNER JOIN tbltiposjuzgadores tj ON j.cveTipoJuzgador = tj.cveTipoJuzgador
						WHERE idProgramacion =".$maxIdProgramacion."
						AND numSemana = (SELECT MAX(numSemana) FROM tblultimoroljuzgador WHERE idProgramacion = ".$maxIdProgramacion.")";
	        $query .= " ORDER BY u.idUltimoRolJuzgador";
	        $this->_proveedor2->execute($query);
	        $countRes1 = $this->_proveedor2->rows($this->_proveedor2->stmt);
			if($countRes1 > 0)	{
				$resultado1["resultado1"] = $this->_proveedor2->fetch_object($this->_proveedor2->stmt, 0);
				
			}
	        $querySecuencias = "SELECT s.idSecuencia, s.cveRolJuzgador,s.aparicion,rj.desRolJuzgador 
									FROM tblsecuencias s
									INNER JOIN tblrolesjuzgadores rj ON s.cveRolJuzgador = rj.cveRolJuzgador
									INNER JOIN tbljuzgados cj ON s.cveJuzgado = cj.cveJuzgado
									WHERE s.cveJuzgado = ".$ultimoroljuzgadorDto->getCveJuzgado()." and s.activo = 'S'
									ORDER BY idSecuencia ASC";
	        $this->_proveedor3->execute($querySecuencias);
	        $countRes2 = $this->_proveedor3->rows($this->_proveedor3->stmt);
			if($countRes2 > 0)	{
				$resultado2["resultado2"] = $this->_proveedor3->fetch_object($this->_proveedor3->stmt, 0);
				if($countRes1 > 0)	{
					foreach ($resultado1["resultado1"] as $key => $value) {
						$numSemana = $value["numSemana"];
						$programacion = $value["idProgramacion"];
					}
					foreach ($resultado1["resultado1"] as $key => $value) {
						$numSemana = $value["numSemana"];
						$programacion = $value["idProgramacion"];
						$juzgador1 = $value["cveRolJuzgador"];
						$aparicion1 = $value["aparicion"];
						$id = $value["idUltimoRolJuzgador"];
						foreach ($resultado2["resultado2"] as $key2 => $value2) {
							$juzgador2 = $value2["cveRolJuzgador"];
							$aparicion2 = $value2["aparicion"];
							$id2 = $value2["idSecuencia"];
							if( ($juzgador1 == $juzgador2) && ($aparicion1 == $aparicion2) ){
								$arrayResultados[] = array("idUltimoRolJuzgador" => $value["idUltimoRolJuzgador"],
															"idProgramacion" => $value["idProgramacion"],
															"cveRolJuzgador" => $value["cveRolJuzgador"],
															"idJuzgador" => $value["idJuzgador"],
															"idSecuencia" => $value2["idSecuencia"],
															"aparicion" => $value["aparicion"],
															"numSemana" => $value["numSemana"],
															"descRol" => $value2["desRolJuzgador"]);
								unset($resultado2["resultado2"][$key2]);
								
							}
						}
					}
					foreach ($resultado2["resultado2"] as $key => $value) {
							$arrayResultados[] = array("idUltimoRolJuzgador" => "",
														"idProgramacion" => $programacion,
														"cveRolJuzgador" => $value["cveRolJuzgador"],
														"idJuzgador" => "",
														"idSecuencia" => $value["idSecuencia"],
														"aparicion" => $value["aparicion"],
														"numSemana" => $numSemana,
														"descRol" => $value["desRolJuzgador"]);
					}
				}else{
			        $queryProgramaciones3 = "SELECT * FROM tblprogramaciones
								WHERE idProgramacion =".$maxIdProgramacion;
					$this->_proveedor4->execute($queryProgramaciones3);
					$countRes3 = $this->_proveedor4->rows($this->_proveedor4->stmt);
					if($countRes3 > 0)	{
						$resProgr= $this->_proveedor4->fetch_object($this->_proveedor4->stmt, 0);
					}
					$f1 = $resProgr[0]["fechaInicial"]." 00:00:00";
					$f2 = $resProgr[0]["fechaFinal"]." 00:00:00";
					$datetime1 = new DateTime($f1);
					$datetime2 = new DateTime($f2);
					$interval = date_diff($datetime1, $datetime2);
					$dias = $interval->days;
					$semana = round($dias/7);
					foreach ($resultado2["resultado2"] as $key => $value) {
							$arrayResultados[] = array("idUltimoRolJuzgador" => "",
														"idProgramacion" => $resProgr[0]["idProgramacion"],
														"cveRolJuzgador" => $value["cveRolJuzgador"],
														"idJuzgador" => "",
														"idSecuencia" => $value["idSecuencia"],
														"aparicion" => $value["aparicion"],
														"numSemana" => $semana,
														"descRol" => $value["desRolJuzgador"]);
					}
				}
			}else{
				if($countRes1 > 0)	{
					foreach ($resultado1["resultado1"] as $key => $value) {
							$arrayResultados[] = array("idUltimoRolJuzgador" => $value["idUltimoRolJuzgador"],
														"idProgramacion" => $value["idProgramacion"],
														"cveRolJuzgador" => $value["cveRolJuzgador"],
														"idJuzgador" => $value["idJuzgador"],
														"idSecuencia" => '',
														"aparicion" => $value["aparicion"],
														"numSemana" => $value["numSemana"],
														"descRol" => '');
					}
				}else{
					$arrayResultados[] = array("idUltimoRolJuzgador" => '',
						"idProgramacion" => '',
						"cveRolJuzgador" => '',
						"idJuzgador" => '',
						"idSecuencia" => '',
						"aparicion" => '',
						"numSemana" => '',
						"descRol" => '');
				}
			}
		}else{
			$arrayResultados = $this->reprogramacion($ultimoroljuzgadorDto->getCveJuzgado());
		}
		$respuesta = json_encode($arrayResultados);
		$respuestaObject = json_decode($respuesta);
		foreach ($respuestaObject as $keyRes => $valueRes) {
			$tmp[$contador] = new UltimoroljuzgadorDTO();
			$tmp[$contador]->setIdUltimoRolJuzgador($valueRes->idUltimoRolJuzgador);
			$tmp[$contador]->setIdProgramacion($valueRes->idProgramacion);
			$tmp[$contador]->setCveRolJuzgador($valueRes->cveRolJuzgador);
			$tmp[$contador]->setIdJuzgador($valueRes->idJuzgador);
			$tmp[$contador]->setIdSecuencia($valueRes->idSecuencia);
			$tmp[$contador]->setAparicion($valueRes->aparicion);
			$tmp[$contador]->setNumSemana($valueRes->numSemana);
			$tmp[$contador]->setRolDesc($valueRes->descRol);
			$contador++;
		}
		unset($contador);
		return $tmp;
	}
	public function reprogramacion($juzgado){
		$dateNow = "SELECT DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH),'%Y-%m-%d') AS fecha";
		$this->_proveedor->execute($dateNow);
		$countRes1 = $this->_proveedor->rows($this->_proveedor->stmt);
		if($countRes1 > 0)	{
			$arregloFecha = $this->_proveedor->fetch_object($this->_proveedor->stmt, 0);
			$fecha = $arregloFecha[0]["fecha"];
			$fechaExplode = explode("-", $fecha);
			$fAnio = $fechaExplode[0];
			$fMes = $fechaExplode[1];
			$fDia = $fechaExplode[2];
			$programacion = new ProgramacionsalasController ();
			$ProgramacionsalasDto = new ProgramacionesDTO();
			$ProgramacionsalasDto->setCveMes($fMes);
			$ProgramacionsalasDto->setAnio($fAnio);
			$ProgramacionsalasDto->setCveJuzgado($juzgado);
			$programacion->obtenerProgramacionsalas($ProgramacionsalasDto);
	    	$queryProgramaciones2 = "SELECT * FROM tblprogramaciones 
	    								WHERE cveJuzgado=$juzgado 
	    								AND anio = $fAnio
										AND cveMes = $fMes;";
			$this->_proveedor2->execute($queryProgramaciones2);
			$countRes2 = $this->_proveedor2->rows($this->_proveedor2->stmt);
			if($countRes2 > 0)	{
				$arregloProgramaciones2 = $this->_proveedor2->fetch_object($this->_proveedor2->stmt, 0);
				$f1 = $arregloProgramaciones2[0]["fechaInicial"]." 00:00:00";
				$f2 = $arregloProgramaciones2[0]["fechaFinal"]." 00:00:00";
				$datetime1 = new DateTime($f1);
				$datetime2 = new DateTime($f2);
				$interval = date_diff($datetime1, $datetime2);
				$dias = $interval->days;
				$semana = round($dias/7);

		        $querySecuencias2 = "SELECT s.idSecuencia, s.cveRolJuzgador,s.aparicion,rj.desRolJuzgador 
										FROM tblsecuencias s
										INNER JOIN tblrolesjuzgadores rj ON s.cveRolJuzgador = rj.cveRolJuzgador
										INNER JOIN tbljuzgados cj ON s.cveJuzgado = cj.cveJuzgado
										WHERE s.cveJuzgado = ".$juzgado." and s.activo = 'S'
										ORDER BY idSecuencia ASC";
				$this->_proveedor3->execute($querySecuencias2);
				$countRes3 = $this->_proveedor3->rows($this->_proveedor3->stmt);
				if($countRes3 > 0)	{
					$resultado1["resultado1"] = $this->_proveedor3->fetch_object($this->_proveedor3->stmt, 0);
					foreach ($resultado1["resultado1"] as $key1 => $value1) {
							$arrayResultados[] = array("idUltimoRolJuzgador" => '',
														"idProgramacion" => $arregloProgramaciones2[0]["idProgramacion"],
														"cveRolJuzgador" => $value1["cveRolJuzgador"],
														"idJuzgador" => '',
														"idSecuencia" => $value1["idSecuencia"],
														"aparicion" => $value1["aparicion"],
														"numSemana" => $semana,
														"descRol" => $value1["desRolJuzgador"]);
						
					}
				}else{
					$arrayResultados[] = array("idUltimoRolJuzgador" => '',
							"idProgramacion" => '',
							"cveRolJuzgador" => '',
							"idJuzgador" => '',
							"idSecuencia" => '',
							"aparicion" => '',
							"numSemana" => '',
							"descRol" => '');
				}
			}
		}
		return $arrayResultados;
	}
}
?>