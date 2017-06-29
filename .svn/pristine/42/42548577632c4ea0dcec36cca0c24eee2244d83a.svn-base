<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/remisionapelaciones/RemisionapelacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/remisionapelaciones/RemisionapelacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");


// include para generacion de toca
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tocastradicionales/TocastradicionalesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tocastradicionales/TocastradicionalesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadoscarpetas/ImputadoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidoscarpetas/OfendidoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/delitoscarpetas/DelitoscarpetasController.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/tocas/ObtenerTocas.php");

//terminan las inclusiones de acuse

class TocastradicionalesController {

   private $proveedor;

   public function __construct() {
      
   }

   public function insertarTocaTradicional($datosTocaTradicional, $proveedor = null) {
      $this->proveedor = new Proveedor('mysql', 'sigejupe');
      $this->proveedor->connect();
      $this->proveedor->execute("BEGIN");
      $this->proveedor->execute("SELECT NOW() AS FechaActual");
      if (!$this->proveedor->error()) {
         if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
            while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
               $fechaActual = $row['FechaActual'];
            }
         } else {
            $fechaActual = date("Y-m-d H:i:s");
         }
      }
      $listaImputados = json_decode($datosTocaTradicional['listaImputados']);
      $listaOfendidos = json_decode($datosTocaTradicional['listaOfendidos']);
      $listaDelitos = json_decode($datosTocaTradicional['listaDelitos']);
      $carpetaInv = $datosTocaTradicional['carpetaInv'];
      $numeroCausa = $datosTocaTradicional['numero'];
      $anioCausa = $datosTocaTradicional['anio'];
      $grave = $datosTocaTradicional['grave'];
      $colegiada = $datosTocaTradicional['colegiada'];
      $cveTipoCarpeta = $datosTocaTradicional['cveTipoCarpeta'];
      $cveConsignacion = $datosTocaTradicional['cveConsignacion'];
      $observaciones = $datosTocaTradicional['observaciones'];
      $numAcumulado = $numeroCausa . "/" . $anioCausa;
      $cveUsuario = $datosTocaTradicional["cveUsuario"];
      $cveRegion = $datosTocaTradicional["cveRegion"];
      $cveJuzgado = $datosTocaTradicional["cveJuzgado"];
      //se genera la toca
      $cveJuzgadoToca = 363; //checar con daniel
      $CarpetasjudicialesDTO = new CarpetasjudicialesDTO();
      $CarpetasjudicialesDTO->setCveEtapaProcesal(6);
      $CarpetasjudicialesDTO->setCveConsignacion($cveConsignacion); //checar consignacion
      $CarpetasjudicialesDTO->setCveTipoCarpeta(6);
      $CarpetasjudicialesDTO->setCveEstatusCarpeta(1);
      $CarpetasjudicialesDTO->setFechaRadicacion($fechaActual);
      $CarpetasjudicialesDTO->setCarpetaInv($carpetaInv);
      $CarpetasjudicialesDTO->setCveUsuario($cveUsuario);
      $CarpetasjudicialesDTO->setNumImputados(1);
      $CarpetasjudicialesDTO->setNumOfendidos(1);
      $CarpetasjudicialesDTO->setNumDelitos(1);
      $CarpetasjudicialesDTO->setNumAcumulado($numAcumulado);
      $CarpetasjudicialesDTO->setCveJuzgado($cveJuzgadoToca); //checar con DANIEL
      $CarpetasjudicialesDTO->setObservaciones($observaciones);
      $CarpetasjudicialesDTO->setActivo("S");
      $CarpetasjudicialesDTO->setNumero(0);
      $CarpetasjudicialesDTO->setAnio(0);
      $CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
      $CarpetasjudicialesDTO = $CarpetasjudicialesDAO->insertCarpetasjudiciales($CarpetasjudicialesDTO, $this->proveedor);
      //se agregan los datos del imputado
      if ($CarpetasjudicialesDTO != "") {
         foreach ($listaImputados as $imputado) {
            $generoimputadosDto = new ImputadoscarpetasDTO();
            $generoimputadosDto->setIdCarpetaJudicial($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
            $generoimputadosDto->setCveEtapaProcesal($CarpetasjudicialesDTO[0]->getCveEtapaProcesal());
            $generoimputadosDto->setCveTipoDetencion(4);
            if ($imputado->detenido == true) {
               $generoimputadosDto->setDetenido("S");
               $fechaControlDet = $this->fechaMySQL($imputado->fechaDetencion);
               $generoimputadosDto->setFechaControlDet($fechaControlDet);
            } else {
               $generoimputadosDto->setDetenido("N");
            }
            $generoimputadosDto->setCveNivelInstruccion(11);
            $generoimputadosDto->setCveEstadoCivil(3);
            $generoimputadosDto->setCveEspanol(4);
            $generoimputadosDto->setCveAlfabetismo(4);
            $generoimputadosDto->setCveDialectoIndigena(3);
            $generoimputadosDto->setCveTipoFamiliaLinguistica(15);
            $generoimputadosDto->setCveOcupacion(15);
            $generoimputadosDto->setCveInterprete(3);
            $generoimputadosDto->setCveEstadoPsicofisico(6);
            $generoimputadosDto->setCveCereso(1);
            $generoimputadosDto->setCveTipoReincidencia(5);
            $generoimputadosDto->setTieneSobreseimiento('N');
            $generoimputadosDto->setActivo('S');
            $generoimputadosDto->setCveTipoPersona($imputado->tipoPersona);
            $generoimputadosDto->setCvePaisNacimiento(119);
            $generoimputadosDto->setCveGrupoEdnico(72);
            $generoimputadosDto->setCveGenero($imputado->genero);

            if ($imputado->tipoPersona > 1) {
               $generoimputadosDto->setNombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->nombreMoral, "utf8") : strtoupper($imputado->nombreMoral))))));
            } else {
               $generoimputadosDto->setNombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->nombre, "utf8") : strtoupper($imputado->nombre))))));
               $generoimputadosDto->setPaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->paterno, "utf8") : strtoupper($imputado->paterno))))));
               $generoimputadosDto->setMaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->materno, "utf8") : strtoupper($imputado->materno))))));
            }
            $generoimputadosDto->setEstadoNacimiento('Actualizame');
            $generoimputadosDto->setcveEstadoNacimiento(15);
            $generoimputadosDto->setMunicipioNacimiento('Actualizame');
            $generoimputadosDto->setPersonaMoral('Actualizame');
            $generoimputadosDto->setRfc('Actualizame');
            $generoimputadosDto->setCurp('Actualizame');
            $generoimputadosDto->setAlias('Actualizame');
            $generoimputadosDto->setCveTipoReligion(8);
            $inputadosDao = new ImputadoscarpetasDAO;
            $generoimputadosres = $inputadosDao->insertImputadoscarpetas($generoimputadosDto, $this->proveedor);
            $generoimputadosDtoTmp = $generoimputadosres;
            if ($generoimputadosDtoTmp == "") {
               $error = true;
               $msg[] = array(utf8_encode('Ocurrrió un error al guardar los datos del imputado para la nueva carpeta'));
            } else {
               $arrayImputados[] = $generoimputadosDtoTmp[0]->getIdImputadoCarpeta();
            }
         }

         //genero ofendidos 
         foreach ($listaOfendidos as $ofendido) {
            $generoOfendidosDto = new OfendidoscarpetasDTO();
            $generoOfendidosDto->setIdCarpetaJudicial($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
            $generoOfendidosDto->setActivo('S');
            if ($ofendido->tipoPersona > 1) {
               $generoOfendidosDto->setNombreMoral(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->nombreMoral, "utf8") : strtoupper($ofendido->nombreMoral))))));
            } else {
               $generoOfendidosDto->setNombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->nombre, "utf8") : strtoupper($ofendido->nombre))))));
               $generoOfendidosDto->setPaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->paterno, "utf8") : strtoupper($ofendido->paterno))))));
               $generoOfendidosDto->setMaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->materno, "utf8") : strtoupper($ofendido->materno))))));
            }
            $generoOfendidosDto->setEstadoNacimiento('Actualizame');
            $generoOfendidosDto->setMunicipioNacimiento('Actualizame');
            $generoOfendidosDto->setRfc('Actualizame');
            $generoOfendidosDto->setCurp('Actualizame');
            $generoOfendidosDto->setCvePaisNacimiento(119);
            $generoOfendidosDto->setCveEstadoNacimiento(15);
            $generoOfendidosDto->setCveEspanol(4);
            $generoOfendidosDto->setCveNivelInstruccion(11);
            $generoOfendidosDto->setCveEstadoCivil(3);
            $generoOfendidosDto->setCveOcupacion(15);
            $generoOfendidosDto->setCveTipoPersona($ofendido->tipoPersona);
            $generoOfendidosDto->setCveDialectoIndigena(3);
            $generoOfendidosDto->setCveTipoFamiliaLinguistica(15);
            $generoOfendidosDto->setCveEstadoPsicofisico(6);
            $generoOfendidosDto->setCveAlfabetismo(4);
            $generoOfendidosDto->setCveInterprete(3);
            $generoOfendidosDto->setCveOrdenProteccion(8);
            $generoOfendidosDto->setCveVictimaDeLaDelincuenciaOrganizada(3);
            $generoOfendidosDto->setCveVictimaDeViolenciaDeGenero(3);
            $generoOfendidosDto->setCveVictimaDeTrata(3);
            $generoOfendidosDto->setCveGrupoEdnico(72);
            $generoOfendidosDto->setCveGenero($ofendido->genero);
            $generoOfendidosDto->setCveVictimaDeAcoso(3);
            $generoOfendidosDto->setCveTipoReligion(8);
            $generoOfendidosDto->setCveTipoParte(2);

            $OfendidosDao = new OfendidoscarpetasDAO();
            $generoOfendidosres = $OfendidosDao->insertOfendidoscarpetas($generoOfendidosDto, $this->proveedor);
            if ($generoOfendidosres == "") {
               $error = true;
               $msg[] = array(utf8_encode('Ocurrió un error al guardar los datos del ofendido para la nueva carpeta'));
            } else {

               $arrayOfendidos[] = $generoOfendidosres[0]->getIdOfendidoCarpeta();
            }
         }

         //genero insert delitos carpeta
         foreach ($listaDelitos as $delito) {
            $delitosCarpetaDto = new DelitoscarpetasDTO();
            $delitosCarpetaDto->setActivo('S');
            $delitosCarpetaDto->setIdCarpetaJudicial($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
            $delitosCarpetaDto->setCveDelito($delito->cveDelito);

            $delitosCarpetaDao = new DelitoscarpetasDAO();
            $delitosCarpetares = $delitosCarpetaDao->insertDelitoscarpetas($delitosCarpetaDto, $this->proveedor);
            if ($delitosCarpetares == "") {
               $error = true;
               $msg[] = array(utf8_encode('Ocurrió un error al guardar el delito para la nueva carpeta'));
            } else {
               $arrayDelito[] = $delitosCarpetares[0]->getIdDelitoCarpeta();
            }
         }
         //genero relacioanes imputados-delitos-ofendidos

         for ($i = 0; $i <= (count($arrayImputados) - 1); $i++) {
            for ($u = 0; $u <= (count($arrayOfendidos) - 1); $u++) {
               for ($w = 0; $w <= (count($arrayDelito) - 1); $w++) {
                  $generoRelacionesimpofedel = new ImpofedelcarpetasDTO();
                  $generoRelacionesimpofedel->setIdCarpetaJudicial($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
                  $generoRelacionesimpofedel->setIdImputadoCarpeta($arrayImputados[$i]);
                  $generoRelacionesimpofedel->setIdOfendidoCarpeta($arrayOfendidos[$u]);
                  $generoRelacionesimpofedel->setIdDelitoCarpeta($arrayDelito[$w]);
                  $generoRelacionesimpofedel->setDireccion('Actualizame');
                  $generoRelacionesimpofedel->setColonia('Actualizame');
                  $generoRelacionesimpofedel->setActivo('S');
                  $generoRelacionesimpofedel->setCveClasificacionDelito(4);
                  $generoRelacionesimpofedel->setCveRelacionImpOfe(10);
                  $generoRelacionesimpofedel->setCveClasificacionDelitoOrden(5);
                  $generoRelacionesimpofedel->setCveConsumacion(4);
                  $generoRelacionesimpofedel->setCveFormaAccion(4);
                  $generoRelacionesimpofedel->setCveModalidad(7);
                  $generoRelacionesimpofedel->setCveComision(4);
                  $generoRelacionesimpofedel->setCveConcurso(4);
                  $generoRelacionesimpofedel->setCveElementoComision(6);
                  $generoRelacionesimpofedel->setCveTerminacion(1);

                  $impofedelDao = new ImpofedelcarpetasDAO();
                  $generoRelacionesimpofedelres = $impofedelDao->insertImpofedelcarpetas($generoRelacionesimpofedel, $this->proveedor);
                  if ($generoRelacionesimpofedelres == "") {
                     $error = true;
                     $msg[] = array(utf8_encode('Ocurrió un error al guardar la relación de imputados ofendidos y delitos para la nueva carpeta'));
                  } else {
                     
                  }
                  $generorelacionesDtoTmp = $generoRelacionesimpofedelres;
               }
            }
         }

         $apelantesCarpetasDto = new ApelantescarpetasDTO();
         $apelantesCarpetasDao = new ApelantescarpetasDAO();
         $apelantesCarpetasDto->setActivo("S");
         $apelantesCarpetasDto->setCveTipoApelante(13);
         $apelantesCarpetasDto->setCveTipoPersona(3);
         $apelantesCarpetasDto->setIdCarpetaJudicial($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
         $apelantesCarpetasDto->setNombreMoral("actualizame");
         $apelantesCarpetasDto->setDomicilio("actualizame");
         $apelantesCarpetasDto = $apelantesCarpetasDao->insertApelantescarpetas($apelantesCarpetasDto, $this->proveedor);
         if ($apelantesCarpetasDto == "") {
            $error = true;
            $msg[] = array(utf8_encode('Ocurrió un error al guardar apelante'));
         } else {
            
         }
         /*
          * Actualizar el numero de imputados ofendidos y delitos de la carpeta radicada
          */
         $carpetaTmp = new CarpetasjudicialesDTO();
         $carpetaTmp->setIdCarpetaJudicial($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
         $carpetaTmp->setNumDelitos(count($arrayDelito));
         $carpetaTmp->setNumImputados(count($arrayImputados));
         $carpetaTmp->setNumOfendidos(count($arrayOfendidos));
         $carpetaDao = new CarpetasjudicialesDAO();
         $carpetaTmp = $carpetaDao->updateCarpetasjudiciales($carpetaTmp, $this->proveedor);
         if ($carpetaTmp == "") {
            $error = true;
            $msg[] = array(utf8_encode('Ocurrió un error al actualizar los datos de imputados, ofendidos y delitos de la carpeta judicial'));
         }
      } else {
         $error = true;
         $msg[] = array(utf8_encode('Ocurrió un error al generar la toca'));
      }
      if (!$error) {
         $idCarpetaJudicialToca = $CarpetasjudicialesDTO[0]->getIdCarpetaJudicial();
//          
//            //se arma json para solicitud de numero de toca a webservice
         $tmp = array();
         $tmp["cveSistema"] = 38;
         $tmp["cveUsuario"] = $cveUsuario;
         $tmp["cveAdscripcionRegistro"] = $_SESSION['cveAdscripcion'];
         $tmp["cveRegion"] = $cveRegion;
         $tmp["apelacion"] = true;
         $tmp["reforma"] = false;
         if ($colegiada == "S") {
            $tmp["colegiada"] = true;
         } else {
            $tmp["colegiada"] = false;
         }
         $tmp["cveMateria"] = "3";
         $tmp["cveInstancia"] = "1";
         $tmp["cveJuzgadoProcedencia"] = $cveJuzgado;
         $tmp["numExpediente"] = $numeroCausa;
         $tmp["aniExpediente"] = $anioCausa;
         $tmp["carpetaInv"] = $carpetaInv;
         $tmp["cveVia"] = "19";
         $tmp["cveTipoRecurso"] = "31";
         $tmp["cveTipoApelacion"] = "6";
         $tmp["numFojas"] = 1;
         $tmp["fechaResolucion"] = "";
         $tmp["sintesis"] = "N/A";
         $tmp["cveTipoApelante"] = "15";
         $tmp["cveTipoNumero"] = "2";
         $tmp["constitucional"] = false;
//            $delitos = array();
//            array_push($delitos, $arrayDelito[0]);
         $delitos = $this->obtenerDelitos($arrayDelito[0]);
         $tmp["cveLitis"] = $delitos;
         $apelantes = array();
         $apelantesArr = array();
         $apelantes["nombre"] = "";
         $apelantes["paterno"] = "";
         $apelantes["materno"] = "";
         $apelantes["cveTipoPersona"] = 2;
         $apelantes["nombreMoral"] = "actualizame";
         array_push($apelantesArr, $apelantes);
         $tmp["apelante"] = $apelantesArr;
         //$actor = $this->obtenerOfendidos($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
         $actor = array();
         $actorArr = array();
         foreach ($listaOfendidos as $ofendido) {
            if ($ofendido->tipoPersona > 1) {
               $actor["nombre"] = "";
               $actor["paterno"] = "";
               $actor["materno"] = "";
               $actor["cveTipoPersona"] = $ofendido->tipoPersona;
               $actor["nombreMoral"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->nombreMoral, "utf8") : utf8_encode(strtoupper($ofendido->nombreMoral))))));
            } else {
               $actor["nombre"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->nombre, "utf8") : utf8_encode(strtoupper($ofendido->nombre))))));
               $actor["paterno"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->paterno, "utf8") : utf8_encode(strtoupper($ofendido->paterno))))));
               $actor["materno"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ofendido->materno, "utf8") : utf8_encode(strtoupper($ofendido->materno))))));
               $actor["cveTipoPersona"] = $ofendido->tipoPersona;
               $actor["nombreMoral"] = "";
            }
            array_push($actorArr, $actor);
         }

         $actorJson = $actorArr;
         $tmp["actor"] = $actorJson;
         //$demandado = $this->obtenerImputados($CarpetasjudicialesDTO[0]->getIdCarpetaJudicial());
         $demandado = array();
         $demandadoArr = array();
         foreach ($listaImputados as $imputado) {
            if ($imputado->tipoPersona > 1) {
               $demandado["nombre"] = "";
               $demandado["paterno"] = "";
               $demandado["materno"] = "";
               $demandado["cveTipoPersona"] = $imputado->tipoPersona;
               $demandado["nombreMoral"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->nombreMoral, "utf8") : utf8_encode(strtoupper($imputado->nombreMoral))))));
            } else {
               $demandado["nombre"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->nombre, "utf8") : utf8_encode(strtoupper($imputado->nombre))))));
               $demandado["paterno"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->paterno, "utf8") : utf8_encode(strtoupper($imputado->paterno))))));
               $demandado["materno"] = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($imputado->materno, "utf8") : utf8_encode(strtoupper($imputado->materno))))));
               $demandado["cveTipoPersona"] = $imputado->tipoPersona;
               $demandado["nombreMoral"] = "";
            }
            array_push($demandadoArr, $demandado);
         }

         $demandadoJson = $demandadoArr;
         $tmp["demandado"] = $demandadoJson;

         $jsonTmp = json_encode($tmp);

