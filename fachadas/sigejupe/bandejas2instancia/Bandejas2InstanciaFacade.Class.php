<?php

/* # */
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once (dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
    include_once (dirname(__FILE__) . "/../../../webservice/cliente/reportes/ReportesClienteGeneral.php");
    include_once(dirname(__FILE__) . "/../../../webservice/cliente/juzgados/JuzgadoCliente.php");
    include_once(dirname(__FILE__) . "/../../../webservice/cliente/tocas/Tocas.php");
    set_time_limit(240);

    class BandejasFacade {

        public function __construct() {
            ;
        }

        public function select($params, $proveedor = null, $paginacion = null) {
            $SelectDAO = new SelectDAO();
            return $SelectDAO->selectDAO($params, $proveedor, $paginacion);
        }

        function esFecha($fecha) {
            if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
                return true;
            }
            return false;
        }

        function esFechaMysql($fecha) {
            if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
                return true;
            }
            return false;
        }

        function fechaMysql($fecha) {
            list($dia, $mes, $year) = explode("/", $fecha);
            return $year . "-" . $mes . "-" . $dia;
        }

        function fechaNormal($fecha) {
            $arrFecha = explode(" ", $fecha);
            list($dia, $mes, $year) = explode("-", $arrFecha[0]);
            return $dia . "/" . $mes . "/" . $year . " " . $arrFecha[1];
        }

