<?php

include_once(dirname(__FILE__) . "/../../../model/dto/dispositivos/DispositivosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../model/dao/dispositivos/DispositivosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../model/dto/dispositivosconfig/DispositivosConfigDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../model/dao/dispositivosconfig/DispositivosConfigDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../model/dto/constantes/ConstantesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../model/dao/constantes/ConstantesDAO.Class.php");

include_once(dirname(__FILE__) . "/../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");

class DispositivosServer {

    public function insertDispositivos($json, $u = "", $p = "") {
        if ($this->isValid(sha1($u), sha1($p))) {
            if ($json != "") {
                $decode_JSON = new Decode_JSON();
                $json = $decode_JSON->decode($json, true);

                if (!is_null($json)) {
                    $dispositivosDto = new DispositivosDTO();
                    $dispositivosDto->setNombre($json["nombre"]);
                    $dispositivosDto->setActivo($json["activo"]);
                    $dispositivosDto->setUsuario($json["usuario"]);
                    $dispositivosDao = new DispositivosDAO();
                    $tmp = $dispositivosDao->selectDispositivos($dispositivosDto);

                    if ($tmp == "") {
                        $dispositivosDto = $dispositivosDao->insertDispositivos($dispositivosDto);
                        if ($dispositivosDto != "") {
                            $dispositivosDto = $dispositivosDto[0];
                        }
                    } else {
                        $dispositivosDto = $dispositivosDao->updateDispositivos($dispositivosDto);
                        if ($dispositivosDto != "") {
                            $dispositivosDto = $dispositivosDto[0];
                        }
                    }

                    if ($dispositivosDto != "") {
                        for ($index = 0; $index < count($json["parametros"]); $index++) {
                            $parametros = (array) $json["parametros"][$index];

                            $dispositivosConfigDto = new DispositivosConfigDTO();
                            $dispositivosConfigDto->setNombreDispositivo($dispositivosDto->getNombre());
                            $dispositivosConfigDto->setNombrePropiedad($parametros["nombrePropiedad"]);

                            $tmp = $dispositivosConfigDto;
                            $dispositivosConfigDao = new DispositivosConfigDAO();

                            $tmp = $dispositivosConfigDao->selectDispositivosConfig($tmp);
                            if ($tmp == "") {
                                $dispositivosConfigDto->setUsuario($dispositivosDto->getUsuario());
                                $dispositivosConfigDto->setValorDefault($parametros["valorDefault"]);
                                $dispositivosConfigDto->setValor($parametros["valor"]);
                                $dispositivosConfigDto->setValorAnterior($parametros["valorAnterior"]);
                                $dispositivosConfigDto = $dispositivosConfigDao->insertDispositivos($dispositivosConfigDto);
                            } else {
                                $dispositivosConfigDto->setUsuario($dispositivosDto->getUsuario());
                                $dispositivosConfigDto->setValorDefault($parametros["valorDefault"]);
                                $dispositivosConfigDto->setValor($parametros["valor"]);
                                $dispositivosConfigDto->setValorAnterior($parametros["valorAnterior"]);
                                $dispositivosConfigDto = $dispositivosConfigDao->updateDispositivos($dispositivosConfigDto);
                            }
                        }

                        $tmp = new DispositivosDTO();
                        $tmp->setNombre($dispositivosDto->getNombre());
                        $dispositivosDao = new DispositivosDAO();
                        $tmp = $dispositivosDao->selectDispositivos($tmp);

                        $dispositivosConfigDto = new DispositivosConfigDTO();
                        $dispositivosConfigDto->setNombreDispositivo($tmp[0]->getNombre());
                        $dispositivosConfigDao = new DispositivosConfigDAO();
                        $dispositivosConfigDto = $dispositivosConfigDao->selectDispositivosConfig($dispositivosConfigDto);

                        $dtoToJson = new DtoToJson($tmp);
                        return $dtoToJson->to2Json($dispositivosConfigDto, "Alta de parametros correcta", "OK");
                    } else {
                        $json = new Encode_JSON();
                        return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "Ocurrio un error al registrar el dispositivo")));
                    }
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON se encuentra en blanco")));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    public function consultarDispositivos($json, $u = "", $p = "") {
        if ($this->isValid(sha1($u), sha1($p))) {
            if ($json != "") {
                $decode_JSON = new Decode_JSON();
                $json = $decode_JSON->decode($json, true);

                if (!is_null($json)) {
                    $dispositivosDto = new DispositivosDTO();
                    $dispositivosDto->setNombre($json["nombre"]);
                    $dispositivosDao = new DispositivosDAO();
                    $dispositivosDto = $dispositivosDao->selectDispositivos($dispositivosDto);
                    if ($dispositivosDto != "") {
                        $dispositivosConfigDto = new DispositivosConfigDTO();
                        $dispositivosConfigDto->setNombreDispositivo($dispositivosDto[0]->getNombre());
                        $dispositivosConfigDao = new DispositivosConfigDAO();
                        $dispositivosConfigDto = $dispositivosConfigDao->selectDispositivosConfig($dispositivosConfigDto);
                        if ($dispositivosConfigDto != "") {
                            $dtoToJson = new DtoToJson($dispositivosDto);
                            return $dtoToJson->to2Json($dispositivosConfigDto, "Consulta exitosa", "OK");
                        } else {
                            $dtoToJson = new DtoToJson($dispositivosDto);
                            return $dtoToJson->toJson("No existen parametros configurados para el dispositivo", "Error");
                        }
                    } else {
                        $json = new Encode_JSON();
                        return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "No se encontro el dispositivo")));
                    }
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON se encuentra en blanco")));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    public function insertConstantes($json, $u = "", $p = "") {
        if ($this->isValid(sha1($u), sha1($p))) {
            if ($json != "") {
                $decode_JSON = new Decode_JSON();
                $json = $decode_JSON->decode($json, true);

                if (!is_null($json)) {
                    $constantesDto = new ConstantesDTO();
                    $constantesDto->setNombre($json["nombre"]);
                    $constantesDto->setCveEdificio($json["cveEdificio"]);

                    $constantesDao = new ConstantesDAO();
                    $tmp = $constantesDao->selectConstantes($constantesDto);

                    if ($tmp == "") {
                        $constantesDto->setNombre($json["nombre"]);
                        $constantesDto->setUsuario($json["usuario"]);
                        $constantesDto->setValor($json["valor"]);
                        $constantesDto->setValorAnterior($json["valorAnterior"]);
                        $constantesDto->setCveEdificio($json["cveEdificio"]);
                        $constantesDto = $constantesDao->insertConstantes($constantesDto);
                    } else {
                        $constantesDto->setNombre($json["nombre"]);
                        $constantesDto->setUsuario($json["usuario"]);
                        $constantesDto->setValor($json["valor"]);
                        $constantesDto->setValorAnterior($json["valorAnterior"]);
                        $constantesDto->setCveEdificio($json["cveEdificio"]);
                        $constantesDto = $constantesDao->updateConstantes($constantesDto);
                    }

                    if ($constantesDto != "") {
                        $dtoToJson = new DtoToJson($constantesDto);
                        return $dtoToJson->toJson("Constante registrada de forma correcta", "OK");
                    } else {
                        $json = new Encode_JSON();
                        return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "No se logro registrar la constante")));
                    }
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON se encuentra en blanco")));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    public function consultaConstantes($cveEdificio, $u, $p) {
        if ($this->isValid(sha1($u), sha1($p))) {
            if ($cveEdificio != "") {
                $constantesDto = new ConstantesDTO();
                $constantesDto->setCveEdificio($cveEdificio);
                $constantesDao = new ConstantesDAO();
                $constantesDto = $constantesDao->selectConstantes($constantesDto);

                if ($constantesDto != "") {
                    $dtoToJson = new DtoToJson($constantesDto);
                    return $dtoToJson->toJson("Listado de propiedades del sistema", "OK");
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("Tipo" => "OK", "mensaje" => "No se encontraron propiedades del sistema")));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No ingreso una clave de edificio"))));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    private function isValid($user = "", $password = "") {
        $valido = false;
        if (is_dir("../" . $user) == true) {
            if (is_file("../" . $user . "/" . $password . ".pwsd") == true) {
                $valido = true;
            } else {
                $valido = false;
            }
        } else {
            $valido = false;
        }
        return $valido;
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("DispositivosScramble.wsdl");
$server->setClass("DispositivosServer");
$server->handle();

//$json ='{"nombre":"TWAIN_EPSON GT-S55","activo":"1","usuario":"ADMIN","parametros":[{"nombrePropiedad":"Alarms","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"AlarmVolume","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"AudioFileFormat","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"AudioTransferMech","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Author","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"AutoBright","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"AutoFeed","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"AutomaticBorderDetection","valorDefault":"null","valor":"false","valorAnterior":""},{"nombrePropiedad":"AutomaticCapture","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"AutomaticDeskew","valorDefault":"null","valor":"false","valorAnterior":""},{"nombrePropiedad":"AutomaticRotate","valorDefault":"null","valor":"false","valorAnterior":""},{"nombrePropiedad":"AutoScan","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"BarCodeDetectionEnabled","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BarCodeMaxRetries","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BarCodeMaxSearchPriorities","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BarCodeSearchMode","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BarCodeSearchPriorities","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BarCodeTimeout","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BatteryMinutes","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BatteryPercentage","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BitDepth","valorDefault":"1","valor":"1","valorAnterior":""},{"nombrePropiedad":"BitDepthReduction","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"BitOrder","valorDefault":"MSBFIRST","valor":"MSBFIRST","valorAnterior":""},{"nombrePropiedad":"BitOrderCodes","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Brightness","valorDefault":"0.0","valor":"0.0","valorAnterior":""},{"nombrePropiedad":"CameraPreviewUI","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Caption","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"CCITTKFactor","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ClearBuffers","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Compression","valorDefault":"NONE","valor":"NONE","valorAnterior":""},{"nombrePropiedad":"Contrast","valorDefault":"0.0","valor":"0.0","valorAnterior":""},{"nombrePropiedad":"CustHalfTone","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"CustomDSData","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"DeviceEvent","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"DeviceOnLine","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"DeviceTimeDate","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Duplex","valorDefault":"null","valor":"2PASSDUPLEX","valorAnterior":""},{"nombrePropiedad":"DuplexEnabled","valorDefault":"null","valor":"false","valorAnterior":""},{"nombrePropiedad":"EnableDSUIOnly","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"Endorser","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ExposureTime","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ExtendedCaps","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ExtImageInfo","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"FeederAlignment","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"FeederEnabled","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"FeederLoaded","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"FeederOrder","valorDefault":"null","valor":"FIRSTPAGEFIRST","valorAnterior":""},{"nombrePropiedad":"Filter","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"FlashUsed","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"FlipRotation","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Gamma","valorDefault":"null","valor":"2.1999969482421875","valorAnterior":""},{"nombrePropiedad":"Halftones","valorDefault":"null","valor":"Ninguno","valorAnterior":""},{"nombrePropiedad":"Highlight","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ImageDataSet","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ImageFileFormat","valorDefault":"BMP","valor":"BMP","valorAnterior":""},{"nombrePropiedad":"ImageFilter","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Indicators","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"JobControl","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"JPEGPixelType","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"JPEGQuality","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"LampState","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Language","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"LightPath","valorDefault":"REFLECTIVE","valor":"REFLECTIVE","valorAnterior":""},{"nombrePropiedad":"LightSource","valorDefault":"WHITE","valor":"WHITE","valorAnterior":""},{"nombrePropiedad":"MaxBatchBuffers","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"MinimumHeight","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"MinimumWidth","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"NoiseFilter","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Orientation","valorDefault":"PORTRAIT","valor":"PORTRAIT","valorAnterior":""},{"nombrePropiedad":"Overscan","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PaperDetectable","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PatchCodeDetectionEnabled","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PatchCodeMaxRetries","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PatchCodeMaxSearchPriorities","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PatchCodeSearchMode","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PatchCodeSearchPriorities","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PatchCodeTimeout","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PhysicalHeight","valorDefault":"null","valor":"36.0","valorAnterior":""},{"nombrePropiedad":"PhysicalWidth","valorDefault":"null","valor":"8.5","valorAnterior":""},{"nombrePropiedad":"PixelFlavor","valorDefault":"CHOCOLATE","valor":"CHOCOLATE","valorAnterior":""},{"nombrePropiedad":"PixelFlavorCodes","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PixelType","valorDefault":"BW","valor":"BW","valorAnterior":""},{"nombrePropiedad":"PlanarChunky","valorDefault":"CHUNKY","valor":"CHUNKY","valorAnterior":""},{"nombrePropiedad":"PowerSupply","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Printer","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PrinterEnabled","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PrinterIndex","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PrinterMode","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PrinterString","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"PrinterSuffix","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"ReacquireAllowed","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Rotation","valorDefault":"0.0","valor":"0.0","valorAnterior":""},{"nombrePropiedad":"SerialNumber","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"Shadow","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"SupportedBarCodeTypes","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"SupportedCaps","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"SupportedPathCodeTypes","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"SupportedSizes","valorDefault":"NONE","valor":"NONE","valorAnterior":""},{"nombrePropiedad":"Threshold","valorDefault":"110.0","valor":"110.0","valorAnterior":""},{"nombrePropiedad":"ThumbnailsEnabled","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"TimeBeforeFirstCapture","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"TimeBetweenCaptures","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"TimeDate","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"TimeFill","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"TransferCount","valorDefault":"null","valor":"-1","valorAnterior":""},{"nombrePropiedad":"TransferMech","valorDefault":"0","valor":"0","valorAnterior":""},{"nombrePropiedad":"UIControllable","valorDefault":"null","valor":"true","valorAnterior":""},{"nombrePropiedad":"UndefinedImageSize","valorDefault":"null","valor":"false","valorAnterior":""},{"nombrePropiedad":"Units","valorDefault":"INCHES","valor":"INCHES","valorAnterior":""},{"nombrePropiedad":"XNativeResolution","valorDefault":"600.0","valor":"600.0","valorAnterior":""},{"nombrePropiedad":"XResolution","valorDefault":"200.0","valor":"200.0","valorAnterior":""},{"nombrePropiedad":"XScaling","valorDefault":"1.0","valor":"1.0","valorAnterior":""},{"nombrePropiedad":"YNativeResolution","valorDefault":"600.0","valor":"600.0","valorAnterior":""},{"nombrePropiedad":"YResolution","valorDefault":"200.0","valor":"200.0","valorAnterior":""},{"nombrePropiedad":"YScaling","valorDefault":"1.0","valor":"1.0","valorAnterior":""},{"nombrePropiedad":"ZoomFactor","valorDefault":"null","valor":"null","valorAnterior":""},{"nombrePropiedad":"tl-x","valorDefault":"0.0","valor":"0.0","valorAnterior":""},{"nombrePropiedad":"tl-y","valorDefault":"0.0","valor":"0.0","valorAnterior":""},{"nombrePropiedad":"br-x","valorDefault":"8.5","valor":"8.5","valorAnterior":""},{"nombrePropiedad":"br-y","valorDefault":"36.0","valor":"36.0","valorAnterior":""}]}';
//$json='{"nombre":"direccionTemporal","valorAnterior":"","valor":"RUTA","usuario":"admin","cveEdificio":"15"}';
//$DispositivosServer = new DispositivosServer();
//echo $DispositivosServer->insertConstantes($json, "3lectronic0_Poder2014", "2014Poder_3lectronic0");
//echo $DispositivosServer->consultaConstantes(17, "3lectronic0_Poder2014", "2014Poder_3lectronic0");
?>