//            //aqui se hace la peticion de webservice y se actualizan los datos 
         $obtenerTocas = new ObtenerTocas();
         $respToca = json_decode($obtenerTocas->obtenerToca($jsonTmp));
         if ($respToca->numToca != 0) {
            $numeroToca = $respToca->numToca;
            $anioToca = $respToca->aniToca;
            $cveJuzgadoToca = $respToca->cveAdscripcion;
            $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDao = new CarpetasjudicialesDAO();

            if ($idCarpetaJudicialToca != "") {
               //insertar relacion toca tradicional
               $tocasTradicionalesDto = new TocastradicionalesDTO();
               $tocasTradicionalesDao = new TocastradicionalesDAO();
               $tocasTradicionalesDto->setActivo("S");
               $tocasTradicionalesDto->setNumero($numeroCausa);
               $tocasTradicionalesDto->setAnio($anioCausa);
               $tocasTradicionalesDto->setCveJuzgado($cveJuzgado);
               $tocasTradicionalesDto->setCveTIpoCarpeta($cveTipoCarpeta);
               $tocasTradicionalesDto->setGrave($grave);
               $tocasTradicionalesDto->setIdReferencia($idCarpetaJudicialToca);
               $tocasTradicionalesDto->setRevisionExtraordonaria("N");
               $tocasTradicionalesDto = $tocasTradicionalesDao->insertTocastradicionales($tocasTradicionalesDto, $this->proveedor);
               if ($tocasTradicionalesDto != "") {
                  $CarpetasjudicialesDto->setIdCarpetaJudicial($idCarpetaJudicialToca);
                  $CarpetasjudicialesDto->setNumero($numeroToca);
                  $CarpetasjudicialesDto->setAnio($anioToca);
                  $CarpetasjudicialesDto->setCveJuzgado($cveJuzgadoToca);
                  $CarpetasjudicialesDto = $CarpetasjudicialesDao->updateCarpetasjudiciales($CarpetasjudicialesDto, $this->proveedor);
                  if ($CarpetasjudicialesDto != "") {
                     $errorn = true;
                  } else {
                     $errorn = false;
                  }
               } else {
                  $errorn = false;
               }
               if (!$errorn) {

                  $msg[] = array(" Error al actualizar la toca ");
                  $CarpetasjudicialesDTO2 = "";
                  $error2 = true;
               } else {
                  $error2 = false;
                  //si llega a aqui todo salio bien
               }
            }
//                                        
         } else {
            $error2 = true;
            $msg[] = array(" Error al generar toca en oficialia ");
         }

         //$errorn = true;
      } else {
         $msg[] = array(" Error al generar toca en oficialia  -  "/* .$respToca->text */);
         $CarpetasjudicialesDTO2 = "";
         $error2 = true;
      }