//   function getCarpetasElectronico($cveJuzgado, $fechaInicio, $fechaFinal) {
//      $json = '{"fields":" * ",';
//      $json.='"tables":" htsj_electronico.tblestatuscarpetas tblestatuscarpetas 
//		INNER JOIN htsj_electronico.tblestatusmaterias tblestatusmaterias 
//		ON tblestatuscarpetas.IdEstatusMateria = tblestatusmaterias. 
//		idEstatusMateria 
//			INNER JOIN htsj_electronico.tblcarpetasjudiciales 
//			tblcarpetasjudiciales 
//			ON tblcarpetasjudiciales.idCarpetaJudicial = 
//			tblestatuscarpetas.idCarpetaJudicial 
//				INNER JOIN htsj_electronico.tbltocascarpetasjud 
//				tbltocascarpetasjud 
//				ON tblcarpetasjudiciales.idCarpetaJudicial = 
//				tbltocascarpetasjud.idCarpetaJudicial 
//					INNER JOIN htsj_electronico.tblestatus tblestatus 
//					ON tblestatusmaterias.cveEstatus = tblestatus. 
//					cveEstatus    ",';
//      $json.='"conditions":" (tblcarpetasjudiciales.cveTipoNumero = 10) AND
//	(tblcarpetasjudiciales.cveMateria = 3) AND
//	(tblcarpetasjudiciales.activo = \'S\') AND
//	(tblestatusmaterias.activo = \'S\') AND
//	(tblestatuscarpetas.activo = \'S\') AND
//	(tblcarpetasjudiciales.cveAdscripcion = ' . $cveJuzgado . ') AND
//	(tblcarpetasjudiciales.fechaRegistro>= \'' . $fechaInicio . ' 00:00:00\') AND
//	(tblcarpetasjudiciales.fechaRegistro<= \'' . $fechaFinal . ' 23:59:59\')"';
////      $json.='"groups":"",';
////      $json.='"orders":""';
////      if ($paginacion != null) {
////         $json.=',"paginacion":"' . $paginacion["paginacion"] . '"';
////         $json.=',"pag":"' . $paginacion["pag"] . '"';
////         $json.=',"cantxPag":"' . $paginacion["cantxPag"] . '"';
////      }
//      $json.='}';
//      $reportesClienteGeneral = new ReportesClienteGeneral();
//      $rs = json_decode($reportesClienteGeneral->selectDAO($json, 3));
//      $arrayBandejas = array();
//      $arrayBandejasResultados = array();
//
//      if ($rs->totalCount > 0) {
//         foreach ($rs->resultados as $key => $value) {
//            foreach ($value as $key2 => $value2) {
//               $arrayBandejas[$key][$key2] = $value2;
//               if ($key2 == "cveAdscripcionOrigen")
//                  $arrayBandejas[$key]["juzgado"] = $this->getJuzgado($value2);
//               if ($key2 == "idCarpetaJudicial") {
//                  $arrayBandejas[$key]["litis"] = $this->getLitis($value2);
//                  $arrayBandejas[$key]["partes"] = $this->getPartes($value2);
//               }
//            }
//         }
//         $arrayBandejasResultados["Estatus"] = $rs->Estatus;
//         $arrayBandejasResultados["totalCount"] = $rs->totalCount;
//         $arrayBandejasResultados["mnj"] = $rs->mnj;
//         $arrayBandejasResultados["resultados"] = $arrayBandejas;
//      } else {
//         $arrayBandejasResultados["Estatus"] = "fail";
//         $arrayBandejasResultados["totalCount"] = 0;
//         $arrayBandejasResultados["mnj"] = "NO EXISTE DATOS";
//      }
//      return ($arrayBandejasResultados);
//   }
        function getCarpetasElectronico($cveJuzgado, $fechaInicio, $fechaFinal) {
            $param["cveJuzgado"] = $cveJuzgado;
            $param["fechaInicio"] = $fechaInicio;
            $param["fechaFinal"] = $fechaFinal;
            $tocas = new Tocas();
            $rs = json_decode($tocas->consultarBandejas($param));
//      var_dump($rs);
            $arrayElectronico = array();
            $arrayElectronicoRegresa = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayElectronico[$key][$key2] = $value2;
                        if ($key2 == "idCarpetaJudicial")
                            $arrayElectronico[$key]["estatusRecibido"] = $this->getEstatusRecibido($value2);
                    }
                }
                $arrayElectronicoRegresa["Estatus"] = $rs->Estatus;
                $arrayElectronicoRegresa["totalCount"] = $rs->totalCount;
                $arrayElectronicoRegresa["mnj"] = $rs->mnj;
                $arrayElectronicoRegresa["resultados"] = $arrayElectronico;
            } else {
                $arrayElectronicoRegresa["Estatus"] = "fail";
                $arrayElectronicoRegresa["totalCount"] = 0;
                $arrayElectronicoRegresa["mnj"] = "NO EXISTE DATOS";
            }
            return ($arrayElectronicoRegresa);
        }

        function getLitis($idCarpetaJudicial) {
            $json = '{"fields":" * ",';
            $json .= '"tables":" htsj_electronico.tbllitiscarpetasjud tbllitiscarpetasjud 
		INNER JOIN htsj_electronico.tblmateriaslitis tblmateriaslitis 
		ON tbllitiscarpetasjud.idMateriaLiti = tblmateriaslitis. 
		idMateriaLiti 
			INNER JOIN htsj_electronico.tbllitis tbllitis 
			ON tbllitis.cveLiti = tblmateriaslitis.cveLiti   ",';
            $json .= '"conditions":" (tbllitiscarpetasjud.idCarpetaJudicial = ' . $idCarpetaJudicial . ') "';
//      $json.='"groups":"",';
//      $json.='"orders":""';
//      if ($paginacion != null) {
//         $json.=',"paginacion":"' . $paginacion["paginacion"] . '"';
//         $json.=',"pag":"' . $paginacion["pag"] . '"';
//         $json.=',"cantxPag":"' . $paginacion["cantxPag"] . '"';
//      }
            $json .= '}';
            $reportesClienteGeneral = new ReportesClienteGeneral();
            $rs = json_decode($reportesClienteGeneral->selectDAO($json, 3));
//      var_dump($rs);
            $arrayBandejas = array();
            $arrayBandejasResultados = array();

            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejasResultados[$key][$key2] = $value2;
                    }
                }
            } else {
                $arrayBandejasResultados["Estatus"] = "fail";
                $arrayBandejasResultados["totalCount"] = 0;
                $arrayBandejasResultados["mnj"] = "NO EXISTE DATOS";
            }
            return ($arrayBandejasResultados);
        }

        function getPartes($idCarpetaJudicial) {
            $json = '{"fields":" * ",';
            $json .= '"tables":" htsj_electronico.tblpartescarpetasjud tblpartescarpetasjud 
		INNER JOIN htsj_electronico.tblpartes tblpartes 
		ON tblpartescarpetasjud.idParte = tblpartes.idParte 
			INNER JOIN htsj_electronico.tbltipospartes tbltipospartes 
			ON tblpartescarpetasjud.cveTipoParte = tbltipospartes. 
			cveTipoParte   ",';
            $json .= '"conditions":" (tblpartescarpetasjud.idCarpetaJudicial = ' . $idCarpetaJudicial . ') AND
	(tblpartes.activo = \'S\') "';
//      $json.='"groups":"",';
//      $json.='"orders":""';
//      if ($paginacion != null) {
//         $json.=',"paginacion":"' . $paginacion["paginacion"] . '"';
//         $json.=',"pag":"' . $paginacion["pag"] . '"';
//         $json.=',"cantxPag":"' . $paginacion["cantxPag"] . '"';
//      }
            $json .= '}';
            $reportesClienteGeneral = new ReportesClienteGeneral();
            $rs = json_decode($reportesClienteGeneral->selectDAO($json, 3));
//      var_dump($rs);
            $arrayBandejas = array();
            $arrayBandejasResultados = array();

            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejasResultados[$key][$key2] = $value2;
                    }
                }
            } else {
                $arrayBandejasResultados["Estatus"] = "fail";
                $arrayBandejasResultados["totalCount"] = 0;
                $arrayBandejasResultados["mnj"] = "NO EXISTE DATOS";
            }
            return ($arrayBandejasResultados);
        }

        function getJuzgado($cveJuzgado) {
            $JuzgadoCliente = new JuzgadoCliente();
            $rsJuzgado = json_decode($JuzgadoCliente->getJuzgadosSigejupe($cveJuzgado));
            return $rsJuzgado->data;
//      var_dump($rsJuzgado);
        }

        function getApelantes($idCarpetaJudicial) {
            $params["fields"] = " * ";
            $params["tables"] = " tblapelantescarpetas tblapelantescarpetas 
		INNER JOIN tbltiposapelantes tbltiposapelantes 
		ON tblapelantescarpetas.cveTipoApelante = tbltiposapelantes. 
		cveTipoApelante  ";
            $params["conditions"] = " (tblapelantescarpetas.idCarpetaJudicial = " . $idCarpetaJudicial . ") AND
	(tblapelantescarpetas.activo = 'S') AND
	(tbltiposapelantes.activo = 'S') ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
//      var_dump($rs);
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = ($value2);
                    }
                }
