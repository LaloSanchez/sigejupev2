<?php

include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class SelectDAO {

    private $proveedor;

    public function __construct($proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor("mysql", "sigejupe");
        } else {
            $this->proveedor = $proveedor;
        }
    }

    public function selectDAO($params, $proveedor = null, $paginacion = null, $procedures = false) {
        
        if ($params != "") {

            if ($proveedor == null) {
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
               // return json_encode($proveedor);
            }
            
            if (!$procedures) {
            
                if (array_key_exists('fields', $params)) {
                    
                    if (array_key_exists('tables', $params)) {
                        $sql = "SELECT " . $params["fields"] . " FROM " . $params["tables"];
                    } else {
                        $sql = "SELECT " . $params["fields"];
                    }

                    if (array_key_exists('conditions', $params)) {
                        $sql .= " WHERE " . $params["conditions"];
                    }

                    if (array_key_exists('groups', $params)) {
                        if (trim($params["groups"]) != "") {
                            $sql .= " GROUP BY " . $params["groups"];
                        }
                    }

                    if (array_key_exists('orders', $params)) {
                        if (trim($params["orders"]) != "") {
                            $sql .= " ORDER BY " . $params["orders"];
                        }
                    }
                    if ($paginacion != "" || $paginacion != null) {
                        $inicial = "";
                        if ($paginacion["paginacion"] == "true") {
                            if ($paginacion["pag"] > 0) {
                                $inicial = ($paginacion["pag"] - 1) * $paginacion["cantxPag"];
                            } else {
                                $inicial = 0;
                            }
                            $sql.=" LIMIT " . $inicial . "," . $paginacion["cantxPag"];
                        }
                    }
//                echo "\n".$sql."\n";
                    $FielsName = explode(",", $params["fields"]);
                    $this->proveedor->execute($sql);
                    
                    $json = "";
                    $cont = 0;
                    $jsondatos = "";
                    if (!$this->proveedor->error()) {
                        //return "ss".$this->proveedor->rows($this->proveedor->stmt). "ss";
                        if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                            //return "\n".$sql."\n";
                            $num_Field = mysqli_num_fields($this->proveedor->stmt);
                            $json .= "";
                            while ($result = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                                $jsonDetalle = "";
                                for ($index = 0; $index < $num_Field; $index++) {
                                    $fieldinfo = mysqli_fetch_field_direct($this->proveedor->stmt, $index);
                                    $jsonDetalle .= '"' . $fieldinfo->name . '":' . json_encode(utf8_encode($result[$fieldinfo->name])) . ',';
                                }
                                $cont++;
                                $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                            }
                            $json .= substr($jsondatos, 0, -1) . "" . "\n";

                            $tmp = '{"Estatus":"ok",';
                            $tmp .= '"totalCount":"' . $cont . '",';
                            $tmp .= '"mnj":"Consulta exitosa",';
                            $tmp .= '"resultados":[';
                            $tmp .= $json;
                            $tmp .= "]";
                            $tmp .= "}";
                        } else {
                            $tmp = '{"Estatus":"ok",';
                            $tmp .= '"mnj":"Sin resultados",';
                            $tmp .= '"totalCount":"0"';
                            $tmp .= "}";
                        }
                    } else {
                        $tmp = '{"Estatus":"Fail",';
                        $tmp .= '"mnj":' . json_encode(utf8_encode($this->proveedor->error()));
                        $tmp .= "}";
                    }

                    $this->proveedor->stmt = $this->proveedor->free_result($this->proveedor->stmt);
                    if ($proveedor == null) {
                        $this->proveedor->close();
                    }
                } else {
                    $tmp = '{"Estatus":"Fail",';
                    $tmp .= '"mnj":"La consulta no contiene los parametros necesarios"';
                    $tmp .= "}";
                }
            } else {
                if (array_key_exists('procedure', $params)) {
                    $sql = "CALL " . $params["procedure"];
                    
                    $this->proveedor->execute($sql);
                    $json = "";
                    $cont = 0;
                    $jsondatos = "";
                    
                    if (!$this->proveedor->error()) {
                        if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                            $num_Field = mysqli_num_fields($this->proveedor->stmt);
                            $json .= "";
                            while ($result = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                                $jsonDetalle = "";
                                for ($index = 0; $index < $num_Field; $index++) {
                                    $fieldinfo = mysqli_fetch_field_direct($this->proveedor->stmt, $index);
                                    $jsonDetalle .= '"' . $fieldinfo->name . '":' . json_encode(utf8_encode($result[$fieldinfo->name])) . ',';
                                }
                                $cont++;
                                $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                            }
                            $json .= substr($jsondatos, 0, -1) . "" . "\n";

                            $tmp = '{"Estatus":"ok",';
                            $tmp .= '"totalCount":"' . $cont . '",';
                            $tmp .= '"mnj":"Procedure",';
                            $tmp .= '"resultados":[';
                            $tmp .= $json;
                            $tmp .= "]";
                            $tmp .= "}";
                        } else {
                            $tmp = '{"Estatus":"ok",';
                            $tmp .= '"mnj":"Sin resultados123",';
                            $tmp .= '"totalCount":"0"';
                            $tmp .= "}";
                        }
                    } else {
                        $tmp = '{"Estatus":"Fail",';
                        $tmp .= '"mnj":' . json_encode(utf8_encode($this->proveedor->error()));
                        $tmp .= "}";
                    }
                }
            }
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"mnj":"La consulta no contiene los parametros"';
            $tmp .= "}";
        }
        return $tmp;
    }
    
    public function selectDAOv2($params, $proveedor = null, $paginacion = null) {

        if ($params != "") {

            if ($proveedor == null) {
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            if (array_key_exists('fields', $params)) {
                if (array_key_exists('tables', $params)) {
                    $sql = "SELECT " . $params["fields"] . " FROM " . $params["tables"];
                } else {
                    $sql = "SELECT " . $params["fields"];
                }

                if (array_key_exists('conditions', $params)) {
                    $sql .= " WHERE " . $params["conditions"];
                }

                if (array_key_exists('groups', $params)) {
                    if (trim($params["groups"]) != "") {
                        $sql .= " GROUP BY " . $params["groups"];
                    }
                }

                if (array_key_exists('orders', $params)) {
                    if (trim($params["orders"]) != "") {
                        $sql .= " ORDER BY " . $params["orders"];
                    }
                }
                if ($paginacion != "" || $paginacion != null) {
                    $inicial = "";
                    if ($paginacion["paginacion"] == "true") {
                        if ($paginacion["pag"] > 0) {
                            $inicial = ($paginacion["pag"] - 1) * $paginacion["cantxPag"];
                        } else {
                            $inicial = 0;
                        }
                        $sql.=" LIMIT " . $inicial . "," . $paginacion["cantxPag"];
                    }
                }
//                echo "\n".$sql."\n";
                $FielsName = explode(",", $params["fields"]);
                $this->proveedor->execute($sql);
//                    $json = "";
                $respJson = array();
                $cont = 0;
                $jsondatos = "";
                $tmp = array();
                if (!$this->proveedor->error()) {
                    if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                        $num_Field = mysqli_num_fields($this->proveedor->stmt);
//                            $json .= "";
                        while ($result = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
//                                $jsonDetalle = "";
                            for ($index = 0; $index < $num_Field; $index++) {
                                $fieldinfo = mysqli_fetch_field_direct($this->proveedor->stmt, $index);
//                                    $jsonDetalle .= '"' . $fieldinfo->name . '":' . json_encode(utf8_encode($result[$fieldinfo->name])) . ',';
                                $respJson[$cont][$fieldinfo->name] = utf8_encode($result[$fieldinfo->name]);
                            }
                            $cont++;
//                                $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                        }
//                            $json .= substr($jsondatos, 0, -1) . "" . "\n";
//                            $tmp = '{"Estatus":"ok",';
//                            $tmp .= '"totalCount":"' . $cont . '",';
//                            $tmp .= '"mnj":"Consulta exitosa",';
//                            $tmp .= '"resultados":[';
//                            $tmp .= $json;
//                            $tmp .= "]";
//                            $tmp .= "}";
                        $tmp['Estatus'] = 'ok';
                        $tmp['totalCount'] = $cont;
                        $tmp['mnj'] = "Consulta exitosa";
                        $tmp['resultados'] = $respJson;
                    } else {
//                            $tmp = '{"Estatus":"ok",';
//                            $tmp .= '"mnj":"Sin resultados",';
//                            $tmp .= '"totalCount":"0"';
//                            $tmp .= "}";
                        $tmp['Estatus'] = 'ok';
                        $tmp['totalcount'] = '0';
                        $tmp['mnj'] = "Sin resultados";
                    }
                } else {
                    $tmp['Estatus'] = 'Fail';
                    $tmp['totalcount'] = '0';
                    $tmp['mnj'] = json_encode(utf8_encode($this->proveedor->error()));
//                        $tmp = '{"Estatus":"Fail",';
//                        $tmp .= '"mnj":' . json_encode(utf8_encode($this->proveedor->error()));
//                        $tmp .= "}";
                }

                $this->proveedor->stmt = $this->proveedor->free_result($this->proveedor->stmt);
                if ($proveedor == null) {
                    $this->proveedor->close();
                }
            } else {
//                    $tmp = '{"Estatus":"Fail",';
//                    $tmp .= '"mnj":"La consulta no contiene los parametros necesarios"';
//                    $tmp .= "}";
                $tmp['Estatus'] = 'Fail';
                $tmp['mnj'] = 'La consulta no contiene los parametros necesarios';
            }
        } else {
//            $tmp = '{"Estatus":"Fail",';
//            $tmp .= '"mnj":"La consulta no contiene los parametros"';
//            $tmp .= "}";
            $tmp['Estatus'] = 'Fail';
            $tmp['mnj'] = "La consulta no contiene los parametros";
        }

        return json_encode($tmp);
    }

}