//        $error2 = true;
      if (!$error2) {
         $this->proveedor->execute('COMMIT');
         $msg = array("Registro Actualizado Correctamente");
         $resultado = array(
             "numero" => $numeroToca,
             "anio" => $anioToca,
             "cveJuzgado" => $cveJuzgadoToca,
             "idCarpetaJudicial" => $idCarpetaJudicialToca
         );

         $result = array(
             "status" => "Ok",
             "totalCount" => 1,
             "msj" => $msg,
             "resultados" => $resultado,
         );
         return json_encode($result);
      } else {
         $this->proveedor->execute('ROLLBACK');
         $result = array(
             "status" => "Error",
             "msj" => $msg
         );
         return json_encode($result);
      }
   }

   public function fechaMySQLaNormal($fecha) {
      if ($fecha != "") {
         $fecha = explode(" ", $fecha);
         $fechavec = explode("-", $fecha[0]);
         $fechaNormal = $fechavec[2] . "/" . $fechavec[1] . "/" . $fechavec[0];
         $fechaHora = explode(":", $fecha[1]);
         $fechaHora = $fechaHora[0] . ":" . $fechaHora[1];
      } else {
         $fechaNormal = "";
         $fechaHora = "";
      }
      return $fechaNormal . " " . $fechaHora;
   }

   public function fechaMySQL($fecha) {
      if ($fecha != "") {
         $fecha = explode(" ", $fecha);
         $fechavec = explode("/", $fecha[0]);
         $fechaHora = $fecha[1] . ":00";
         $fechaNormal = $fechavec[2] . "-" . $fechavec[1] . "-" . $fechavec[0] . " " . $fechaHora;
      } else {
         $fechaNormal = "";
      }
      return $fechaNormal;
   }

   public function obtenerDelitos($cveDelito) {

      $selectDAO = new SelectDAO();
      $params["fields"] = " dc.idDelitoCarpeta,de.idMateriaLiti  ";
      $params["tables"] = " tbldelitoscarpetas dc  INNER JOIN delitoselectronico de ON dc.cveDelito = de.cveDelito  ";
      $params["conditions"] = " dc.cveDelito=" . $cveDelito;

      $rs = json_decode($selectDAO->selectDAO($params));

      $delitos = array();
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {
            if ($key == 0) {
               array_push($delitos, $value->idMateriaLiti);
            }
         }
      } else {
         array_push($delitos, 1);
      }
      return $delitos;
   }

   public function consultarTocaTradicional($datosTocaTradicional, $paginacion) {
      $sqlIntervalo = "";
      $condicion = "";
      $valiadacondicion = true;
      if ($datosTocaTradicional['cveJuzgado'] != "0") {
         $condicion .= " and tt.cveJuzgado=" . $datosTocaTradicional['cveJuzgado'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['cveTipoCarpeta'] != "") {
         $condicion .= " and cj.cveTipoCarpeta=" . $datosTocaTradicional['cveTipoCarpeta'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['numero'] != "") {
         $condicion .= " and cj.numero=" . $datosTocaTradicional['numero'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['anio'] != "") {
         $condicion .= " and cj.anio=" . $datosTocaTradicional['anio'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['fechaInicial'] != "" && $datosTocaTradicional['fechaFinal'] != "") {
         $fechaInicio = explode("/", $datosTocaTradicional["fechaInicial"]);
         $sqlIntervalo = " AND cj.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
         if ($datosTocaTradicional["fechaFinal"] != "") {
            $fechaFinal = explode("/", $datosTocaTradicional["fechaFinal"]);
            $sqlIntervalo.=" AND  cj.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
         }
      }
      $selectDAO = new SelectDAO();
      $params["fields"] = " tt.numero numeroC, tt.anio anioC,cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, tt.cvejuzgado cvejuzgadoC,tt.idReferencia idReferencia" .
              ", tt.cveTipoCarpeta cveTipoCarpeta , cj.carpetaInv carpetaInv, tt.grave grave, cj.observaciones observaciones,tt.idTocaTradicionales idTocaTradicionales, cj.fechaRegistro fechaRegistro";
      $params["tables"] = " tbltocastradicionales tt inner join tblcarpetasjudiciales cj on (tt.idReferencia = cj.idCarpetaJudicial) ";
      if ($valiadacondicion) {
         // vine condicion
         $params["conditions"] = " tt.activo='S' and cj.activo='S' and tt.revisionExtraordonaria='N' " . $condicion;
      } else {
         //no viene condicion
         $params["conditions"] = " tt.activo='S' and cj.activo='S' and tt.revisionExtraordonaria='N' " . $condicion . $sqlIntervalo;
         
      }
      $params["orders"] = " tt.idTocaTradicionales desc";
      $rs = json_decode($selectDAO->selectDAO($params));
      $resultado = array();
      $resultado2 = array();
      $resultado2["Estatus"] = $rs->Estatus;
      $resultado2["totalCount"] = $rs->totalCount;
      $resultado2["mnj"] = $rs->mnj;
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {

            foreach ($value as $key2 => $value2) {
               $resultado[$key][$key2] = $value2;
               if ($key2 == "idReferencia") {
                  $idReferencia = $value2;
//                    $ofendido .='"nombre":"' . $value2 . '",';
               }
            }

            $resultado[$key]["imputados"] = $this->obtenerimputados($idReferencia);
            $resultado[$key]["ofendidos"] = $this->obtenerofendidos($idReferencia);
            $resultado[$key]["delitos"] = $this->obtenerdelitosCarpeta($idReferencia);
         }
      }
      $resultado2["resultados"] = $resultado;
      return json_encode($resultado2);
   }

   public function consultarTocaTradicionalReasignacion($datosTocaTradicional, $paginacion) {
      $sqlIntervalo = "";
      $condicion = "";
      $valiadacondicion = true;
      if ($datosTocaTradicional['cveJuzgado'] != "0") {
         $condicion .= " and cj.cveJuzgado=" . $datosTocaTradicional['cveJuzgado'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['cveTipoCarpeta'] != "") {
         $condicion .= " and cj.cveTipoCarpeta=" . $datosTocaTradicional['cveTipoCarpeta'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['numero'] != "") {
         $condicion .= " and cj.numero=" . $datosTocaTradicional['numero'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['anio'] != "") {
         $condicion .= " and cj.anio=" . $datosTocaTradicional['anio'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['fechaInicial'] != "" && $datosTocaTradicional['fechaFinal'] != "") {
         $fechaInicio = explode("/", $datosTocaTradicional["fechaInicial"]);
         $sqlIntervalo = " AND cj.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
         if ($datosTocaTradicional["fechaFinal"] != "") {
            $fechaFinal = explode("/", $datosTocaTradicional["fechaFinal"]);
            $sqlIntervalo.=" AND  cj.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
         }
      }
      $selectDAO = new SelectDAO();
      $params["fields"] = " rt.idReasignacionToca, rt.idReferenciaOrigen, rt.idReferenciaDestino, tt.numero numeroC, tt.anio anioC,cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, tt.cvejuzgado cvejuzgadoC,tt.idReferencia idReferencia" .
              ", tt.cveTipoCarpeta cveTipoCarpeta , cj.carpetaInv carpetaInv, tt.grave grave, cj.observaciones observaciones,tt.idTocaTradicionales idTocaTradicionales, cj.fechaRegistro fechaRegistro";
      $params["tables"] = " tbltocastradicionales tt inner join tblcarpetasjudiciales cj on (tt.idReferencia = cj.idCarpetaJudicial) ";
      $params["tables"] .= " left join tblreasignaciontocas rt on ( cj.idCarpetaJudicial = rt.idReferenciaOrigen )  ";
      if ($valiadacondicion) {
         // vine condicion
         $params["conditions"] = "  tt.activo='S' and cj.activo='S' and tt.revisionExtraordonaria='N' " . $condicion;
      } else {
         //no viene condicion
         $params["conditions"] = "  tt.activo='S' and cj.activo='S' and tt.revisionExtraordonaria='N' " . $condicion . $sqlIntervalo;
      }
      $params["orders"] = " tt.idTocaTradicionales desc";
      
      $rs = json_decode($selectDAO->selectDAO($params));
      $resultado = array();
      $resultado2 = array();
      $resultado2["Estatus"] = $rs->Estatus;
      $resultado2["totalCount"] = $rs->totalCount;
      $resultado2["mnj"] = $rs->mnj;
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {

            foreach ($value as $key2 => $value2) {
               $resultado[$key][$key2] = $value2;
               if ($key2 == "idReferencia") {
                  $idReferencia = $value2;
               }
               if ($key2 == "idReferenciaDestino" && $value2 != null) {
                  $resultado[$key]["destino"] = $this->obtenerProviene($value2);
               }
               if ($key2 == "idReferencia" && $value2 != null) {
                  $resultado[$key]["origen"] = $this->obtenerProviene($value2);
               }
            }

            $resultado[$key]["imputados"] = $this->obtenerimputados($idReferencia);
            $resultado[$key]["ofendidos"] = $this->obtenerofendidos($idReferencia);
            $resultado[$key]["delitos"] = $this->obtenerdelitosCarpeta($idReferencia);
         }
      }
      $resultado2["resultados"] = $resultado;
      return json_encode($resultado2);
   }
   
   public function consultarTocaTradicionalReasignacionTribunal($datosTocaTradicional, $paginacion) {
      $sqlIntervalo = "";
      $condicion = "";
      $valiadacondicion = true;
      if ($datosTocaTradicional['cveJuzgado'] != "0") {
         $condicion .= "  cj.cveJuzgado=" . $datosTocaTradicional['cveJuzgado'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['cveTipoCarpeta'] != "") {
         $condicion .= " and cj.cveTipoCarpeta=" . $datosTocaTradicional['cveTipoCarpeta'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['numero'] != "") {
         $condicion .= " and cj.numero=" . $datosTocaTradicional['numero'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['anio'] != "") {
         $condicion .= " and cj.anio=" . $datosTocaTradicional['anio'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['fechaInicial'] != "" && $datosTocaTradicional['fechaFinal'] != "") {
         $fechaInicio = explode("/", $datosTocaTradicional["fechaInicial"]);
         $sqlIntervalo = " AND cj.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
         if ($datosTocaTradicional["fechaFinal"] != "") {
            $fechaFinal = explode("/", $datosTocaTradicional["fechaFinal"]);
            $sqlIntervalo.=" AND  cj.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
         }
      }
      $selectDAO = new SelectDAO();
      $params["fields"] = " rt.idReasignacionToca, rt.idReferenciaOrigen, rt.idReferenciaDestino,cj.idCarpetaJudicial idCarpetaJudicial, cj.cveTipoCarpeta cveTipoCarpeta, cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, cj.carpetaInv carpetaInv, cj.observaciones observaciones, cj.fechaRegistro fechaRegistro";
      $params["tables"] = " tblcarpetasjudiciales cj left join tblreasignaciontocas rt on (rt.idReferenciaOrigen = cj.idCarpetaJudicial) ";
      if ($valiadacondicion) {
         // vine condicion
         $params["conditions"] = "cj.activo='S' and ". $condicion;
      } else {
         //no viene condicion
         $params["conditions"] = "cj.activo='S' and ". $condicion . $sqlIntervalo;
      }
      $params["orders"] = " cj.idCarpetaJudicial desc";
      
      $rs = json_decode($selectDAO->selectDAO($params, null, $paginacion));
      $resultado = array();
      $resultado2 = array();
      $resultado2["Estatus"] = $rs->Estatus;
      $resultado2["totalCount"] = $rs->totalCount;
      $resultado2["mnj"] = $rs->mnj;
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {

            foreach ($value as $key2 => $value2) {
               $resultado[$key][$key2] = $value2;
               if ($key2 == "idCarpetaJudicial") {
                  $idReferencia = $value2;
               }
               if ($key2 == "idReferenciaDestino" && $value2 != null) {
                  $resultado[$key]["destino"] = $this->obtenerProviene($value2);
               }
               if ($key2 == "idCarpetaJudicial" && $value2 != null) {
                  $resultado[$key]["origen"] = $this->obtenerProviene($value2);
                  $resultado[$key]["antecede"] = $this->obtenerAntecede($value2);
               }
            }

            $resultado[$key]["imputados"] = $this->obtenerimputados($idReferencia);
            $resultado[$key]["ofendidos"] = $this->obtenerofendidos($idReferencia);
            $resultado[$key]["delitos"] = $this->obtenerdelitosCarpeta($idReferencia);
         }
      }
      $resultado2["resultados"] = $resultado;
      
      return json_encode($resultado2);
   }

   public function obtenerProviene($idDestino) {
      $selectDAO = new SelectDAO();
      $params["fields"] = " tblcarpetasjudiciales.idCarpetaJudicial,
	tblcarpetasjudiciales.numero,
	tblcarpetasjudiciales.anio,
	tbljuzgados.cveJuzgado,
	tbljuzgados.desJuzgado  ";
      $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales 
		INNER JOIN tbljuzgados tbljuzgados 
		ON tblcarpetasjudiciales.cveJuzgado = tbljuzgados.cveJuzgado  ";

      $params["conditions"] = " (tblcarpetasjudiciales.idCarpetaJudicial = " . $idDestino . ") ";

      $resultado = array();
      $resultado2 = array();
      $rs = json_decode($selectDAO->selectDAO($params));
      if($rs->totalCount > 0){
         foreach ($rs->resultados as $key => $value) {
            foreach ($value as $key2 => $value2) {
               $resultado[$key][$key2] = $value2;
            }
         }
         return $resultado;
      }else{
         return 0;
      }
   }
   public function obtenerAntecede($idCarpetaJudicial) {
        $selectDAO = new SelectDAO();
        $params2["fields"] = " idCarpetaPadre ";
        $params2["tables"] = " tblantecedescarpetas ac ";
        $params2["conditions"] = " (ac.idCarpetaHija = " . $idCarpetaJudicial . ") ";
        $rs = json_decode($selectDAO->selectDAO($params2));
        if ($rs->totalCount != 0) {
            $params["fields"] = " cj.numero, cj.anio, cj.cveTipoCarpeta, cj.cvejuzgado ";
            $params["tables"] = " tblcarpetasjudiciales cj ";
            $params["conditions"] = " (cj.idCarpetaJudicial = " . $rs->resultados[0]->idCarpetaPadre . ") ";
            $carpetaJudicial = json_decode($selectDAO->selectDAO($params));
            if ($carpetaJudicial->totalCount != 0) {
//                var_dump($carpetaJudicial->resultados);
                $resultado = $carpetaJudicial->resultados;
            } else {
                $resultado = "";
            }
        } else {
            $paramsTt["fields"] = "  tt.numero, tt.anio, tt.cveTipoCarpeta, tt.cvejuzgado ";
            $paramsTt["tables"] = " tbltocastradicionales tt ";
            $paramsTt["conditions"] = " (tt.idReferencia = " . $idCarpetaJudicial . ") ";
            $tocasTradicionales = json_decode($selectDAO->selectDAO($paramsTt));
            if ($tocasTradicionales->totalCount != 0) {
                $resultado = $tocasTradicionales->resultados;
            } else {
                $resultado = "";
            }
        }
        
        return $resultado;
    }

    public function getPaginasTocasTradicionales($datosTocaTradicional, $paginacion) {
      $sqlIntervalo = "";
      $condicion = "";
      $valiadacondicion = true;
      if($datosTocaTradicional["tribunal"] == "true"){
        if ($datosTocaTradicional['cveJuzgado'] != "0") {
           $condicion .= " and cj.cveJuzgado=" . $datosTocaTradicional['cveJuzgado'];
        } else {
           $valiadacondicion = false;
        }
      }else{
            if ($datosTocaTradicional['cveJuzgado'] != "0") {
                $condicion .= " and tt.cveJuzgado=" . $datosTocaTradicional['cveJuzgado'];
            } else {
                $valiadacondicion = false;
            }
      }
      if ($datosTocaTradicional['cveTipoCarpeta'] != "") {
         $condicion .= " and cj.cveTipoCarpeta=" . $datosTocaTradicional['cveTipoCarpeta'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['numero'] != "") {
         $condicion .= " and cj.numero=" . $datosTocaTradicional['numero'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['anio'] != "") {
         $condicion .= " and cj.anio=" . $datosTocaTradicional['anio'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['fechaInicial'] != "" && $datosTocaTradicional['fechaFinal'] != "") {
         $fechaInicio = explode("/", $datosTocaTradicional["fechaInicial"]);
         $sqlIntervalo = " AND cj.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
         if ($datosTocaTradicional["fechaFinal"] != "") {
            $fechaFinal = explode("/", $datosTocaTradicional["fechaFinal"]);
            $sqlIntervalo.=" AND  cj.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
         }
      }
      $selectDAO = new SelectDAO();
      $params["fields"] = " tt.numero numeroC, tt.anio anioC,cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, tt.cvejuzgado cvejuzgadoC,tt.idReferencia idReferencia" .
              ", tt.cveTIpoCarpeta cveTIpoCarpeta , cj.carpetaInv carpetaInv, tt.grave grave, cj.observaciones observaciones,tt.idTocaTradicionales idTocaTradicionales, cj.fechaRegistro fechaRegistro";
      $params["tables"] = " tbltocastradicionales tt inner join tblcarpetasjudiciales cj on (tt.idReferencia = cj.idCarpetaJudicial) ";
      if ($valiadacondicion) {
         // vine condicion
         $params["conditions"] = " tt.revisionExtraordonaria='N' " . $condicion;
      } else {
         //no viene condicion
         $params["conditions"] = " tt.revisionExtraordonaria='N' " . $condicion . $sqlIntervalo;
      }

      $rs = json_decode($selectDAO->selectDAO($params));

      $Pages = (int) $rs->totalCount / $paginacion["cantxPag"];
      $restoPages = $rs->totalCount % $paginacion["cantxPag"];

      $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

      $json = "";
      $json .= '{"type":"OK",';
      $json .= '"totalCount":"' . $rs->totalCount . '",';

      $json .= '"data":[';
      $x = 1;

      if ($totPages > 0) {
         for ($index = 1; $index <= $totPages; $index++) {

            $json .= "{";
            $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
            $json .= "}";
            $x++;
            if ($x <= ($totPages )) {
               $json .= ",";
            }
         }
         $json .= "],";
         $json .= '"pagina":{"total":""},';
         $json .= '"total":"' . ($index - 1) . '"';
         $json .= "}";
      } else {
         $json .= "]}";
      }
      return $json;
   }
    public function getPaginasTocasTradicionalesTribunal($datosTocaTradicional, $paginacion) {
      $sqlIntervalo = "";
      $condicion = "";
      $valiadacondicion = true;
     if ($datosTocaTradicional['cveJuzgado'] != "0") {
         $condicion .= "  cj.cveJuzgado=" . $datosTocaTradicional['cveJuzgado'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['cveTipoCarpeta'] != "") {
         $condicion .= " and cj.cveTipoCarpeta=" . $datosTocaTradicional['cveTipoCarpeta'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['numero'] != "") {
         $condicion .= " and cj.numero=" . $datosTocaTradicional['numero'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['anio'] != "") {
         $condicion .= " and cj.anio=" . $datosTocaTradicional['anio'];
      } else {
         $valiadacondicion = false;
      }
      if ($datosTocaTradicional['fechaInicial'] != "" && $datosTocaTradicional['fechaFinal'] != "") {
         $fechaInicio = explode("/", $datosTocaTradicional["fechaInicial"]);
         $sqlIntervalo = " AND cj.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
         if ($datosTocaTradicional["fechaFinal"] != "") {
            $fechaFinal = explode("/", $datosTocaTradicional["fechaFinal"]);
            $sqlIntervalo.=" AND  cj.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
         }
      }
      $selectDAO = new SelectDAO();
      $params["fields"] = " rt.idReasignacionToca, rt.idReferenciaOrigen, rt.idReferenciaDestino,cj.idCarpetaJudicial idCarpetaJudicial, cj.cveTipoCarpeta cveTipoCarpeta, cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, cj.carpetaInv carpetaInv, cj.observaciones observaciones, cj.fechaRegistro fechaRegistro";
      $params["tables"] = " tblcarpetasjudiciales cj left join tblreasignaciontocas rt on (rt.idReferenciaOrigen = cj.idCarpetaJudicial) ";
      if ($valiadacondicion) {
         // vine condicion
         $params["conditions"] =  $condicion;
      } else {
         //no viene condicion
         $params["conditions"] =  $condicion . $sqlIntervalo;
      }

      $rs = json_decode($selectDAO->selectDAO($params));

      $Pages = (int) $rs->totalCount / $paginacion["cantxPag"];
      $restoPages = $rs->totalCount % $paginacion["cantxPag"];

      $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

      $json = "";
      $json .= '{"type":"OK",';
      $json .= '"totalCount":"' . $rs->totalCount . '",';

      $json .= '"data":[';
      $x = 1;

      if ($totPages > 0) {
         for ($index = 1; $index <= $totPages; $index++) {

            $json .= "{";
            $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
            $json .= "}";
            $x++;
            if ($x <= ($totPages )) {
               $json .= ",";
            }
         }
         $json .= "],";
         $json .= '"pagina":{"total":""},';
         $json .= '"total":"' . ($index - 1) . '"';
         $json .= "}";
      } else {
         $json .= "]}";
      }
      return $json;
   }

   public function obtenerImputados($idReferencia) {
      $selectDAO = new SelectDAO();
      $params["fields"] = "ic.idImputadoCarpeta, ic.nombre ,ic.paterno,ic.materno,ic.nombreMoral,ic.cveTipoPersona,ic.activo activo, ic.detenido detenido, ic.fechaControlDet fechaDetencion";
      $params["tables"] = "  tblimputadoscarpetas ic";
      $params["conditions"] = " (ic.idCarpetaJudicial  = " . $idReferencia . ") ";

      $rs = json_decode($selectDAO->selectDAO($params));
//        $imputado = "";
      $imputado = array();
      $imputadoArr = array();
      if ($rs->totalCount > 0) {

         foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
            foreach ($value as $key2 => $value2) {
               $ArrCausas[$key][$key2] = $value2;
               if ($key2 == "nombre") {
                  $imputado["nombre"] = $value2;
               }
               if ($key2 == "paterno") {
                  $imputado["paterno"] = $value2;
               }
               if ($key2 == "materno") {
                  $imputado["materno"] = $value2;
               }
               if ($key2 == "cveTipoPersona") {
                  $imputado["cveTipoPersona"] = $value2;
               }
               if ($key2 == "nombreMoral") {
                  $imputado["nombreMoral"] = $value2;
               }
               if ($key2 == "idImputadoCarpeta") {
                  $imputado["idImputadoCarpeta"] = $value2;
               }
               if ($key2 == "activo") {
                  $imputado["activo"] = $value2;
               }
               if ($key2 == "detenido") {
                  $imputado["detenido"] = $value2;
               }
               if ($key2 == "fechaDetencion") {
                  $imputado["fechaDetencion"] = $value2;
               }
            }
            array_push($imputadoArr, $imputado);
         }
      }

      return $imputadoArr;
   }
   public function obtenerApelantes($idReferencia) {
      $selectDAO = new SelectDAO();
      $params["fields"] = "*";
      $params["tables"] = "  tblapelantescarpetas ac";
      $params["conditions"] = " (ac.idCarpetaJudicial  = " . $idReferencia . ") ";

      $rs = json_decode($selectDAO->selectDAO($params));
//        $apelante = "";
      $apelante = array();
      $apelanteArr = array();
      if ($rs->totalCount > 0) {

         foreach ($rs->resultados as $key => $value) {
//            $apelante .="{";
            foreach ($value as $key2 => $value2) {
               $ArrCausas[$key][$key2] = $value2;
               if ($key2 == "nombre") {
                  $apelante["nombre"] = $value2;
               }
               if ($key2 == "paterno") {
                  $apelante["paterno"] = $value2;
               }
               if ($key2 == "materno") {
                  $apelante["materno"] = $value2;
               }
               if ($key2 == "cveTipoPersona") {
                  $apelante["cveTipoPersona"] = $value2;
               }
               if ($key2 == "nombreMoral") {
                  $apelante["nombreMoral"] = $value2;
               }
               if ($key2 == "cveTipoApelante") {
                  $apelante["cveTipoApelante"] = $value2;
               }
               if ($key2 == "idApelanteCarpeta") {
                  $apelante["idApelanteCarpeta"] = $value2;
               }
               if ($key2 == "activo") {
                  $apelante["activo"] = $value2;
               }
               if ($key2 == "domicilio") {
                  $apelante["domicilio"] = $value2;
               }
               if ($key2 == "email") {
                  $apelante["email"] = $value2;
               }
            }
            array_push($apelanteArr, $apelante);
         }
      }

      return $rs;
   }

   public function obtenerDelitosCarpeta($idReferencia) {
      $selectDAO = new SelectDAO();
      $params["fields"] = "  DISTINCT(iodc.idDelitoCArpeta), d.desDelito, dc.cveDelito,dc.activo activo ";
      $params["tables"] = " tbldelitoscarpetas dc inner join tblimpofedelcarpetas iodc on (iodc.idDelitoCarpeta = dc.idDelitoCarpeta) inner join tbldelitos d on (d.cveDelito =dc.cveDelito)  ";
      $params["conditions"] = "  iodc.idCarpetaJudicial=" . $idReferencia . " and dc.activo='S' and d.activo = 'S' and iodc.activo='S'";

      $rs = json_decode($selectDAO->selectDAO($params));
      $delitos = array();
      $delitosArr = array();
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {
//            $delitos .="{";
            foreach ($value as $key2 => $value2) {
               $ArrCausas[$key][$key2] = $value2;
               if ($key2 == "cveDelito") {
                  $delitos["cveDelito"] = $value2;
               }
               if ($key2 == "desDelito") {
                  $delitos["desDelito"] = $value2;
               }
               if ($key2 == "activo") {
                  $delitos["activo"] = $value2;
               }
            }

            array_push($delitosArr, $delitos);
         }
      }
      return $delitosArr;
   }

   public function obtenerOfendidos($idReferencia) {
      $selectDAO = new SelectDAO();

      $params["fields"] = " oc.idOfendidoCarpeta, oc.nombre ,oc.paterno,oc.materno,oc.nombreMoral,oc.cveTipoPersona, oc.activo activo  ";
      $params["tables"] = "  tblofendidoscarpetas oc ";
      $params["conditions"] = " (oc.idCarpetaJudicial = " . $idReferencia . ")";
      $rs = json_decode($selectDAO->selectDAO($params));

      //$ofendido = "";
      $ofendido = array();
      $ofendidoArr = array();
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {
//            $ofendido .="{";
            foreach ($value as $key2 => $value2) {
               $ArrCausas[$key][$key2] = $value2;
               if ($key2 == "nombre") {
                  $ofendido["nombre"] = $value2;
//                    $ofendido .='"nombre":"' . $value2 . '",';
               }
               if ($key2 == "paterno") {
                  $ofendido["paterno"] = $value2;
//                    $ofendido .='"paterno":"' . $value2 . '",';
               }
               if ($key2 == "materno") {
                  $ofendido["materno"] = $value2;
//                    $ofendido .='"materno":"' . $value2 . '",';
               }
               if ($key2 == "cveTipoPersona") {
                  $ofendido["cveTipoPersona"] = $value2;
//                    $ofendido .='"cveTipoPersona":"' . $value2 . '"';
               }
               if ($key2 == "nombreMoral") {
                  $ofendido["nombreMoral"] = $value2;
//                    $ofendido .='"nombreMoral":"' . $value2 . '",';
               }
               if ($key2 == "idOfendidoCarpeta") {
                  $ofendido["idOfendidoCarpeta"] = $value2;
//                    $ofendido .='"nombreMoral":"' . $value2 . '",';
               }
               if ($key2 == "activo") {
                  $ofendido["activo"] = $value2;
//                    $ofendido .='"nombreMoral":"' . $value2 . '",';
               }
            }

            array_push($ofendidoArr, $ofendido);
         }
      }
      return $ofendidoArr;
   }

   public function obtenerRevisionTocaArbol($param) {
      $html = "";
      $SelectDao = new SelectDAO();
      $idActuacion = $param["idActuacion"];
      $condicion = " and a.idActuacion=" . $idActuacion;
      $remisionCausa = "";
      $params["fields"] = "a.cveTipoActuacion cveTipoActuacion,a.Sintesis sintesis,a.noFojas noFojas,tt.numero numeroC, tt.anio anioC,cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, tt.cvejuzgado cvejuzgadoC,tt.idReferencia idReferencia" .
              ", tt.cveTipoCarpeta cveTipoCarpetaC , cj.carpetaInv carpetaInv, tt.grave grave, cj.observaciones observaciones,tt.idTocaTradicionales idTocaTradicionales, cj.fechaRegistro fechaRegistro";
      $params["tables"] = "tbltocastradicionales tt inner join tblcarpetasjudiciales cj on (tt.idReferencia = cj.idCarpetaJudicial) inner join tblactuaciones a on (a.idReferencia=cj.idCarpetaJudicial)";
      $params["conditions"] = " tt.revisionExtraordonaria='S'" . $condicion;
      //var_dump($params["conditions"]);
      $rs = $SelectDao->selectDAO($params);
      $rs = json_decode($rs);
      if ($rs->totalCount > 0) {
      $resultado = array();
      $resultado2 = array();
      $resultado2["Estatus"] = $rs->Estatus;
      $resultado2["totalCount"] = $rs->totalCount;
      $resultado2["mnj"] = $rs->mnj;
      if ($rs->totalCount > 0) {
         foreach ($rs->resultados as $key => $value) {

            foreach ($value as $key2 => $value2) {
               $resultado[$key][$key2] = $value2;
               if ($key2 == "idReferencia") {
                  $idReferencia = $value2;
               }
            }

            $resultado[$key]["apelantes"] = $this->obtenerApelantes($idReferencia);
         }
      }
      
      $resultado2["resultados"] = $resultado;
      }
      
      return json_encode($resultado2);
   }
   
   public function consultaAcuseToca($param) {
      $html = "";
      $SelectDao = new SelectDAO();
      $idReferencia = $param["idReferencia"];
      $condicion = " and tt.idReferencia=" . $idReferencia;
      $remisionCausa = "";
      $params["fields"] = "tc.desTipoCarpeta desTipoCarpetaC,tt.numero numeroC, tt.anio anioC,cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado, tt.cvejuzgado cvejuzgadoC,tt.idReferencia idReferencia" .
              ", tt.cveTipoCarpeta cveTipoCarpeta , cj.carpetaInv carpetaInv, tt.grave grave, cj.observaciones observaciones,tt.idTocaTradicionales idTocaTradicionales, cj.fechaRegistro fechaRegistro";
      $params["tables"] = "tbltocastradicionales tt inner join tblcarpetasjudiciales cj on (tt.idReferencia = cj.idCarpetaJudicial) inner join tbltiposcarpetas tc on (tc.cveTipoCarpeta=tt.cveTipoCarpeta) ";
      $params["conditions"] = " tt.revisionExtraordonaria='N'" . $condicion;
      //var_dump($params["conditions"]);
      $tocaTradicional = $SelectDao->selectDAO($params);
      $tocaTradicionalAux = json_decode($tocaTradicional);
//        var_dump($tocaTradicionalAux);
      if ($tocaTradicionalAux->Estatus != "Fail") {
         if ($tocaTradicionalAux->mnj != "Sin resultados") {




            $html .= "<style type='text/css'>";
            $html .= ".tablaPrint{";
            $html .= "font-family: Arial;";
            $html .= "font-size: 12px;";
            $html .= "border: 1px solid #000;";
            $html .= "border-collapse: collapse;";
            $html .= "}";
            $html .= "</style>";

            ///////////////////////////////////////Logos////////////////////
            $html .= "<table border='0' width='100%' >";
            $html .= "<tr>";
            $html .= "<td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAABICAYAAAAQ5YupAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjkwRjA1NERFREZEMDExRTVBQzAzRjk4NjIwNjJBNDE3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjkwRjA1NERGREZEMDExRTVBQzAzRjk4NjIwNjJBNDE3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTBGMDU0RENERkQwMTFFNUFDMDNGOTg2MjA2MkE0MTciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OTBGMDU0RERERkQwMTFFNUFDMDNGOTg2MjA2MkE0MTciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7o4V+UAAAtBElEQVR42uxdCZweVZGv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'></td>";
            $html .= "</tr>";
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE AUDIENCIAS////////////////////
            $html .= " <table class='tablaPrint' border='1' width='100%' >";
            if (array_key_exists('idReferenciaOrigen', $param) && $param["idReferenciaOrigen"] != null) {
               $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA TOCA -- REASIGNADA<b></td></tr>";
            }else{               
            $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA TOCA<b></td></tr>";
            }
             $html .= "<tr>";
                $html .= "<td>Fecha Registro:</td>";
                $html .= "<td colspan='3'>" . $this->fechaMySQLaNormal($tocaTradicionalAux->resultados[0]->fechaRegistro) . "</td>";
                $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td>Juzgado:</td>";
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($tocaTradicionalAux->resultados[0]->cvejuzgadoC);
            $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
            $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
            $html .= "</tr>";
            if (array_key_exists('idReferenciaOrigen', $param) && $param["idReferenciaOrigen"] != null) {
            $html .= "<tr>";
               $html .= "<td>Proviene:</td>";
               $SelectDAO = new SelectDAO();
               $params["fields"] = " tbljuzgados.cveJuzgado,tbljuzgados.desJuzgado ";
               $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tbljuzgados tbljuzgados ON tblcarpetasjudiciales.cveJuzgado = tbljuzgados.cveJuzgado  ";
               $params["conditions"] = " (tblcarpetasjudiciales.idCarpetaJudicial = ".$param["idReferenciaOrigen"].") ";
               
               $rs = json_decode($SelectDAO->selectDAO($params));
               if($rs->totalCount > 0){
                  $html .= "<td colspan='3'>" . $rs->resultados[0]->desJuzgado . "</td>";
               }
//               $html .= "<td colspan='3'>" . $rs->resultados[0]-> . "</td>";
               $html .= "</tr>";
            } else {
               
            }
            $html .= "<tr>";
            $html .= "<td>Tribunal:</td>";
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($tocaTradicionalAux->resultados[0]->cvejuzgado);
            $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
            $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Toca:</td>";
            $html .= "<td colspan='3'>" . $tocaTradicionalAux->resultados[0]->numero . "/" . $tocaTradicionalAux->resultados[0]->anio . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td>Antecede:</td>";
            $html .= "<td colspan='3'>".$tocaTradicionalAux->resultados[0]->desTipoCarpetaC.": " . $tocaTradicionalAux->resultados[0]->numeroC . "/" . $tocaTradicionalAux->resultados[0]->anioC . "</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td >Grave:</td>";
            if ($tocaTradicionalAux->resultados[0]->grave == "S") {
               $grave = "SI";
            } else {
               $grave = "NO";
            }
            $html .= "<td colspan='3'>" . $grave . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Observaciones:</td>";
            $html .= "<td colspan='3'>" . $tocaTradicionalAux->resultados[0]->observaciones . "</td>";
            $html .= "</tr>";
            $html .= "</table><br>";

//                // informacion apelante
            $html .= " <table class='tablaPrint' border='1' width='100%' >";


            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
            $imputadosCarpetasDao = new ImputadoscarpetasDAO();

            $ofendidosCarpetasDao = new OfendidosCarpetasDAO();
            $ofendidosCarpetasDto = new OfendidosCarpetasDTO();

            $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
            $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();

            $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
            $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

            $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();
            $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();


            $delitosCarpetasDto = new DelitoscarpetasDTO();
            $delitosCarpetasDao = new DelitoscarpetasDAO();


            $tipospartesDto = new TipospartesDTO();
            $tipospartesDao = new TipospartesDAO();

            ///////////////////////////////////////TABLA DE IMPUTADOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>IMPUTADO(S)</b></td></tr>";
            $imputadosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $imputadosCarpetasDto->setActivo("S");
            $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto);
            if ($imputadosCarpetasDto != "") {
               foreach ($imputadosCarpetasDto as $imputado) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($imputado->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($imputado->getNombre()) . " " . utf8_encode($imputado->getPaterno()) . " " . utf8_encode($imputado->getMaterno());
                  } else {
                     $html .= "Nombre: " . utf8_encode($imputado->getNombreMoral());
                  }
                  if ($imputado->getDetenido() == "S") {
                     $html .= "<br>fecha de detenci&oacute;n: " . $this->fechaMySQLaNormal($imputado->getFechaControlDet());
                  }
                  $html .= "</td>";
                  $html .= "<td width='60%'>";

                  $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                  $domiciliosimputadoscarpetasDto->setActivo("S");
                  $rsDomiciliosimputadosDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
                  if ($rsDomiciliosimputadosDto != "") {
                     foreach ($rsDomiciliosimputadosDto as $domicilioImputado) {
                        $html .= "Domicilio: " . utf8_encode($domicilioImputado->getDireccion());
                        if ($domicilioImputado->getNumExterior() != "") {
                           $html .= " No. " . utf8_encode($domicilioImputado->getNumExterior());
                        }
                        if ($domicilioImputado->getColonia() != "") {
                           $html .= " Colonia " . utf8_encode($domicilioImputado->getColonia());
                        }
                        if ($domicilioImputado->getCp() != "") {
                           $html .= " C.P. " . ($domicilioImputado->getCp());
                        }
                        $html .= "<br>";
                     }
                  }
                  $defensoresImputadosDto->setActivo("S");
                  $defensoresImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                  $rsDefensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                  if ($rsDefensoresImputadosDto != "") {
                     foreach ($rsDefensoresImputadosDto as $defensorImputados) {
                        $html .= "Defensor: " . utf8_encode($defensorImputados->getNombre()) . "<br>";
                     }
                  }
                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE OFENDIDOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>SUJETO(S) PASIVO(S) DEL DELITO</b></td></tr>";
            $ofendidosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $ofendidosCarpetasDto->setActivo("S");
            $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto);
            if ($ofendidosCarpetasDto != "") {
               foreach ($ofendidosCarpetasDto as $ofendido) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($ofendido->getCveTipoParte() != "" && $ofendido->getCveTipoParte() != "0") {
                     $tipospartesDto->setCveTipoParte($ofendido->getCveTipoParte());
                     $rsTipospartesDto = $tipospartesDao->selectTipospartes($tipospartesDto);
                     if ($rsTipospartesDto != "") {
                        $tipo = $rsTipospartesDto[0]->getDescTipoParte();
                     } else {
                        $tipo = "OFENDIDO";
                     }
                  } else {
                     $tipo = "OFENDIDO";
                  }

                  if ($ofendido->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($ofendido->getNombre()) . " " . utf8_encode($ofendido->getPaterno()) . " " . utf8_encode($ofendido->getMaterno()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  } else {
                     $html .= "Nombre: " . utf8_encode($ofendido->getNombreMoral()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  }

                  $html .= "</td>";
                  $html .= "<td width='60%'>";

                  $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                  $domiciliosofendidoscarpetasDto->setActivo("S");
                  $rsDomiciliosOfendidosDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
                  if ($rsDomiciliosOfendidosDto != "") {
                     foreach ($rsDomiciliosOfendidosDto as $domicilioOfendido) {
                        $html .= "Domicilio: " . utf8_encode($domicilioOfendido->getDireccion());
                        if ($domicilioOfendido->getNumExterior() != "") {
                           $html .= " No. " . utf8_encode($domicilioOfendido->getNumExterior());
                        }
                        if ($domicilioOfendido->getColonia() != "") {
                           $html .= " Colonia " . utf8_encode($domicilioOfendido->getColonia());
                        }
                        if ($domicilioOfendido->getCp() != "") {
                           $html .= " C.P. " . ($domicilioOfendido->getCp());
                        }
                        $html .= "<br>";
                     }
                  }

                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";


            ///////////////////////////////////////TABLA DE DELITOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='4' align='center'><b>DELITO(S)</b></td></tr>";
            $html .= "<td>";
            $delitosCarpetasDto->setActivo("S");
            $delitosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $rsDelitosCarpetasDto = $delitosCarpetasDao->selectDelitosInner($delitosCarpetasDto);
            $index = 0;
            if ($rsDelitosCarpetasDto != "") {
               foreach ($rsDelitosCarpetasDto as $delitoCarpeta) {
                  $index ++;
                  $html .= $index . ".- " . utf8_encode($delitoCarpeta->getDesDelito()) . "<br>";
               }
            }
            $html .= "</td>";
            $html .= "</table><br>";
//            var_dump($param);
            if (array_key_exists('option', $param) && $param["option"] != null) {
               
            } else {
               $html .= "<script language=\"javascript\">";
               $html .= "window.print();";
               $html .= "</script>";
            }
         } else {
            $html .= "El acuse no se pudo generar1.";
         }
      } else {
         $html .= "El acuse no se pudo generar2.";
      }

      //hasta aqui

      return $html;
   }
   public function consultaAcuseTocaNt($param) {
      $html = "";
      $antecedente = new stdClass();
      $SelectDao = new SelectDAO();
      $idReferencia = $param["idReferencia"];
      $condicion = " cj.idCarpetaJudicial=" . $idReferencia;
      $remisionCausa = "";
      $params["fields"] = "cj.idCarpetajudicial idReferencia,tc.desTipoCarpeta desTipoCarpetaC,cj.numero numero,cj.anio anio,cj.cvejuzgado cvejuzgado" .
              " , cj.carpetaInv carpetaInv, cj.observaciones observaciones, cj.fechaRegistro fechaRegistro";
      $params["tables"] = " tblcarpetasjudiciales cj  inner join tbltiposcarpetas tc on (tc.cveTipoCarpeta=cj.cveTipoCarpeta) ";
      $params["conditions"] =  $condicion;
      //var_dump($params["conditions"]);
      $tocaTradicional = $SelectDao->selectDAO($params);
      $tocaTradicionalAux = json_decode($tocaTradicional);
      
        $params2["fields"] = " idCarpetaPadre ";
        $params2["tables"] = " tblantecedescarpetas ac ";
        $params2["conditions"] = " (ac.idCarpetaHija = ".$idReferencia.") ";
        
        $anteCarpeta = $SelectDao->selectDAO($params2);
        $anteCarpetaAux = json_decode($anteCarpeta);
        if($anteCarpetaAux->totalCount == 0){
             $paramsTt["fields"] = " tt.numero, tt.anio, tt.cveJuzgado, tt.cveTipoCarpeta,tc.desTipoCarpeta ";
            $paramsTt["tables"] = " tbltocastradicionales tt, tbltiposcarpetas tc ";
            $paramsTt["conditions"] = "tc.cveTipoCarpeta = tt.cveTipoCarpeta and (tt.idReferencia = ".$idReferencia.") ";
            $antecede = $SelectDao->selectDAO($paramsTt);
            $antecedeAux = json_decode($antecede);
            if($antecedeAux->totalCount != 0){
                $antecedente->numero = $antecedeAux->resultados[0]->numero;
                $antecedente->cveTipoCarpeta = $antecedeAux->resultados[0]->cveTipoCarpeta;
                $antecedente->desTipoCarpeta = $antecedeAux->resultados[0]->desTipoCarpeta;
                $antecedente->anio = $antecedeAux->resultados[0]->anio;
                $antecedente->cveJuzgado = $antecedeAux->resultados[0]->cveJuzgado;
            }else{
                 $antecedente->numero = "";
                $antecedente->cveTipoCarpeta = "";
                $antecedente->desTipoCarpeta = "";
                $antecedente->anio = "";
                $antecedente->cveJuzgado = "";
            }
        }else{
            $paramsCj["fields"] = " cj.numero, cj.anio, cj.cveJuzgado, cj.cveTipoCarpeta, tc.desTipoCarpeta ";
            $paramsCj["tables"] = " tblcarpetasjudiciales cj , tbltiposcarpetas tc ";
            $paramsCj["conditions"] = " tc.cveTipoCarpeta = cj.cveTipoCarpeta and (cj.idCarpetajudicial = ".$anteCarpetaAux->resultados[0]->idCarpetaPadre .") ";
            $carpetaA = $SelectDao->selectDAO($paramsCj);
            $carpetaAAux = json_decode($carpetaA);
            if($carpetaAAux->totalCount != 0){
                $antecedente->numero = $carpetaAAux->resultados[0]->numero;
                $antecedente->cveTipoCarpeta = $carpetaAAux->resultados[0]->cveTipoCarpeta;
                $antecedente->desTipoCarpeta = $carpetaAAux->resultados[0]->desTipoCarpeta;
                $antecedente->anio = $carpetaAAux->resultados[0]->anio;
                $antecedente->cveJuzgado = $carpetaAAux->resultados[0]->cveJuzgado;
            }else{
                 $antecedente->numero = "";
                $antecedente->cveTipoCarpeta = "";
                $antecedente->desTipoCarpeta = "";
                $antecedente->anio = "";
                $antecedente->cveJuzgado = "";
            }
        }
        
      if ($tocaTradicionalAux->Estatus != "Fail") {
         if ($tocaTradicionalAux->mnj != "Sin resultados") {




            $html .= "<style type='text/css'>";
            $html .= ".tablaPrint{";
            $html .= "font-family: Arial;";
            $html .= "font-size: 12px;";
            $html .= "border: 1px solid #000;";
            $html .= "border-collapse: collapse;";
            $html .= "}";
            $html .= "</style>";

            ///////////////////////////////////////Logos////////////////////
            $html .= "<table border='0' width='100%' >";
            $html .= "<tr>";
            $html .= "<td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAABICAYAAAAQ5YupAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjkwRjA1NERFREZEMDExRTVBQzAzRjk4NjIwNjJBNDE3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjkwRjA1NERGREZEMDExRTVBQzAzRjk4NjIwNjJBNDE3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTBGMDU0RENERkQwMTFFNUFDMDNGOTg2MjA2MkE0MTciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OTBGMDU0RERERkQwMTFFNUFDMDNGOTg2MjA2MkE0MTciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7o4V+UAAAtBElEQVR42uxdCZweVZGv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'></td>";
            $html .= "</tr>";
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE AUDIENCIAS////////////////////
            $html .= " <table class='tablaPrint' border='1' width='100%' >";
            if (array_key_exists('idReferenciaOrigen', $param) && $param["idReferenciaOrigen"] != null) {
               $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA TOCA -- REASIGNADA<b></td></tr>";
            }else{               
            $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA TOCA<b></td></tr>";
            }
             $html .= "<tr>";
                $html .= "<td>Fecha Registro:</td>";
                $html .= "<td colspan='3'>" . $this->fechaMySQLaNormal($tocaTradicionalAux->resultados[0]->fechaRegistro) . "</td>";
                $html .= "</tr>";
            $html .= "<tr>";
            
            $html .= "<td>Juzgado:</td>";
            
            if($antecedente->cveJuzgado != ""){
                
                    $juzgadosDao = new JuzgadosDAO();
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDto->setCveJuzgado($antecedente->cveJuzgado);
                    $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
                    $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
                    $html .= "</tr>";
                    if (array_key_exists('idReferenciaOrigen', $param) && $param["idReferenciaOrigen"] != null) {
                    $html .= "<tr>";
                       $html .= "<td>Proviene:</td>";
                       $SelectDAO = new SelectDAO();
                       $params["fields"] = " tbljuzgados.cveJuzgado,tbljuzgados.desJuzgado ";
                       $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tbljuzgados tbljuzgados ON tblcarpetasjudiciales.cveJuzgado = tbljuzgados.cveJuzgado  ";
                       $params["conditions"] = " (tblcarpetasjudiciales.idCarpetaJudicial = ".$param["idReferenciaOrigen"].") ";

                       $rs = json_decode($SelectDAO->selectDAO($params));
                       if($rs->totalCount > 0){
                          $html .= "<td colspan='3'>" . $rs->resultados[0]->desJuzgado . "</td>";
                       }
        //               $html .= "<td colspan='3'>" . $rs->resultados[0]-> . "</td>";
                       $html .= "</tr>";
                    } else {

                    }
                    $html .= "<tr>";
         }else{
             
             $html .= "<td colspan='3'>---No registrado--</td>";
                    
             $html .= "</tr>";
         }
            $html .= "<td>Tribunal:</td>";
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($tocaTradicionalAux->resultados[0]->cvejuzgado);
            $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
            $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Toca:</td>";
            $html .= "<td colspan='3'>" . $tocaTradicionalAux->resultados[0]->numero . "/" . $tocaTradicionalAux->resultados[0]->anio . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td>Antecede:</td>";
            if($antecedente->desTipoCarpeta != "" && $antecedente->numero != "" && $antecedente->anio != "" ){
                $html .= "<td colspan='3'>".$antecedente->desTipoCarpeta.": " . $antecedente->numero . "/" . $antecedente->anio . "</td>";
            }else{
                $html .= "<td colspan='3'>Sin antecedente</td>";
            }
            $html .= "</tr>";

            $html .= "<tr>";
            
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Observaciones:</td>";
            $html .= "<td colspan='3'>" . $tocaTradicionalAux->resultados[0]->observaciones . "</td>";
            $html .= "</tr>";
            $html .= "</table><br>";

                // informacion apelante
            $html .= " <table class='tablaPrint' border='1' width='100%' >";


            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
            $imputadosCarpetasDao = new ImputadoscarpetasDAO();

            $ofendidosCarpetasDao = new OfendidosCarpetasDAO();
            $ofendidosCarpetasDto = new OfendidosCarpetasDTO();

            $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
            $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();

            $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
            $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

            $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();
            $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();


            $delitosCarpetasDto = new DelitoscarpetasDTO();
            $delitosCarpetasDao = new DelitoscarpetasDAO();


            $tipospartesDto = new TipospartesDTO();
            $tipospartesDao = new TipospartesDAO();

            ///////////////////////////////////////TABLA DE IMPUTADOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>IMPUTADO(S)</b></td></tr>";
            $imputadosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $imputadosCarpetasDto->setActivo("S");
            $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto);
            if ($imputadosCarpetasDto != "") {
               foreach ($imputadosCarpetasDto as $imputado) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($imputado->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($imputado->getNombre()) . " " . utf8_encode($imputado->getPaterno()) . " " . utf8_encode($imputado->getMaterno());
                  } else {
                     $html .= "Nombre: " . utf8_encode($imputado->getNombreMoral());
                  }
                  if ($imputado->getDetenido() == "S") {
                     $html .= "<br>fecha de detenci&oacute;n: " . $this->fechaMySQLaNormal($imputado->getFechaControlDet());
                  }
                  $html .= "</td>";
                  $html .= "<td width='60%'>";

                  $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                  $domiciliosimputadoscarpetasDto->setActivo("S");
                  $rsDomiciliosimputadosDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
                  if ($rsDomiciliosimputadosDto != "") {
                     foreach ($rsDomiciliosimputadosDto as $domicilioImputado) {
                        $html .= "Domicilio: " . utf8_encode($domicilioImputado->getDireccion());
                        if ($domicilioImputado->getNumExterior() != "") {
                           $html .= " No. " . utf8_encode($domicilioImputado->getNumExterior());
                        }
                        if ($domicilioImputado->getColonia() != "") {
                           $html .= " Colonia " . utf8_encode($domicilioImputado->getColonia());
                        }
                        if ($domicilioImputado->getCp() != "") {
                           $html .= " C.P. " . ($domicilioImputado->getCp());
                        }
                        $html .= "<br>";
                     }
                  }
                  $defensoresImputadosDto->setActivo("S");
                  $defensoresImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                  $rsDefensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                  if ($rsDefensoresImputadosDto != "") {
                     foreach ($rsDefensoresImputadosDto as $defensorImputados) {
                        $html .= "Defensor: " . utf8_encode($defensorImputados->getNombre()) . "<br>";
                     }
                  }
                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE OFENDIDOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>SUJETO(S) PASIVO(S) DEL DELITO</b></td></tr>";
            $ofendidosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $ofendidosCarpetasDto->setActivo("S");
            $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto);
            if ($ofendidosCarpetasDto != "") {
               foreach ($ofendidosCarpetasDto as $ofendido) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($ofendido->getCveTipoParte() != "" && $ofendido->getCveTipoParte() != "0") {
                     $tipospartesDto->setCveTipoParte($ofendido->getCveTipoParte());
                     $rsTipospartesDto = $tipospartesDao->selectTipospartes($tipospartesDto);
                     if ($rsTipospartesDto != "") {
                        $tipo = $rsTipospartesDto[0]->getDescTipoParte();
                     } else {
                        $tipo = "OFENDIDO";
                     }
                  } else {
                     $tipo = "OFENDIDO";
                  }

                  if ($ofendido->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($ofendido->getNombre()) . " " . utf8_encode($ofendido->getPaterno()) . " " . utf8_encode($ofendido->getMaterno()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  } else {
                     $html .= "Nombre: " . utf8_encode($ofendido->getNombreMoral()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  }

                  $html .= "</td>";
                  $html .= "<td width='60%'>";

                  $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                  $domiciliosofendidoscarpetasDto->setActivo("S");
                  $rsDomiciliosOfendidosDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
                  if ($rsDomiciliosOfendidosDto != "") {
                     foreach ($rsDomiciliosOfendidosDto as $domicilioOfendido) {
                        $html .= "Domicilio: " . utf8_encode($domicilioOfendido->getDireccion());
                        if ($domicilioOfendido->getNumExterior() != "") {
                           $html .= " No. " . utf8_encode($domicilioOfendido->getNumExterior());
                        }
                        if ($domicilioOfendido->getColonia() != "") {
                           $html .= " Colonia " . utf8_encode($domicilioOfendido->getColonia());
                        }
                        if ($domicilioOfendido->getCp() != "") {
                           $html .= " C.P. " . ($domicilioOfendido->getCp());
                        }
                        $html .= "<br>";
                     }
                  }

                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";


            ///////////////////////////////////////TABLA DE DELITOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='4' align='center'><b>DELITO(S)</b></td></tr>";
            $html .= "<td>";
            $delitosCarpetasDto->setActivo("S");
            $delitosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $rsDelitosCarpetasDto = $delitosCarpetasDao->selectDelitosInner($delitosCarpetasDto);
            $index = 0;
            if ($rsDelitosCarpetasDto != "") {
               foreach ($rsDelitosCarpetasDto as $delitoCarpeta) {
                  $index ++;
                  $html .= $index . ".- " . utf8_encode($delitoCarpeta->getDesDelito()) . "<br>";
               }
            }
            $html .= "</td>";
            $html .= "</table><br>";
//            var_dump($param);
            if (array_key_exists('option', $param) && $param["option"] != null) {
               
            } else {
               $html .= "<script language=\"javascript\">";
               $html .= "window.print();";
               $html .= "</script>";
            }
         } else {
            $html .= "El acuse no se pudo generar1.";
         }
      } else {
         $html .= "El acuse no se pudo generar2.";
      }

      //hasta aqui

      return $html;
   }

   public function consultaAcuseRevisionToca($param) {
      $html = "";
      $SelectDao = new SelectDAO();
      $idReferencia = $param["idReferencia"];
      $condicion = " and tt.idReferencia=" . $idReferencia;
      $remisionCausa = "";
      $params["fields"] = "a.cveTipoActuacion cveTipoActuacion  ,tc.desTipoCarpeta,a.cveTipoCarpeta cveTipoCarpeta,a.numActuacion numeroRevision,a.aniActuacion anioRevision,a.idReferencia idReferencia,a.numero numero, a.anio anio,tt.numero numeroC, tt.anio anioC, a.cveJuzgado cvejuzgado, tt.cveJuzgado cvejuzgadoC, tt.cveTipoCarpeta cveTipoCarpetaC, a.idActuacion idActuacion,a.Sintesis sintesis, a.observaciones observaciones,a.fechaRegistro fechaRegistro,cj.numAcumulado numAcumulado, cj.fechaRegistro fechaRegistroT" . $campos;
      $params["tables"] = "tblcarpetasjudiciales cj, tblactuaciones a,tbltocastradicionales tt, tbltiposCarpetas tc" . $tabla;
      $params["conditions"] = " tc.cveTipoCarpeta=tt.cveTipoCarpeta and tt.idReferencia=cj.idCarpetaJudicial and cj.idCarpetaJudicial=a.idReferencia   and cveTipoActuacion in (35,36,37) and a.activo='S'  " . $condicion;
      //var_dump($params["conditions"]);
      $tocaTradicional = $SelectDao->selectDAO($params);
      $tocaTradicionalAux = json_decode($tocaTradicional);
        //var_dump($tocaTradicionalAux);
      if ($tocaTradicionalAux->Estatus != "Fail") {
         if ($tocaTradicionalAux->mnj != "Sin resultados") {




            $html .= "<style type='text/css'>";
            $html .= ".tablaPrint{";
            $html .= "font-family: Arial;";
            $html .= "font-size: 12px;";
            $html .= "border: 1px solid #000;";
            $html .= "border-collapse: collapse;";
            $html .= "}";
            $html .= "</style>";

            ///////////////////////////////////////Logos////////////////////
            $html .= "<table border='0' width='100%' >";
            $html .= "<tr>";
            $html .= "<td><img src='../../../vistas/img/logoPj.png'></td>";
            $html .= "</tr>";
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE AUDIENCIAS////////////////////
            $html .= " <table class='tablaPrint' border='1' width='100%' >";
            $html .= "<tr><td colspan='4' align='center'><b>DATOS DE LA REVISI&Oacute;N<b></td></tr>";
            $html .= "<tr>";
            $html .= "<td >Fecha de registro:</td>";
            $html .= "<td colspan='3'>" . $this->fechaMySQLaNormal($tocaTradicionalAux->resultados[0]->fechaRegistroT) . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td>Juzgado:</td>";
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($tocaTradicionalAux->resultados[0]->cvejuzgadoC);
            $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
            $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td>Tribunal:</td>";
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setCveJuzgado($tocaTradicionalAux->resultados[0]->cvejuzgado);
            $juzgadosDto = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);
            $tiposActuacionesDto = new TiposactuacionesDTO();
            $tiposActuacionesDao = new TiposactuacionesDAO();
            $tiposActuacionesDto->setCveTipoActuacion($tocaTradicionalAux->resultados[0]->cveTipoActuacion);
            $tipoActuacion = $tiposActuacionesDao->selectTiposactuaciones($tiposActuacionesDto);
            $html .= "<td colspan='3'>" . $juzgadosDto[0]->getDesJuzgado() . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Toca:</td>";
            $html .= "<td colspan='3'>" . $tocaTradicionalAux->resultados[0]->numero . "/" . $tocaTradicionalAux->resultados[0]->anio . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<tr>";
            $html .= "<td>Antecede:</td>";
            $html .= "<td colspan='3'>".$tocaTradicionalAux->resultados[0]->desTipoCarpeta.": " . $tocaTradicionalAux->resultados[0]->numeroC . "/" . $tocaTradicionalAux->resultados[0]->anioC . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Tipo de recurso:</td>";
            $html .= "<td colspan='3'>" . $tipoActuacion[0]->getDesTipoActuacion() . "</td>";
            $html .= "</tr>";
            $html .= "<tr>";
            $html .= "<td >Observaciones:</td>";
            $html .= "<td colspan='3'>" . $tocaTradicionalAux->resultados[0]->observaciones . "</td>";
            $html .= "</tr>";
            $html .= "</table><br>";

//                // informacion apelante
            $html .= " <table class='tablaPrint' border='1' width='100%' >";


            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
            $imputadosCarpetasDao = new ImputadoscarpetasDAO();

            $apelantescarpetasDto = new ApelantescarpetasDTO();
            $apelantescarpetasDao = new ApelantescarpetasDAO();

            $ofendidosCarpetasDao = new OfendidosCarpetasDAO();
            $ofendidosCarpetasDto = new OfendidosCarpetasDTO();

            $domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();
            $domiciliosimputadoscarpetasDao = new DomiciliosimputadoscarpetasDAO();

            $domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();
            $domiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

            $defensoresImputadosDto = new DefensoresimputadoscarpetasDTO();
            $defensoresImputadosDao = new DefensoresimputadoscarpetasDAO();


            $delitosCarpetasDto = new DelitoscarpetasDTO();
            $delitosCarpetasDao = new DelitoscarpetasDAO();


            $tipospartesDto = new TipospartesDTO();
            $tipospartesDao = new TipospartesDAO();

            ///////////////////////////////////////TABLA DE IMPUTADOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>IMPUTADO(S)</b></td></tr>";
            $imputadosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $imputadosCarpetasDto->setActivo("S");
            $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto);
            if ($imputadosCarpetasDto != "") {
               foreach ($imputadosCarpetasDto as $imputado) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($imputado->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($imputado->getNombre()) . " " . utf8_encode($imputado->getPaterno()) . " " . utf8_encode($imputado->getMaterno());
                  } else {
                     $html .= "Nombre: " . utf8_encode($imputado->getNombreMoral());
                  }
                  if ($imputado->getDetenido() == "S") {
                     $html .= "<br>fecha de detenci&oacute;n: " . $this->fechaMySQLaNormal($imputado->getFechaControlDet());
                  }
                  $html .= "</td>";
                  $html .= "<td width='60%'>";

                  $domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                  $domiciliosimputadoscarpetasDto->setActivo("S");
                  $rsDomiciliosimputadosDto = $domiciliosimputadoscarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
                  if ($rsDomiciliosimputadosDto != "") {
                     foreach ($rsDomiciliosimputadosDto as $domicilioImputado) {
                        $html .= "Domicilio: " . utf8_encode($domicilioImputado->getDireccion());
                        if ($domicilioImputado->getNumExterior() != "") {
                           $html .= " No. " . utf8_encode($domicilioImputado->getNumExterior());
                        }
                        if ($domicilioImputado->getColonia() != "") {
                           $html .= " Colonia " . utf8_encode($domicilioImputado->getColonia());
                        }
                        if ($domicilioImputado->getCp() != "") {
                           $html .= " C.P. " . ($domicilioImputado->getCp());
                        }
                        $html .= "<br>";
                     }
                  }
                  $defensoresImputadosDto->setActivo("S");
                  $defensoresImputadosDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
                  $rsDefensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadoscarpetas($defensoresImputadosDto);
                  if ($rsDefensoresImputadosDto != "") {
                     foreach ($rsDefensoresImputadosDto as $defensorImputados) {
                        $html .= "Defensor: " . utf8_encode($defensorImputados->getNombre()) . "<br>";
                     }
                  }
                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE OFENDIDOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>SUJETO(S) PASIVO(S) DEL DELITO</b></td></tr>";
            $ofendidosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $ofendidosCarpetasDto->setActivo("S");
            $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto);
            if ($ofendidosCarpetasDto != "") {
               foreach ($ofendidosCarpetasDto as $ofendido) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($ofendido->getCveTipoParte() != "" && $ofendido->getCveTipoParte() != "0") {
                     $tipospartesDto->setCveTipoParte($ofendido->getCveTipoParte());
                     $rsTipospartesDto = $tipospartesDao->selectTipospartes($tipospartesDto);
                     if ($rsTipospartesDto != "") {
                        $tipo = $rsTipospartesDto[0]->getDescTipoParte();
                     } else {
                        $tipo = "OFENDIDO";
                     }
                  } else {
                     $tipo = "OFENDIDO";
                  }

                  if ($ofendido->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($ofendido->getNombre()) . " " . utf8_encode($ofendido->getPaterno()) . " " . utf8_encode($ofendido->getMaterno()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  } else {
                     $html .= "Nombre: " . utf8_encode($ofendido->getNombreMoral()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  }

                  $html .= "</td>";
                  $html .= "<td width='60%'>";

                  $domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($ofendido->getIdOfendidoCarpeta());
                  $domiciliosofendidoscarpetasDto->setActivo("S");
                  $rsDomiciliosOfendidosDto = $domiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
                  if ($rsDomiciliosOfendidosDto != "") {
                     foreach ($rsDomiciliosOfendidosDto as $domicilioOfendido) {
                        $html .= "Domicilio: " . utf8_encode($domicilioOfendido->getDireccion());
                        if ($domicilioOfendido->getNumExterior() != "") {
                           $html .= " No. " . utf8_encode($domicilioOfendido->getNumExterior());
                        }
                        if ($domicilioOfendido->getColonia() != "") {
                           $html .= " Colonia " . utf8_encode($domicilioOfendido->getColonia());
                        }
                        if ($domicilioOfendido->getCp() != "") {
                           $html .= " C.P. " . ($domicilioOfendido->getCp());
                        }
                        $html .= "<br>";
                     }
                  }

                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";

            ///////////////////////////////////////TABLA DE DELITOS////////////////////
            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='4' align='center'><b>DELITO(S)</b></td></tr>";
            $html .= "<td>";
            $delitosCarpetasDto->setActivo("S");
            $delitosCarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $rsDelitosCarpetasDto = $delitosCarpetasDao->selectDelitosInner($delitosCarpetasDto);
            $index = 0;
            if ($rsDelitosCarpetasDto != "") {
               foreach ($rsDelitosCarpetasDto as $delitoCarpeta) {
                  $index ++;
                  $html .= $index . ".- " . utf8_encode($delitoCarpeta->getDesDelito()) . "<br>";
               }
            }
            $html .= "</td>";
            $html .= "</table><br>";
            ///////////////////////////////////////TABLA DE APELANTES////////////////////

            $html .= "<table class='tablaPrint' border='1' width='100%'>";
            $html .= "<tr><td colspan='2' align='center'><b>SENTENCIADO(S)</b></td></tr>";
            $apelantescarpetasDto->setIdCarpetaJudicial($tocaTradicionalAux->resultados[0]->idReferencia);
            $apelantescarpetasDto->setActivo("S");
            $apelantescarpetasDto = $apelantescarpetasDao->selectApelantescarpetas($apelantescarpetasDto);
            if ($apelantescarpetasDto != "") {
               foreach ($apelantescarpetasDto as $apelante) {
                  $html .= "<tr>";
                  $html .= "<td width='40%'>";
                  if ($apelante->getCveTipoPersona() == 1) {
                     $html .= "Nombre: " . utf8_encode($apelante->getNombre()) . " " . utf8_encode($apelante->getPaterno()) . " " . utf8_encode($apelante->getMaterno()) . " <b>(" . utf8_encode($tipo) . ")</b>";
                  } else {
                     $html .= "Nombre: " . utf8_encode($apelante->getNombreMoral()) . "";
                  }
                  $html .= "</td>";
                  $html .= "<td width='60%'>";
                  $html .= "Domicilio: " . utf8_encode($apelante->getDomicilio());
                  $html .= "<br>";
                  $html .= "</td>";
                  $html .= "</tr>";
               }
            }
            $html .= "</table><br>";
            $html .= "<script language=\"javascript\">";
            $html .= "window.print();";
            $html .= "</script>";
         } else {
            $html .= "El acuse no se pudo generar1.";
         }
      } else {
         $html .= "El acuse no se pudo generar2.";
      }

      //hasta aqui

      return $html;
   }

}

?>