//         var_dump($arrayBandejas);
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getOfendidos($idCarpetaJudicial) {
            $params["fields"] = " * ";
            $params["tables"] = " tblofendidoscarpetas tblofendidoscarpetas 
		INNER JOIN tbltipospartes tbltipospartes 
		ON tblofendidoscarpetas.cveTipoParte = tbltipospartes. 
		cveTipoParte  ";
            $params["conditions"] = " (tblofendidoscarpetas.idCarpetaJudicial = " . $idCarpetaJudicial . ") AND
	(tblofendidoscarpetas.activo = 'S') AND
	(tbltipospartes.activo = 'S') ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = ($value2);
                    }
                }
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getImputados($idCarpetaJudicial) {
            $params["fields"] = " * ";
            $params["tables"] = " tblimputadoscarpetas tblimputadoscarpetas ";
            $params["conditions"] = " (tblimputadoscarpetas.idCarpetaJudicial = " . $idCarpetaJudicial . ") AND (tblimputadoscarpetas.activo = 'S') ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = ($value2);
                    }
                }
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getQuejosos($idAmparo) {
            $params["fields"] = " * ";
            $params["tables"] = " tblquejosos tblquejosos 
		INNER JOIN tbltipospartes tbltipospartes 
		ON tblquejosos.cveTipoPersona = tbltipospartes.cveTipoParte   ";
            $params["conditions"] = " (tblquejosos.idAmparo = " . $idAmparo . ") AND
	(tblquejosos.activo = 'S') ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = ($value2);
                    }
                }
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getTipoSentencia($idCarpetaJudicial) {
            $params["fields"] = " ts.cveTipoSentencia, ts.desTipoSentencia   ";
            $params["tables"] = " tblsentenciastocas st inner join tbltipossentencias ts on (st.cveTipoSentencia = ts.cveTipoSentencia)   ";
            $params["conditions"] = " st.idToca = " . $idCarpetaJudicial . " and st.activo = 'S'   ";
            $rs = json_decode($this->select($params));
//           var_dump($rs);
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = $value2;
                    }
                }
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getCarpetaPadre($idCarpetaJudicial) {
//      var_dump($idCarpetaJudicial);
            $params["fields"] = " tblantecedescarpetas.idCarpetaPadre  ";
            $params["tables"] = " tblantecedescarpetas tblantecedescarpetas 
		INNER JOIN tblcarpetasjudiciales 
		tblcarpetasjudiciales 
		ON tblantecedescarpetas.idCarpetaHija = tblcarpetasjudiciales. 
		idCarpetaJudicial   ";
            $params["conditions"] = " (tblcarpetasjudiciales.idCarpetaJudicial = " . $idCarpetaJudicial . ") ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
//      var_dump($rs);
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                if ($rs->resultados[0]->idCarpetaPadre != "") {
//               var_dump($rs);
                    $params["fields"] = " * ";
                    $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tbljuzgados tbljuzgados ON tblcarpetasjudiciales.cveJuzgado = tbljuzgados.cveJuzgado  ";
                    $params["conditions"] = " (tblcarpetasjudiciales.idCarpetaJudicial = " . $rs->resultados[0]->idCarpetaPadre . ") ";
//      $params["groups"] = "";
//      $params["orders"] = "";
                    $rs2 = json_decode($this->select($params));
                    $arrayBandejasPadre = array();
                    if ($rs2->totalCount > 0) {
                        foreach ($rs2->resultados as $key => $value) {
                            foreach ($value as $key2 => $value2) {
                                $arrayBandejasPadre[$key][$key2] = ($value2);
                            }
                        }
                        return $arrayBandejasPadre;
                    } else {
                        return 0;
                    }
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
//         }
        }

        function buscarElectronicoDuplicado($numero, $anio, $electronico) {
//      var_dump("ELE");
//      var_dump($electronico);
            $arrayelectronico = array();
            $arrayelectronicoRS = array();
//      var_dump($arrayelectronico == null);
            foreach ($electronico["resultados"] as $key => $value) {
                $numeroE = null;
                $anioE = null;
                foreach ($value as $key2 => $value2) {
                    if ($key2 == "numero") {
                        $numeroE = $value2;
                    }
                    if ($key2 == "anio") {
                        $anioE = $value2;
                    }
                }
                if (($numero == $numeroE) && ($anio == $anioE)) {
                    
                } else {
                    $arrayelectronico[$key] = $value;
                }
            }
            if ($arrayelectronico == null) {
                
            } else {
                $arrayelectronicoRS["Estatus"] = "ok";
                $arrayelectronicoRS["totalCount"] = count($arrayelectronico);
                $arrayelectronicoRS["mnj"] = $electronico["mnj"];
                $arrayelectronicoRS["resultados"] = $arrayelectronico;
            }
//      var_dump("FINAL");
//      var_dump($arrayelectronicoRS);
            return $arrayelectronicoRS;
        }

        function unirArreglosSigejupeElectronico($sigejupe, $electronico) {
//      var_dump($electronico);
            $electronicoAUX = $electronico;
            foreach ($sigejupe as $key => $value) {
                $numero = null;
                $anio = null;
                foreach ($value as $key2 => $value2) {
//            var_dump($key2);
//            var_dump($value2);
                    if ($key2 == "numero") {
                        $numero = $value2;
//               var_dump($value2);
                    }
                    if ($key2 == "anio") {
                        $anio = $value2;
//               var_dump($value2);
                    }
                }
                $electronicoAUX = $this->buscarElectronicoDuplicado($numero, $anio, $electronicoAUX);
//         var_dump("#REGRESO");
//         var_dump($electronicoAUX);
            }
            return $electronicoAUX;
//      var_dump("#########");
//      var_dump($electronico);
        }

        function getEstatusRecibido($idCarpetaJudicial) {
//      var_dump("+++++");
//      var_dump($idCarpetaJudicial);
            $params["fields"] = " *  ";
            $params["tables"] = " tblestatustocasbandejas tblestatustocasbandejas    ";
            $params["conditions"] = " (tblestatustocasbandejas.idCarpetaJudicial = " . $idCarpetaJudicial . ") ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));

            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = utf8_decode($value2);
                    }
                }