//$SelectDAO = new SelectDAO();
//$params["fields"] = "A.idActuacion, A.cveAdscripcion, A.idCarpetaJudicial, A.numCarpetaJudicial, A.aniCarpetaJudicial, A.fechaRegistro,AF.idActuacionFirmada, AF.transferenciaFirma, AF.tokenFirma, AF.idRegistroFirma,TA.descTipoActuacion";
//$params["tables"] = "tblactuaciones A LEFT JOIN tblactuacionesfirmadas AF ON (AF.idActuacion = A.idActuacion AND AF.activo = 'S' AND AF.cveGrupo=72), tbltiposactuacionesmaterias tam, tbltiposactuaciones TA";
//$params["conditions"] = "tam.idTipoActuacionMateria = A.idTipoActuacionMateria AND TA.cveTipoActuacion = tam.cveTipoActuacion AND TA.cveTipoActuacion in (2,4,5,11,12,14) AND A.fechaRegistro >='2015-09-25 00:00:00' AND
//  A.fechaRegistro <= now() AND A.cveAdscripcion = 10087 ";
//$params["groups"] = "";
//$params["orders"] = "";
//
//$rs = $SelectDAO->selectDAO($params);
//print_r($rs);

//paginacion
//$paginacion["paginacion"] = "true"; paginacion
//$paginacion["pag"]=1;//pagina actual
//$paginacion["cantxPag"]=10;   //registros por pagina a mostrar
