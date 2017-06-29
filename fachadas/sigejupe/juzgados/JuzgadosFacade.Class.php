<?php

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
   include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
   include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
   include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
   include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
   include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
   include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

   include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
   include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

   include_once(dirname(__FILE__) . "/../../../webservice/cliente/edificios/EdificiosCliente.php");

   class JuzgadosFacade {

      public function validarJuzgados($JuzgadosDto) {
         $JuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveJuzgado(), "utf8") : strtoupper($JuzgadosDto->getcveJuzgado()))))));
         if ($this->esFecha($JuzgadosDto->getcveJuzgado())) {
            $JuzgadosDto->setcveJuzgado($this->fechaMysql($JuzgadosDto->getcveJuzgado()));
         }
         $JuzgadosDto->setdesJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getdesJuzgado(), "utf8") : strtoupper($JuzgadosDto->getdesJuzgado()))))));
         if ($this->esFecha($JuzgadosDto->getdesJuzgado())) {
            $JuzgadosDto->setdesJuzgado($this->fechaMysql($JuzgadosDto->getdesJuzgado()));
         }
         $JuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getactivo(), "utf8") : strtoupper($JuzgadosDto->getactivo()))))));
         if ($this->esFecha($JuzgadosDto->getactivo())) {
            $JuzgadosDto->setactivo($this->fechaMysql($JuzgadosDto->getactivo()));
         }
         $JuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getfechaRegistro(), "utf8") : strtoupper($JuzgadosDto->getfechaRegistro()))))));
         if ($this->esFecha($JuzgadosDto->getfechaRegistro())) {
            $JuzgadosDto->setfechaRegistro($this->fechaMysql($JuzgadosDto->getfechaRegistro()));
         }
         $JuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getfechaActualizacion(), "utf8") : strtoupper($JuzgadosDto->getfechaActualizacion()))))));
         if ($this->esFecha($JuzgadosDto->getfechaActualizacion())) {
            $JuzgadosDto->setfechaActualizacion($this->fechaMysql($JuzgadosDto->getfechaActualizacion()));
         }
         $JuzgadosDto->setcveInstancia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveInstancia(), "utf8") : strtoupper($JuzgadosDto->getcveInstancia()))))));
         if ($this->esFecha($JuzgadosDto->getcveInstancia())) {
            $JuzgadosDto->setcveInstancia($this->fechaMysql($JuzgadosDto->getcveInstancia()));
         }
         $JuzgadosDto->setcveMateria(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveMateria(), "utf8") : strtoupper($JuzgadosDto->getcveMateria()))))));
         if ($this->esFecha($JuzgadosDto->getcveMateria())) {
            $JuzgadosDto->setcveMateria($this->fechaMysql($JuzgadosDto->getcveMateria()));
         }
         $JuzgadosDto->setcveTipojuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveTipojuzgado(), "utf8") : strtoupper($JuzgadosDto->getcveTipojuzgado()))))));
         if ($this->esFecha($JuzgadosDto->getcveTipojuzgado())) {
            $JuzgadosDto->setcveTipojuzgado($this->fechaMysql($JuzgadosDto->getcveTipojuzgado()));
         }
         $JuzgadosDto->setcveEdificio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveEdificio(), "utf8") : strtoupper($JuzgadosDto->getcveEdificio()))))));
         if ($this->esFecha($JuzgadosDto->getcveEdificio())) {
            $JuzgadosDto->setcveEdificio($this->fechaMysql($JuzgadosDto->getcveEdificio()));
         }
         $JuzgadosDto->setcveDistrito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveDistrito(), "utf8") : strtoupper($JuzgadosDto->getcveDistrito()))))));
         if ($this->esFecha($JuzgadosDto->getcveDistrito())) {
            $JuzgadosDto->setcveDistrito($this->fechaMysql($JuzgadosDto->getcveDistrito()));
         }
         $JuzgadosDto->setcveRegion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadosDto->getcveRegion(), "utf8") : strtoupper($JuzgadosDto->getcveRegion()))))));
         if ($this->esFecha($JuzgadosDto->getcveRegion())) {
            $JuzgadosDto->setcveRegion($this->fechaMysql($JuzgadosDto->getcveRegion()));
         }

         return $JuzgadosDto;
      }

      public function validarJuz($JuzgadosDto) {
         $JuzgadosDto->setcveJuzgado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getcveJuzgado())))));
         $JuzgadosDto->setdesJuzgado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getdesJuzgado())))));
         $JuzgadosDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getactivo())))));
         $JuzgadosDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getfechaRegistro())))));
         $JuzgadosDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getfechaActualizacion())))));
         $JuzgadosDto->setcveInstancia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getcveInstancia())))));
         $JuzgadosDto->setcveMateria(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getcveMateria())))));
         $JuzgadosDto->setcveTipojuzgado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getcveTipojuzgado())))));
         $JuzgadosDto->setcveEdificio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getcveEdificio())))));
         $JuzgadosDto->setcveDistrito(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getcveDistrito())))));
         $JuzgadosDto->setSiglas(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $JuzgadosDto->getSiglas())))));


         return $JuzgadosDto;
      }

      /**
       * @param $juzgadosDto
       * @return mixed
       */
      public function getJuzgadosSelect2Format($juzgadosDto) {
         $juzgadosDto = $this->validarJuzgados($juzgadosDto);
         $juzgadosController = new JuzgadosController();
         $juzgados = $juzgadosController->getJuzgadosSelect2Format($juzgadosDto);

         if (count($juzgados)) {
            $response = [
                'status' => 'ok',
                'data' => $juzgados
            ];
         } else {

            $response = [
                'status' => 'error'
            ];
         }

         return json_encode($response);
      }

      public function selectJuzgados($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadosDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
      }

      public function selectJuzgadosLike($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgadosLike($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadosDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
      }

      public function selectJuzgadosDistrito($JuzgadosDto) {

         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveDistrito = $JuzgadosDto[0]->getCveDistrito();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveDistrito($cveDistrito);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $dtoToJson = new DtoToJson($JuzgadosDto);

               return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
      }

      public function selectJuzgadosRegion($JuzgadosDto) {

         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveRegion = $JuzgadosDto[0]->getCveRegion();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveRegion($cveRegion);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $cveRegion = $JuzgadosDto[0]->getCveRegion();
               $JuzgadosDto = new JuzgadosDTO();
               $JuzgadosDto->setCveRegion($cveRegion);
               $JuzgadosDto->setActivo("S");
               $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4) ORDER BY desJuzgado ASC ");
               if ($JuzgadosDto != "") {
                  $dtoToJson = new DtoToJson($JuzgadosDto);

                  return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
               }
               $jsonDto = new Encode_JSON();
               return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
      }
      public function selectJuzgadosRegionTradicional($JuzgadosDto) {

         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveRegion = $JuzgadosDto[0]->getCveRegion();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveRegion($cveRegion);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4,7) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $cveRegion = $JuzgadosDto[0]->getCveRegion();
               $JuzgadosDto = new JuzgadosDTO();
               $JuzgadosDto->setCveRegion($cveRegion);
               $JuzgadosDto->setActivo("S");
               $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4,7) ORDER BY desJuzgado ASC ");
               if ($JuzgadosDto != "") {
                  $dtoToJson = new DtoToJson($JuzgadosDto);

                  return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
               }
               $jsonDto = new Encode_JSON();
               return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
      }
      public function selectJuzgadosRegionTribunal($JuzgadosDto) {

         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveRegion = $JuzgadosDto[0]->getCveRegion();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveRegion($cveRegion);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (5,8) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $cveRegion = $JuzgadosDto[0]->getCveRegion();
               $JuzgadosDto = new JuzgadosDTO();
               $JuzgadosDto->setCveRegion($cveRegion);
               $JuzgadosDto->setActivo("S");
               $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (5,8) ORDER BY desJuzgado ASC ");
               if ($JuzgadosDto != "") {
                  $dtoToJson = new DtoToJson($JuzgadosDto);

                  return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
               }
               $jsonDto = new Encode_JSON();
               return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
      }

      public function selectJuzgadosTradicional($JuzgadosDto,$cveTipojuzgado = null) {

         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveDistrito = $JuzgadosDto[0]->getCveDistrito();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveDistrito($cveDistrito);
            if($cveTipojuzgado != null){
                $JuzgadosDto->setCveTipojuzgado($cveTipojuzgado);
            }else{
                $JuzgadosDto->setCveTipojuzgado(7);
                
            }
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, "  ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $dtoToJson = new DtoToJson($JuzgadosDto);

               return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
      }

      public function selectJuzgadosDistrito2Instancia($JuzgadosDto) {

         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveDistrito = $JuzgadosDto[0]->getCveDistrito();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveDistrito($cveDistrito);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (5,8) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $dtoToJson = new DtoToJson($JuzgadosDto);

               return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
      }

      /**
       * Obtienen la lista de los juzgado y salas para las Sentencias Publicas
       * */
      public function selectJuzgadosSala($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $cveDistrito = $JuzgadosDto[0]->getCveDistrito();
            $JuzgadosDto = new JuzgadosDTO();
            $JuzgadosDto->setCveDistrito($cveDistrito);
            $JuzgadosDto->setActivo("S");
            $JuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosDto, null, " AND cveTipoJuzgado in (1,2,3,4,5) ORDER BY desJuzgado ASC ");
            if ($JuzgadosDto != "") {
               $dtoToJson = new DtoToJson($JuzgadosDto);

               return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
      }

      public function insertJuzgados($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->insertJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadosDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
      }

      public function guardaJuzgado($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuz($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();

         $JuzgadosAuxDto = new JuzgadosDTO();
         $JuzgadosAuxDto->setCveJuzgado($JuzgadosDto->getCveJuzgado());
         $rsJuzgadosDto = $JuzgadosController->selectJuzgados($JuzgadosAuxDto);
         $error = false;
         $movimiento = "";
         if ($rsJuzgadosDto != "") {
            $movimiento .= "anterior: ****cveJuzgado: " . $rsJuzgadosDto[0]->getCveJuzgado() . " DesJuzado: " . $rsJuzgadosDto[0]->getDesJuzgado() . " activo: " . $rsJuzgadosDto[0]->getActivo() . " cveInstancia: " . $rsJuzgadosDto[0]->getCveInstancia() . " cveMateria: " . $rsJuzgadosDto[0]->getCveMateria() . " cveTipoJuzgado: " . $rsJuzgadosDto[0]->getCveTipojuzgado() . " cveEdificio: " . $rsJuzgadosDto[0]->getCveEdificio() . " cveDistrito: " . $rsJuzgadosDto[0]->getCveDistrito() . " cveRegion: " . $rsJuzgadosDto[0]->getCveRegion() . " Siglas: " . $rsJuzgadosDto[0]->getSiglas();
            $rs = $JuzgadosController->updateJuzgados($JuzgadosDto);
            if ($rs == "") {
               $error = true;
            } else {
               $accion = 328;
               $mensaje = "El juzgado se actualizo de forma correcta";
               $movimiento .= "  ****ACTUAL****cveJuzgado: " . $rs[0]->getCveJuzgado() . " DesJuzado: " . $rs[0]->getDesJuzgado() . " activo: " . $rs[0]->getActivo() . " cveInstancia: " . $rs[0]->getCveInstancia() . " cveMateria: " . $rs[0]->getCveMateria() . " cveTipoJuzgado: " . $rs[0]->getCveTipojuzgado() . " cveEdificio: " . $rs[0]->getCveEdificio() . " cveDistrito: " . $rs[0]->getCveDistrito() . " cveRegion: " . $rs[0]->getCveRegion() . " Siglas: " . $rs[0]->getSiglas();
            }
         } else {
            $rs = $JuzgadosController->insertJuzgados($JuzgadosDto);
            if ($rs == "") {
               $error = true;
            } else {
               $accion = 327;
               $movimiento .= "cveJuzgado: " . $rs[0]->getCveJuzgado() . " DesJuzado: " . $rs[0]->getDesJuzgado() . " activo: " . $rs[0]->getActivo() . " cveInstancia: " . $rs[0]->getCveInstancia() . " cveMateria: " . $rs[0]->getCveMateria() . " cveTipoJuzgado: " . $rs[0]->getCveTipojuzgado() . " cveEdificio: " . $rs[0]->getCveEdificio() . " cveDistrito: " . $rs[0]->getCveDistrito() . " cveRegion: " . $rs[0]->getCveRegion() . " Siglas: " . $rs[0]->getSiglas();
               $mensaje = "El juzgado se guardo de forma correcta";
            }
         }
         $json = "";
         $x = 1;
         if (!$error) {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($JuzgadosDto) . '",';
            $json .= '"mnj":"' . $mensaje . '",';
            $json .= '"data":[';
            foreach ($rs as $Juzgado) {
               $json .= "{";
               $json .= '"cveJuzgado":' . json_encode(($Juzgado->getCveJuzgado())) . ",";
               $json .= '"desJuzgado":' . json_encode(utf8_encode($Juzgado->getDesJuzgado())) . ",";
               $json .= '"activo":' . json_encode(($Juzgado->getActivo())) . ",";
               $json .= '"fechaRegistro":' . json_encode(($Juzgado->getFechaRegistro())) . ",";
               $json .= '"fechaActualizacion":' . json_encode(($Juzgado->getFechaActualizacion())) . ",";
               $json .= '"cveInstancia":' . json_encode(($Juzgado->getCveInstancia())) . ",";
               $json .= '"cveMateria":' . json_encode(($Juzgado->getCveMateria())) . ",";
               $json .= '"cveTipojuzgado":' . json_encode(($Juzgado->getCveTipojuzgado())) . ",";
               $json .= '"cveEdificio":' . json_encode(($Juzgado->getCveEdificio())) . ",";
               $json .= '"cveDistrito":' . json_encode(($Juzgado->getCveDistrito())) . ",";
               $json .= '"cveRegion":' . json_encode(($Juzgado->getCveRegion())) . ",";
               $json .= '"Siglas":' . json_encode(($Juzgado->getSiglas())) . "";
               $json .= "}" . "\n";
               $x ++;
               if ($x <= count($JuzgadosDto)) {
                  $json .= ",";
               }
            }
            $json .= "]";
            $json .= "}";


            $BitacoramovimientosDao = new BitacoramovimientosDAO();
            $BitacoramovimientosDto = new BitacoramovimientosDTO();
            $BitacoramovimientosDto->setCveAccion($accion);
            $BitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $BitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $BitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $BitacoramovimientosDto->setObservaciones($movimiento);
            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto);
         } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se pudo guardar el juzgado."}';
         }
         return $json;
      }

      public function updateJuzgados($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->updateJuzgados($JuzgadosDto);
         if ($JuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadosDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
      }

      public function deleteJuzgados($JuzgadosDto) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->deleteJuzgados($JuzgadosDto);
         if ($JuzgadosDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
         }
         $jsonDto = new Encode_JSON();

         return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
      }

      public function consultaGeneral($JuzgadosDto, $param) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->consultaGeneral($JuzgadosDto, $param);
         return $JuzgadosDto;
      }

      public function getPaginas($JuzgadosDto, $param) {
         $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
         $JuzgadosController = new JuzgadosController();
         $JuzgadosDto = $JuzgadosController->getPaginas($JuzgadosDto, $param);
         return $JuzgadosDto;
      }

      public function edificios($JuzgadosDto) {
         $EdificiosClientes = new EdificiosCliente();
         $cveDistrito = $JuzgadosDto->getCveDistrito();
         $cveRegion = $JuzgadosDto->getCveRegion();
         $u = "3a332bac303f6e9536b36731090f66800abee04c";
         $p = "cf3387f0417a09352af09b2926e3e38522bef9f5";

         $rsEdificos = $EdificiosClientes->getEdificios("", $cveDistrito, $cveRegion, $u, $p);
         return $rsEdificos;
      }

      private function esFecha($fecha) {
         if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
         }

         return false;
      }

      private function esFechaMysql($fecha) {
         if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
         }

         return false;
      }

      private function fechaMysql($fecha) {
         list($dia, $mes, $year) = explode("/", $fecha);

         return $year . "-" . $mes . "-" . $dia;
      }

      private function fechaNormal($fecha) {
         list($dia, $mes, $year) = explode("/", $fecha);

         return $year . "-" . $mes . "-" . $dia;
      }

   }

   @$cveJuzgado = $_POST["cveJuzgado"];
   @$desJuzgado = $_POST["desJuzgado"];
   @$activo = $_POST["activo"];
   @$fechaRegistro = $_POST["fechaRegistro"];
   @$fechaActualizacion = $_POST["fechaActualizacion"];
   @$cveInstancia = $_POST["cveInstancia"];
   @$cveMateria = $_POST["cveMateria"];
   @$cveTipojuzgado = $_POST["cveTipojuzgado"];
   @$cveEdificio = $_POST["cveEdificio"];
   @$cveDistrito = $_POST["cveDistrito"];
   @$cveRegion = $_POST["cveRegion"];
   @$siglas = $_POST["siglas"];
   @$accion = $_POST["accion"];

   $param = array();
   @$param["pag"] = $_POST['pag'];
   @$param["cantxPag"] = $_POST['cantxPag'];
   @$param["paginacion"] = $_POST['paginacion'];
   @$param["generico"] = $_POST['generico'];

   $juzgadosFacade = new JuzgadosFacade();
   $juzgadosDto = new JuzgadosDTO();

   $juzgadosDto->setCveJuzgado($cveJuzgado);
   $juzgadosDto->setDesJuzgado($desJuzgado);
   $juzgadosDto->setActivo($activo);
   $juzgadosDto->setFechaRegistro($fechaRegistro);
   $juzgadosDto->setFechaActualizacion($fechaActualizacion);
   $juzgadosDto->setCveInstancia($cveInstancia);
   $juzgadosDto->setCveMateria($cveMateria);
   $juzgadosDto->setCveTipojuzgado($cveTipojuzgado);
   $juzgadosDto->setCveEdificio($cveEdificio);
   $juzgadosDto->setCveDistrito($cveDistrito);
   $juzgadosDto->setCveRegion($cveRegion);
   $juzgadosDto->setSiglas($siglas);

   if ($accion === 'getJuzgadosSelect2Format') {
      $juzgadosDto = $juzgadosFacade->getJuzgadosSelect2Format($juzgadosDto);
      echo $juzgadosDto;
   }

   if (($accion == "guardar") && ($cveJuzgado == "")) {

      $juzgadosDto = $juzgadosFacade->insertJuzgados($juzgadosDto);
      echo $juzgadosDto;
   } else if (($accion == "guardar") && ($cveJuzgado != "")) {

      $juzgadosDto = $juzgadosFacade->updateJuzgados($juzgadosDto);
      echo $juzgadosDto;
   } else if ($accion == "consultar") {

      $juzgadosDto = $juzgadosFacade->selectJuzgados($juzgadosDto);
      echo $juzgadosDto;
   } else if ($accion == "selectJuzgadosAdminAudiencias") {

      $juzgadosDto = $juzgadosFacade->selectJuzgadosAdminAudiencias($juzgadosDto);
      echo $juzgadosDto;
   } else if ($accion == "consultarLike") {

      $juzgadosDto = $juzgadosFacade->selectJuzgadosLike($juzgadosDto);
      echo $juzgadosDto;
   } else if (($accion == "baja") && ($cveJuzgado != "")) {

      $juzgadosDto = $juzgadosFacade->deleteJuzgados($juzgadosDto);
      echo $juzgadosDto;
   } else if (($accion == "seleccionar") && ($cveJuzgado != "")) {

      $juzgadosDto = $juzgadosFacade->selectJuzgados($juzgadosDto);
      echo $juzgadosDto;
   } else if (($accion == "distrito")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);
         $juzgadosDto->setActivo("S");
         $rs = $juzgadosFacade->selectJuzgados($juzgadosDto);
         if ($rs != "") {
            $jsonRs = json_decode($rs);
            if (!isset($jsonRs->data[0]->cveTipojuzgado)) {
                echo $rs;
                exit;
            }
            if($jsonRs->data[0]->cveTipojuzgado == "7") {
               $juzgadosDto = $juzgadosFacade->selectJuzgadosTradicional($juzgadosDto);
            }else if($jsonRs->data[0]->cveTipojuzgado == "8") {
               $juzgadosDto = $juzgadosFacade->selectJuzgadosTradicional($juzgadosDto,$jsonRs->data[0]->cveTipojuzgado);
            }else if ($jsonRs->data[0]->cveTipojuzgado != "5") {
               $juzgadosDto = $juzgadosFacade->selectJuzgadosDistrito($juzgadosDto);
            } else{
                $juzgadosDto = $juzgadosFacade->selectJuzgados($juzgadosDto);
            }

            echo $juzgadosDto;
         } else {
            echo "Sin resultados";
         }
      }
   } else if (($accion == "distrito2Instancia")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");
         $juzgadosDto = $juzgadosFacade->selectJuzgadosDistrito2Instancia($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if (($accion == "conSalas")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");

         $juzgadosDto = $juzgadosFacade->selectJuzgadosSala($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if ($accion == "guardaJuzgado") {
      $rs = $juzgadosFacade->guardaJuzgado($juzgadosDto);
      echo $rs;
   } else if ($accion == "edificio") {
      $rs = $juzgadosFacade->edificios($juzgadosDto);
      echo $rs;
   } else if ($accion == "consultaGeneral") {
      $param["paginacion"] = true;
      $rs = $juzgadosFacade->consultaGeneral($juzgadosDto, $param);
      echo $rs;
   } else if ($accion == "seleccion") {
      $rs = $juzgadosFacade->consultaGeneral($juzgadosDto, $param);
      echo $rs;
   } else if ($accion == "getPaginas") {
      $param["paginacion"] = true;
      $rs = $juzgadosFacade->getPaginas($juzgadosDto, $param);
      echo $rs;
   } else if (($accion == "distrito2Instancia")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");

         $juzgadosDto = $juzgadosFacade->selectJuzgadosDistrito2Instancia($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if (($accion == "region")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");

         $juzgadosDto = $juzgadosFacade->selectJuzgadosRegion($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if (($accion == "regionTradicional")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");

         $juzgadosDto = $juzgadosFacade->selectJuzgadosRegionTradicional($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if (($accion == "regionTribunal")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");

         $juzgadosDto = $juzgadosFacade->selectJuzgadosRegionTribunal($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if ($accion == "tribunales") {
      $juzgadosDto = new JuzgadosDTO();
      $juzgadosDto->setActivo("S");
      $juzgadosDto->setCveTipoJuzgado("5");
      $juzgadosDto = $juzgadosFacade->selectJuzgados($juzgadosDto);
      echo $juzgadosDto;
   } else if ($accion == "getJuzgadoActuacion") {
      @$actuacion = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["idActuacion"], "utf8") : strtoupper($_POST["idActuacion"])))));
      if ($actuacion != "") {
         $SelectDAO = new SelectDAO();
         $params["fields"] = "tbljuzgados.* ";
         $params["tables"] = "htsj_sigejupe.tbljuzgados tbljuzgados 
		INNER JOIN htsj_sigejupe.tblactuaciones tblactuaciones 
		ON tbljuzgados.cveJuzgado = tblactuaciones.cveJuzgado";
         $params["conditions"] = "(tblactuaciones.idActuacion = " . $actuacion . ") ";
         $params["groups"] = "";
         $params["orders"] = "";
         $arrayResult = array();
         $arrayResultRS = array();
         $rs = json_decode($SelectDAO->selectDAO($params));
         if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
               foreach ($value as $key2 => $value2) {
                  $arrayResult[$key][$key2] = $value2;
               }
            }
            $arrayResultRS["Estatus"] = $rs->Estatus;
            $arrayResultRS["mnj"] = $rs->mnj;
            $arrayResultRS["totalCount"] = $rs->totalCount;
            $arrayResultRS["data"] = $arrayResult;
            echo json_encode($arrayResultRS);
         } else {
            echo $rs;
         }
      } else {
         
      }
   } else if ($accion == "getInstanciaJuzgado") {
      $SelectDAO = new SelectDAO();
      $params["fields"] = " tbljuzgados.cveInstancia ";
      $params["tables"] = " htsj_sigejupe.tbljuzgados tbljuzgados  ";
      $params["conditions"] = "(tbljuzgados.cveJuzgado = " . $_SESSION['cveAdscripcion'] . ") ";
      $rs = ($SelectDAO->selectDAO($params));
      echo $rs;
   } else if ($accion == "getJuzgadoAmparo") {
      @$idAmparo = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["idAmparo"], "utf8") : strtoupper($_POST["idAmparo"])))));
      if ($idAmparo != "") {
         $SelectDAO = new SelectDAO();
         $params["fields"] = " tbljuzgados.* ";
         $params["tables"] = " htsj_sigejupe.tblamparos tblamparos 
		INNER JOIN htsj_sigejupe.tbljuzgados tbljuzgados 
		ON tblamparos.cveJuzgado = tbljuzgados.cveJuzgado ";
         $params["conditions"] = "(tblamparos.idAmparo = " . $idAmparo . ") ";
         $params["groups"] = "";
         $params["orders"] = "";
         $arrayResult = array();
         $arrayResultRS = array();
         $rs = json_decode($SelectDAO->selectDAO($params));
         if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
               foreach ($value as $key2 => $value2) {
                  $arrayResult[$key][$key2] = $value2;
               }
            }
            $arrayResultRS["Estatus"] = $rs->Estatus;
            $arrayResultRS["mnj"] = $rs->mnj;
            $arrayResultRS["totalCount"] = $rs->totalCount;
            $arrayResultRS["data"] = $arrayResult;
            echo json_encode($arrayResultRS);
         } else {
            echo $rs;
         }
      } else {
         
      }
   } else if ($accion == "getJuzgadoAmparo") {
      @$idExhorto = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["idAmparo"], "utf8") : strtoupper($_POST["idAmparo"])))));
      if ($idExhorto != "") {
         $SelectDAO = new SelectDAO();
         $params["fields"] = " tbljuzgados.* ";
         $params["tables"] = " htsj_sigejupe.tblexhortos tblexhortos 
		INNER JOIN htsj_sigejupe.tbljuzgados tbljuzgados 
		ON tblexhortos.cveJuzgado = tbljuzgados.cveJuzgado ";
         $params["conditions"] = "(tblexhortos.idExhorto = " . $idExhorto . ") ";
         $params["groups"] = "";
         $params["orders"] = "";
         $arrayResult = array();
         $arrayResultRS = array();
         $rs = json_decode($SelectDAO->selectDAO($params));
         if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
               foreach ($value as $key2 => $value2) {
                  $arrayResult[$key][$key2] = $value2;
               }
            }
            $arrayResultRS["Estatus"] = $rs->Estatus;
            $arrayResultRS["mnj"] = $rs->mnj;
            $arrayResultRS["totalCount"] = $rs->totalCount;
            $arrayResultRS["data"] = $arrayResult;
            echo json_encode($arrayResultRS);
         } else {
            echo $rs;
         }
      } else {
         
      }
   } else if ($accion == "getJuzgadoCarpeta") {
      @$idCarpeta = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["idCarpeta"], "utf8") : strtoupper($_POST["idCarpeta"])))));
      if ($idCarpeta != "") {
         $SelectDAO = new SelectDAO();
         $params["fields"] = " tbljuzgados.* ";
         $params["tables"] = " htsj_sigejupe.tblcarpetasjudiciales tblcarpetasjudiciales 
		INNER JOIN htsj_sigejupe.tbljuzgados tbljuzgados 
		ON tblcarpetasjudiciales.cveJuzgado = tbljuzgados.cveJuzgado ";
         $params["conditions"] = "(tblcarpetasjudiciales.idCarpetaJudicial = " . $idCarpeta . ") ";
         $params["groups"] = "";
         $params["orders"] = "";
         $arrayResult = array();
         $arrayResultRS = array();
         $rs = json_decode($SelectDAO->selectDAO($params));
         if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
               foreach ($value as $key2 => $value2) {
                  $arrayResult[$key][$key2] = $value2;
               }
            }
            $arrayResultRS["Estatus"] = $rs->Estatus;
            $arrayResultRS["mnj"] = $rs->mnj;
            $arrayResultRS["totalCount"] = $rs->totalCount;
            $arrayResultRS["data"] = $arrayResult;
            echo json_encode($arrayResultRS);
         } else {
            echo $rs;
         }
      } else {
         
      }
   } else if (($accion == "region")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);

         $juzgadosDto->setActivo("S");

         $juzgadosDto = $juzgadosFacade->selectJuzgadosRegion($juzgadosDto);
         echo $juzgadosDto;
      }
   } else if (($accion == "tradicional")) {
      if (isset($_SESSION['cveAdscripcion'])) {
         $juzgadosDto = new JuzgadosDTO();
         $juzgadosDto->setCveJuzgado($_SESSION['cveAdscripcion']);
         $juzgadosDto->setActivo("S");
         $rs = $juzgadosFacade->selectJuzgados($juzgadosDto);
         if ($rs != "") {
            $jsonRs = json_decode($rs);
//            if ($jsonRs->data[0]->cveTipojuzgado != "5") {
//                $juzgadosDto = $juzgadosFacade->selectJuzgadosDistrito($juzgadosDto);
//            } else {
            $juzgadosDto = $juzgadosFacade->selectJuzgadosTradicional($juzgadosDto);
//            }

            echo $juzgadosDto;
         } else {
            echo "Sin resultados";
         }
      }
   }
        } else {
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}
?>