//         var_dump($arrayBandejas);
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getToca($idCarpetaJudicial) {
//      var_dump($idCarpetaJudicial);
            $params["fields"] = " *  ";
            $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales    ";
            $params["conditions"] = " (tblcarpetasjudiciales.idCarpetaJudicial = " . $idCarpetaJudicial . ") ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = utf8_decode($value2);
                    }
                }
//         var_dump($arrayBandejas);
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

        function getAntecedeFalso($idCarpetaJudicial) {
//      var_dump($idCarpetaJudicial);
            $params["fields"] = " *  ";
            $params["tables"] = " tbltocastradicionales tbltocastradicionales  inner join tbljuzgados tbljuzgados on (tbltocastradicionales.cveJuzgado = tbljuzgados.cveJuzgado  )  ";
            $params["conditions"] = " (tbltocastradicionales.idReferencia = " . $idCarpetaJudicial . ") ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->select($params));
            $arrayBandejas = array();
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = utf8_decode($value2);
                    }
                }
//         var_dump($arrayBandejas);
                return $arrayBandejas;
            } else {
                return 0;
            }
        }

    }

    @$action = $_POST["accion"];
    @$cveTipoActuacion = $_POST["cveTipoActuacion"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    $BandejasFacade = new BandejasFacade();
    if ($cveJuzgado == "") {
        $cveJuzgado = $_SESSION["cveAdscripcion"];
    }

    @$fechaInicio = $_POST["fechaInicial"];
    @$fechaFinal = $_POST["fechaFinal"];
    $params = "";
    switch ($action) {
        case "consultarBandejaAPELACIONESMAGISTRADOS":
            $params["fields"] = " `tblcarpetasjudiciales`.*,
	`tblestatuscarpetas`.`cveEstatusCarpeta`,
	`tblactuaciones`.`sintesis`,
	`tblactuaciones`.`cveTipoActuacion`,
	`tblestatuscarpetas`.`desEstatusCarpeta`  ";
            $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tblestatuscarpetas tblestatuscarpetas 
		ON tblcarpetasjudiciales.cveEstatusCarpeta = tblestatuscarpetas. 
		cveEstatusCarpeta INNER JOIN tbljuzgadorescarpetas tbljuzgadorescarpetas ON tblcarpetasjudiciales.idCarpetaJudicial = tbljuzgadorescarpetas.idCarpetaJudicial INNER JOIN tbljuzgadores tbljuzgadores ON tbljuzgadores.idJuzgador = tbljuzgadorescarpetas.idJuzgador  LEFT JOIN  tblactuaciones ON (tblactuaciones.idReferencia = tblcarpetasjudiciales.idCarpetaJudicial
        AND (tblactuaciones.cveTipoActuacion IN (35 , 32)
        
        AND ((tblactuaciones.activo = 'S')))) ";
            $params["conditions"] = " (tblcarpetasjudiciales.cveTipoCarpeta = 6) AND
	(tblcarpetasjudiciales.activo = 'S') AND
	(tblcarpetasjudiciales.cveJuzgado = " . $cveJuzgado . ") AND
	(tblcarpetasjudiciales.fechaRegistro>='" . $BandejasFacade->fechaMysql($fechaInicio) . " 00:00:00') AND
	(tblcarpetasjudiciales.fechaRegistro<='" . $BandejasFacade->fechaMysql($fechaFinal) . " 23:59:59') AND tbljuzgadores.cveUsuario = " . $_SESSION["cveUsuarioSistema"];
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($BandejasFacade->select($params));
            $arrayBandejas = array();
            $arrayBandejasResultados = array();
            $inAnio = "";
            $inNumero = "";
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = ($value2);
                    }
                    $arrayBandejas[$key]["apelantes"] = $BandejasFacade->getApelantes($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["ofendidos"] = $BandejasFacade->getOfendidos($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["imputados"] = $BandejasFacade->getImputados($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["carpetaPadre"] = $BandejasFacade->getCarpetaPadre($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["sentencia"] = $BandejasFacade->getTipoSentencia($value->idCarpetaJudicial);
//            var_dump("******");
//            var_dump($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["estatusRecibido"] = $BandejasFacade->getEstatusRecibido($value->idCarpetaJudicial);
//            var_dump("________");
//            var_dump($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["antecedeFalso"] = $BandejasFacade->getAntecedeFalso($value->idCarpetaJudicial);
                }
                $arrayBandejasResultados["Estatus"] = $rs->Estatus;
                $arrayBandejasResultados["totalCount"] = $rs->totalCount;
                $arrayBandejasResultados["mnj"] = $rs->mnj;
                $arrayBandejasResultados["resultados"] = $arrayBandejas;
//                $arrayBandejasResultados["resultados2"] = $BandejasFacade->getCarpetasElectronico($cveJuzgado, $BandejasFacade->fechaMysql($fechaInicio), $BandejasFacade->fechaMysql($fechaFinal), substr($inNumero, 0, -1), substr($inAnio, 0, -1));
//         var_dump($arrayBandejasResultados["resultados2"]["totalCount"]);
//         var_dump($rs->totalCount);
//                $arrayBandejasResultados["totalCount"] = (intval($arrayBandejasResultados["resultados2"]["totalCount"]) + intval($rs->totalCount));
//                if (intval($arrayBandejasResultados["resultados2"]["totalCount"]) > 0) {
//                    $arrayBandejasResultados["resultados2"] = $BandejasFacade->unirArreglosSigejupeElectronico($arrayBandejasResultados["resultados"], $arrayBandejasResultados["resultados2"]);
//                    if (array_key_exists("totalCount", $arrayBandejasResultados["resultados2"])) {
//                        $arrayBandejasResultados["totalCount"] = (intval($arrayBandejasResultados["resultados2"]["totalCount"]) + intval($rs->totalCount));
//                    } else {
//                        $arrayBandejasResultados["totalCount"] = (intval($rs->totalCount));
//                    }
//                } else {
//                    
//                }
            } else {
                $arrayBandejasResultados = $rs;
//                $arrayBandejasResultados["resultados2"] = $BandejasFacade->getCarpetasElectronico($cveJuzgado, $BandejasFacade->fechaMysql($fechaInicio), $BandejasFacade->fechaMysql($fechaFinal));
////         var_dump(($arrayBandejasResultados["resultados2"]));
//                if ($arrayBandejasResultados["resultados2"]["totalCount"] > 0) {
//                    $arrayBandejasResultados["Estatus"] = "ok";
//                    $arrayBandejasResultados["totalCount"] = ($arrayBandejasResultados["resultados2"]["totalCount"]);
//                    $arrayBandejasResultados["mnj"] = "Solo Electronico";
//                } else {
//                    $arrayBandejasResultados["Estatus"] = "fail";
//                    $arrayBandejasResultados["totalCount"] = 0;
//                    $arrayBandejasResultados["mnj"] = "NO EXISTE DATOS";
//                }
            }
//      var_dump(($arrayBandejasResultados));
//      var_dump(json_encode($arrayBandejasResultados));
            echo json_encode($arrayBandejasResultados);
            break;
        case "consultarBandejaAPELACIONES":
            $params["fields"] = " `tblcarpetasjudiciales`.*,
	`tblestatuscarpetas`.`cveEstatusCarpeta`,
	`tblactuaciones`.`sintesis`,
	`tblactuaciones`.`cveTipoActuacion`,
	`tblestatuscarpetas`.`desEstatusCarpeta`  ";
            $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tblestatuscarpetas tblestatuscarpetas 
		ON tblcarpetasjudiciales.cveEstatusCarpeta = tblestatuscarpetas. 
		cveEstatusCarpeta LEFT JOIN  tblactuaciones ON (tblactuaciones.idReferencia = tblcarpetasjudiciales.idCarpetaJudicial
        AND (tblactuaciones.cveTipoActuacion IN (35 , 32)
        
        AND ((tblactuaciones.activo = 'S')))) ";
            $params["conditions"] = " (tblcarpetasjudiciales.cveTipoCarpeta = 6) AND
	(tblcarpetasjudiciales.activo = 'S') AND
	(tblcarpetasjudiciales.cveJuzgado = " . $cveJuzgado . ") AND
	(tblcarpetasjudiciales.fechaRegistro>='" . $BandejasFacade->fechaMysql($fechaInicio) . " 00:00:00') AND
	(tblcarpetasjudiciales.fechaRegistro<='" . $BandejasFacade->fechaMysql($fechaFinal) . " 23:59:59') ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($BandejasFacade->select($params));
            $arrayBandejas = array();
            $arrayBandejasResultados = array();
            $inAnio = "";
            $inNumero = "";
            if ($rs->totalCount > 0) {
                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = ($value2);
                    }
                    $arrayBandejas[$key]["apelantes"] = $BandejasFacade->getApelantes($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["ofendidos"] = $BandejasFacade->getOfendidos($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["imputados"] = $BandejasFacade->getImputados($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["carpetaPadre"] = $BandejasFacade->getCarpetaPadre($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["sentencia"] = $BandejasFacade->getTipoSentencia($value->idCarpetaJudicial);
//            var_dump("******");
//            var_dump($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["estatusRecibido"] = $BandejasFacade->getEstatusRecibido($value->idCarpetaJudicial);
//            var_dump("________");
//            var_dump($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["antecedeFalso"] = $BandejasFacade->getAntecedeFalso($value->idCarpetaJudicial);
                }
                $arrayBandejasResultados["Estatus"] = $rs->Estatus;
                $arrayBandejasResultados["totalCount"] = $rs->totalCount;
                $arrayBandejasResultados["mnj"] = $rs->mnj;
                $arrayBandejasResultados["resultados"] = $arrayBandejas;
                $arrayBandejasResultados["resultados2"] = $BandejasFacade->getCarpetasElectronico($cveJuzgado, $BandejasFacade->fechaMysql($fechaInicio), $BandejasFacade->fechaMysql($fechaFinal), substr($inNumero, 0, -1), substr($inAnio, 0, -1));
//         var_dump($arrayBandejasResultados["resultados2"]["totalCount"]);
//         var_dump($rs->totalCount);
                $arrayBandejasResultados["totalCount"] = (intval($arrayBandejasResultados["resultados2"]["totalCount"]) + intval($rs->totalCount));
                if (intval($arrayBandejasResultados["resultados2"]["totalCount"]) > 0) {
                    $arrayBandejasResultados["resultados2"] = $BandejasFacade->unirArreglosSigejupeElectronico($arrayBandejasResultados["resultados"], $arrayBandejasResultados["resultados2"]);
                    if (array_key_exists("totalCount", $arrayBandejasResultados["resultados2"])) {
                        $arrayBandejasResultados["totalCount"] = (intval($arrayBandejasResultados["resultados2"]["totalCount"]) + intval($rs->totalCount));
                    } else {
                        $arrayBandejasResultados["totalCount"] = (intval($rs->totalCount));
                    }
                } else {
                    
                }
            } else {
                $arrayBandejasResultados["resultados2"] = $BandejasFacade->getCarpetasElectronico($cveJuzgado, $BandejasFacade->fechaMysql($fechaInicio), $BandejasFacade->fechaMysql($fechaFinal));
//         var_dump(($arrayBandejasResultados["resultados2"]));
                if ($arrayBandejasResultados["resultados2"]["totalCount"] > 0) {
                    $arrayBandejasResultados["Estatus"] = "ok";
                    $arrayBandejasResultados["totalCount"] = ($arrayBandejasResultados["resultados2"]["totalCount"]);
                    $arrayBandejasResultados["mnj"] = "Solo Electronico";
                } else {
                    $arrayBandejasResultados["Estatus"] = "fail";
                    $arrayBandejasResultados["totalCount"] = 0;
                    $arrayBandejasResultados["mnj"] = "NO EXISTE DATOS";
                }
            }
//      var_dump(($arrayBandejasResultados));
//      var_dump(json_encode($arrayBandejasResultados));
            echo json_encode($arrayBandejasResultados);
            break;
        case "consultarBandejaAMPAROS":
            $params["fields"] = " `tblamparos`.*,
	`tbljuzgados`.`cveJuzgado`,
	`tbljuzgados`.`desJuzgado`,
	`tblestatusamparos`.`cveEstatusAmparo`,
	`tblestatusamparos`.`desEstatus`  ";
            $params["tables"] = " tblamparos tblamparos 
		INNER JOIN tbljuzgados tbljuzgados 
		ON tblamparos.cveJuzgado = tbljuzgados.cveJuzgado 
			LEFT OUTER JOIN tblestatusamparos 
			tblestatusamparos 
			ON tblamparos.cveEstatusAmparo = tblestatusamparos. 
			cveEstatusAmparo ";
            $params["conditions"] = " (tblamparos.activo = 'S') AND
	(tblamparos.cveJuzgado = " . $cveJuzgado . ") AND
	(tblamparos.fechaRegistro>='" . $BandejasFacade->fechaMysql($fechaInicio) . " 00:00:00') AND
	(tblamparos.fechaRegistro<='" . $BandejasFacade->fechaMysql($fechaFinal) . " 23:59:59') ";
//      $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($BandejasFacade->select($params));
            $arrayBandejas = array();
            $arrayBandejasResultados = array();

            if ($rs->totalCount > 0) {

                foreach ($rs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $arrayBandejas[$key][$key2] = $value2;
                    }
                    $arrayBandejas[$key]["estatusRecibido"] = $BandejasFacade->getEstatusRecibido($value->idAmparo);
                    $arrayBandejas[$key]["toca"] = $BandejasFacade->getToca($value->idCarpetaJudicial);
                    $arrayBandejas[$key]["quejosos"] = $BandejasFacade->getQuejosos($value->idAmparo);
                }
                $arrayBandejasResultados["Estatus"] = $rs->Estatus;
                $arrayBandejasResultados["totalCount"] = $rs->totalCount;
                $arrayBandejasResultados["mnj"] = $rs->mnj;
                $arrayBandejasResultados["resultados"] = $arrayBandejas;
//         $arrayBandejasResultados["resultados2"] = $BandejasFacade->getCarpetasElectronico($cveJuzgado, $BandejasFacade->fechaMysql($fechaInicio), $BandejasFacade->fechaMysql($fechaFinal));
            } else {
//         $arrayBandejasResultados["resultados2"] = $BandejasFacade->getCarpetasElectronico($cveJuzgado, $BandejasFacade->fechaMysql($fechaInicio), $BandejasFacade->fechaMysql($fechaFinal));
//         var_dump(($arrayBandejasResultados));
//         if ($arrayBandejasResultados["resultados2"]->totalCount > 0) {
//            $arrayBandejasResultados["Estatus"] = "ok";
//            $arrayBandejasResultados["totalCount"] = ($arrayBandejasResultados["resultados2"]->totalCount);
//            $arrayBandejasResultados["mnj"] = "Solo Electronico";
//         } else {
                $arrayBandejasResultados["Estatus"] = "fail";
                $arrayBandejasResultados["totalCount"] = 0;
                $arrayBandejasResultados["mnj"] = "NO EXISTE DATOS";
//         }
            }
            echo json_encode($arrayBandejasResultados);
            break;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}