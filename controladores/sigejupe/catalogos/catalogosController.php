<?php
session_start();
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
//include_once(dirname(__FILE__) . "/../../../../../librerias/xml/Xml.Class.php");

@$accion = $_POST["accion"];
@$tableName = $_POST["tableName"];
@$rowData = $_POST["rowData"];
@$primaryKey = $_POST["primaryKey"];
@$primaryKeyValue = $_POST["primaryKeyValue"];
@$relatedTable = $_POST["relatedTable"];
@$relatedID = $_POST["relatedID"];
@$noPagina = $_POST["noPagina"];
@$id = $_POST["id"];
@$Fields = $_POST["Fields"];


switch ($accion) {
    case 'getCatalogTables':
        $dataBaseName = 'htsj_sigejupe';
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $sql = 'SHOW TABLES FROM '.$dataBaseName;
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->stmt->num_rows >0) {
                $cont = 0;
                while ($row = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $result[$cont] = $row[0];
                    $cont++;
                }
                $tmp = array('estatus' => 'success', 
                    'result' => $result
                );
                echo json_encode($tmp);
                $proveedor->close();
                exit();
            }else{
                // no existen tablas
                $tmp = array('estatus' => 'error', 
                        'msg' => 'No se encontraron tablas en la base de datos.'
                    );
                echo json_encode($tmp);
                exit();
            }
        }else{
            // error al obtener
            $tmp = array('estatus' => 'error', 
                    'msg' => 'Error al obtener las tablas de la base de datos '.$dataBaseName
                );
            echo json_encode($tmp);
            $proveedor->close();
            exit();
        }
        break;
    case 'getTableStructure':
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $sql = "desc ".$tableName;
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->stmt->num_rows >0) {
                //print_r($proveedor);
                $cont = 0;
                while ($row = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $result[$cont]['fieldName'] = $row['Field'];
                    $result[$cont]['fieldKey'] = $row['Key'];
                    $cont++;
                }
                $tmp = array('estatus' => 'success', 
                    'result' => $result
                );
                echo json_encode($tmp);
            }else{
                // no hay resultados con la tabla especificiada
                $tmp = array('estatus' => 'error', 
                        'msg' => 'No se pudo leer la tabla '.$tableName.' de la base de datos.'
                    );
                echo json_encode($tmp);
            }
        }else{
            // no existe la tabla
            $tmp = array('estatus' => 'error', 
                    'msg' => 'La tabla '.$tableName.' no existe en la base de datos.'
                );
            echo json_encode($tmp);
        }
        $proveedor->close();
        break;
    case 'loadCatalogo':
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $sql = "SHOW FULL COLUMNS FROM ".$tableName;
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->stmt->num_rows >0) {
                $cont = 0;
                // estructura (encabezados de la tabla)
                while ($row = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    // obtener tabla de referencia si el campo es una clave foranea
                    if ($row['Key'] == 'MUL') {
                        // la consult anterior dice que la fila actual es una llave foranea, hay que verificarla primero
                        $proveedortmp = "";
                        $proveedortmp = new Proveedor("mysql", "sigejupe");
                        $proveedortmp->connect();
                        $sql = "SELECT REFERENCED_TABLE_NAME AS tabla_destino FROM information_schema.key_column_usage WHERE constraint_schema = 'htsj_sigejupe' AND TABLE_NAME = '".$tableName."' AND REFERENCED_COLUMN_NAME = '".$row['Field']."'";
                        $proveedortmp->execute($sql);
                        if (!$proveedortmp->error()) {
                            if ($proveedortmp->stmt->num_rows >0) {
                                $resultReferencedTable = $proveedortmp->fetch_array($proveedortmp->stmt, 0);
                                $referencedTable = $resultReferencedTable[0];
                                $row_key = 'MUL';
                            }else{
                                // no se encontro la tabla de referencia
                                $referencedTable = '';
                                $row_key = '';
                            }
                        }else{
                            // error al buscar la tabla de referencia
                            $tmp = array('estatus' => 'error', 
                                    'msg' => 'Ocurrio un error al buscar la tabla de referencia del campo '.$row['Field']
                                );
                            echo json_encode($tmp);
                            $proveedor->close();
                            $proveedortmp->close();
                            exit();
                        }
                    }else{
                        $referencedTable = '';
                        $row_key = $row['Key'];
                    }

                    $structure[$cont]['field'] = $row['Field'];
                    $structure[$cont]['type'] = $row['Type'];
                    $structure[$cont]['null'] = $row['Null'];
                    $structure[$cont]['key'] = $row_key;
                    $structure[$cont]['referencedTable'] = $referencedTable;
                    $structure[$cont]['comment'] = $row['Comment'];
                    $cont++;
                }
                $proveedor->close();

                // array con encabezados de la tabla
                $encabezados = array();
                foreach ($structure as $s) {
                    array_push($encabezados, $s['field']);
                }

                // registros de la tabla
                $proveedor = "";
                $proveedor = new Proveedor("mysql", "sigejupe");
                $proveedor->connect();
                $sql = "SELECT * FROM ".$tableName;
                $proveedor->execute($sql);

                if (!$proveedor->error()) {
                    if ($proveedor->stmt->num_rows >0) {
                        $registrosTotales = $proveedor->stmt->num_rows;
                        $noRegistrosPorPagina = 50;
                        $noTotalDePaginas = ceil($registrosTotales / $noRegistrosPorPagina);
                        if ($noPagina && $noPagina !=1) {
                            // se recibio numero de pagina
                            $desde = ($noPagina - 1) * $noRegistrosPorPagina;
                            $limit = ' LIMIT '.$desde.','.$noRegistrosPorPagina;
                            $pag_actual = $noPagina;
                        }else{
                            // no se recibe numero de pagina
                            $limit = ' LIMIT '.$noRegistrosPorPagina;
                            $pag_actual = 1;
                        }
                        $proveedor = "";
                        $proveedor = new Proveedor("mysql", "sigejupe");
                        $proveedor->connect();
                        $sql = "SELECT * FROM ".$tableName.$limit;
                        $proveedor->execute($sql);
                        $cont = 0;
                        while ($row = $proveedor->fetch_array($proveedor->stmt, 0)) {
                            $result[$cont] = $row;
                            $cont++;
                        }
                        // codificar utf8 y dar forma a los registros finales
                        $registros = array();
                        foreach ($result as $key => $row) {
                            foreach ($row as $key2 => $value) {
                                if (in_array($key2, $encabezados) && $key2 != '0') {
                                    $registros[$key][$key2] = utf8_encode($value);
                                }
                            }
                        }

                        $tmp = array('estatus' => 'success', 
                                'encabezados' => $structure,
                                'registros' => $registros,
                                'tableName' => $tableName,
                                'total_registros' => $registrosTotales,
                                'total_paginas' => $noTotalDePaginas,
                                'pagina_actual' => $pag_actual
                            );

                        echo json_encode($tmp);
                        $proveedor->close();
                        exit();
                    }else{
                        // tabla vacia
                        $tmp = array('estatus' => 'success', 
                                'encabezados' => $structure,
                                'tableName' => $tableName,
                                'total_registros' => 0,
                                'total_paginas' => 1
                            );
                        echo json_encode($tmp);
                        $proveedor->close();
                        exit();
                    }
                }else{
                    // error al seleccionar
                    $tmp = array('estatus' => 'error', 
                            'msg' => 'Error al seleccionar el contenido de la tabla.'
                        );
                    echo json_encode($tmp);
                    $proveedor->close();
                    exit();
                }
            }else{
                // no hay resultados con la tabla especificiada
                $tmp = array('estatus' => 'error', 
                        'msg' => 'No se pudo leer la tabla '.$tableName.' de la base de datos.'
                    );
                echo json_encode($tmp);
                $proveedor->close();
                exit();
            }
        }else{
            // no existe la tabla
            $tmp = array('estatus' => 'error', 
                    'msg' => 'La tabla '.$tableName.' no existe en la base de datos.'
                );
            echo json_encode($tmp);
        }
        $proveedor->close();
        break;

    case 'saveRow':
        if ($primaryKeyValue != '') {
            // update
            $campos = '';
            $values = '';
            $date = array();
            foreach ($rowData as $key => $value) {
                //$campos .= $key.',';     //desTipoActuacion,activo,fechaRegistro,fechaActualizacion,
                if ($key == 'fechaActualizacion') {
                    // se obtiene la fecha de la base de datos
                    $sql = 'SELECT NOW();';
                    $proveedor = "";
                    $proveedor = new Proveedor("mysql", "sigejupe");
                    $proveedor->connect();
                    $proveedor->execute($sql);
                    if (!$proveedor->error()) {
                        $date = $proveedor->fetch_array($proveedor->stmt, 0);
                        $value = $date[0];
                        $proveedor->close();
                    }else{
                        $tmp = array('estatus' => 'error', 
                                'msg' => 'No se pudo obtener la fecha de la base de datos.'
                            );
                        echo json_encode($tmp);
                        $proveedor->close();
                        exit();
                    }
                }
                $campos .= $key." = "."'".utf8_decode($value)."',";
                //$values .= $value.',';   //PROMOCIONES,S,2015-09-11 12:23:20,2015-09-11 12:23:20,
            }
            // verificar si en el registo existio el campo 'fechaActualizacion', de lo contrario regresar fecha = ''
            if (!$date) {
                $date[0] = '';
            }
            // quitar coma final de campos
            $campos = substr($campos, 0, -1);
            //$values = substr($values, 0, -1);
            $sql = 'UPDATE '.$tableName.' SET '.$campos.' WHERE '.$primaryKey.' = '.$primaryKeyValue;
            $proveedor = "";
            $proveedor = new Proveedor("mysql", "sigejupe");
            $proveedor->connect();
            $proveedor->execute($sql);
            if (!$proveedor->error()) {
                $tmp = array('estatus' => 'success', 
                        'msg' => 'Se actualizo el registro.',
                        'dateActual' => $date[0]
                    );
                echo json_encode($tmp);
                $proveedor->close();
                exit();
            }else{
                $tmp = array('estatus' => 'error', 
                        'msg' => 'Error al actualizar el registro, por favor intenta nuevamente.'
                    );
                echo json_encode($tmp);
                $proveedor->close();
                exit();
            }
        }else{
            // insert
            $campos = '';
            $values = '';
            $date = array();
            foreach ($rowData as $key => $value) {
                $campos .= $key.',';     //desTipoActuacion,activo,fechaRegistro,fechaActualizacion,
                if ($key == 'fechaActualizacion' || $key == 'fechaRegistro') {
                    // se obtiene la fecha de la base de datos
                    $sql = 'SELECT NOW();';
                    $proveedor = "";
                    $proveedor = new Proveedor("mysql", "sigejupe");
                    $proveedor->connect();
                    $proveedor->execute($sql);
                    if (!$proveedor->error()) {
                        $date = $proveedor->fetch_array($proveedor->stmt, 0);
                        $value = $date[0];
                        $proveedor->close();
                    }else{
                        $tmp = array('estatus' => 'error', 
                                'msg' => 'No se pudo obtener la fecha de la base de datos.'
                            );
                        echo json_encode($tmp);
                        $proveedor->close();
                        exit();
                    }
                }
                //$campos .= $key." = "."'".utf8_decode($value)."',";
                $values .= '"'.utf8_decode($value).'",';   //PROMOCIONES,S,2015-09-11 12:23:20,2015-09-11 12:23:20,
            }
            // quitar coma final de valores y campos
            $campos = substr($campos, 0, -1);
            $values = substr($values, 0, -1);
            $sql = 'INSERT INTO '.$tableName.' ('.$primaryKey.','.$campos.') VALUES (null,'.$values.')';
            $proveedor = "";
            $proveedor = new Proveedor("mysql", "sigejupe");
            $proveedor->connect();
            $proveedor->execute($sql);
            if (!$proveedor->error()) {
                $tmp = array('estatus' => 'success', 
                        'msg' => 'Se inserto el nuevo registro.',
                        'lastID' => $proveedor->lastID(),
                        'insertedDate' => $date[0]
                    );
                echo json_encode($tmp);
                $proveedor->close();
                exit();
            }else{
                $tmp = array('estatus' => 'error', 
                        'msg' => 'Error al insertar el registro, por favor intenta nuevamente.'
                    );
                echo json_encode($tmp);
                $proveedor->close();
                exit();
            }
        }
        break;

    case 'eraseRow':
        $sql = 'DELETE FROM '.$tableName.' WHERE '.$primaryKey.' = '.$primaryKeyValue;
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            $tmp = array('estatus' => 'success', 
                    'msg' => 'Se elimino el registro.'
                );
            echo json_encode($tmp);
            $proveedor->close();
            exit();
        }else{
            $tmp = array('estatus' => 'error', 
                    'msg' => 'Error al eliminar el registro, por favor intenta nuevamente.'
                );
            echo json_encode($tmp);
            $proveedor->close();
            exit();
        }
        break;

    case 'loadRelatedCombo':
        $sql = 'SELECT * FROM '.$relatedTable;
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->stmt->num_rows >0) {
                $cont = 0;
                while ($row = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $result[$cont] = $row;
                    $cont++;
                }
                // codificar utf8 y dar forma a los registros finales
                $registros = array();
                
                foreach ($result as $key => $row) {
                    $desEncontrada = false;
                    foreach ($row as $key2 => $value) {
                        // seleccionar solo los indices alfanumericos

                        if (!is_numeric($key2)) {
                            // valor
                            if ( strtolower($key2) == strtolower($relatedID) ) {
                                $registros[$key]['valor'] = utf8_encode($value);
                            }
                            // descripcion
                            if (preg_match("/^[dD]es/", $key2) && $desEncontrada == false) {
                                $registros[$key]['descripcion'] = utf8_encode($value);
                                $desEncontrada = true;
                            }
                        }
                    }
                }

                $tmp = array('estatus' => 'success', 
                        'result' => $registros
                    );
                echo json_encode($tmp);
                $proveedor->close();
                exit();

            }else{
                // la tabla esta vacia
                $proveedor->close();
                exit();
            }

        }else{
            $tmp = array('estatus' => 'error', 
                    'msg' => 'Error al seleccionar la tabla relacionada con el campo '.$relatedID
                );
            echo json_encode($tmp);
            $proveedor->close();
            exit();
        }
        break;

    case "getTables":
        $json = "";
        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();
        $sql = "select cveCatalogo, desCatalogo from tblcatalogos WHERE activo='S' ORDER BY desCatalogo";
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                while ($tablas = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $arr[count($arr) + 1] = array("name" => $tablas["desCatalogo"]);
                }
            }
        } else {
            
        }

        $json = json_encode($arr);

        if (count($arr) > 0) {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            foreach ($arr as $value) {
                $tmp.= json_encode($value) . ",";
            }
            $tmp = substr($tmp, 0, -1);
            $tmp .= "]}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]}";
        }


        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);

        echo $tmp;
        break;

    case "getTableContent":

        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();
        $sql = "DESCRIBE " . $table;
        $proveedor->execute($sql);
        $json = "";
        $jsondatos = "";
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $num_Field = mysqli_num_fields($proveedor->stmt);
                $json .= "";
                while ($describe = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $arrValues = array();
                    $jsonDetalle = "";
                    for ($index = 0; $index < $num_Field; $index++) {
                        $fieldinfo = mysqli_fetch_field_direct($proveedor->stmt, $index);
                        $jsonDetalle .= '"' . $fieldinfo->name . '":"' . $describe[$fieldinfo->name] . '",';
                    }
                    $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                }
                $json .= substr($jsondatos, 0, -1) . "" . "\n";
            }
        } else {
            
        }

        if ($json != "") {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $detallestbl = "";
            $detallestbl .= getComments($table);
            if ($detallestbl != "") {
                $tmp .= "," . $detallestbl;
            }
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        }


        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);

        echo $tmp;

        break;


    case "guardar":

        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();

        $sqlAux = "";
        $Values = "";
        $values = "";
        $valuesUpdate = "";
        $valuesWHERE = "";
        $FielsName = split(",", $params);

        for ($i = 1; $i < count($FielsName); $i++) {
            $param = $FielsName[$i];
            $parametro = $_POST[$param];

            $sqlAux .= substr($param, 3, strlen($param)) . ",";
            $values .= " '" . utf8_decode($parametro) . "',";

            $valuesUpdate .= " " . substr($param, 3, strlen($param)) . " = '" . utf8_decode($parametro) . "',";
        }

        $sqlAux = substr($sqlAux, 0, -1);
        $values = substr($values, 0, -1);
        $valuesUpdate = substr($valuesUpdate, 0, -1);

        if (isset($_POST[$FielsName[0]]) && ($_POST[$FielsName[0]] == "")) {
            $sql = "INSERT INTO " . $table . " (" . $sqlAux . ") VALUES ( " . $values . " ) ";
        } else {
            $sql = "UPDATE " . $table . " SET " . $valuesUpdate . " WHERE " . substr($FielsName[0], 3, strlen($FielsName[0])) . " = " . $_POST[$FielsName[0]] . " ";
        }



        $proveedor->execute($sql);
        $json = "";
        $jsondatos = "";
        if (!$proveedor->error()) {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        }

        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);
//
        echo $tmp;
        break;
    case "consulta":

        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();


        $comentarios = getComments($table);
        $tblsAux = "";
        $CamposAux = "";
        if ($comentarios != "") {
            $jsonComentarios = json_decode("{" . $comentarios . "}");
            $cont = 1;
            if ($jsonComentarios->estructura->referenciasCmb != "") {
                foreach ($jsonComentarios->estructura->referenciasCmb as $comentario) {
                    $tblsAux .= ", " . $comentario->tabla . " tbl" . $cont . " ";
                    $CamposAux .= " AND " . "tbl" . $cont . "." . $comentario->campo . " = Tabla." . $comentario->campo . " ";
                    $cont++;
                }
            }
        }


        $sql = "SELECT * FROM " . $table . " Tabla " . $tblsAux . " WHERE 1 " . $CamposAux;

        $sqlAux = "";

        $FielsName = split(",", $params);

        for ($i = 0; $i < count($FielsName); $i++) {
            $param = $FielsName[$i];

            @$parametro = $_POST[$param];

            if (trim($parametro) != "") {
                $sqlAux .= " AND Tabla." . substr($param, 3, strlen($param)) . "= '" . utf8_decode($parametro) . "' ";
            }
        }

        $sql = $sql . $sqlAux;

        $proveedor->execute($sql . $sqlAux);
        $json = "";
        $jsondatos = "";
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
//                $num_Field = mysql_num_fields($proveedor->stmt);
                $num_Field = mysqli_num_fields($proveedor->stmt);
                $json .= "";
                while ($result = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $arrValues = array();
                    $jsonDetalle = "";

                    for ($index = 0; $index < $num_Field; $index++) {
                        $fieldinfo = mysqli_fetch_field_direct($proveedor->stmt, $index);
                        $jsonDetalle .= '"' . $fieldinfo->name . '":' . json_encode(utf8_encode($result [$fieldinfo->name])) . ',';
                    }
                    $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                }
                $json .= substr($jsondatos, 0, -1) . "" . "\n";
            }
        } else {
            
        }

        if ($json != "") {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        }


        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);

        echo $tmp;

        break;

    case "consultaId":

        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();
        $sql = "SELECT * FROM " . $table . " WHERE 1 ";

        $sqlAux = "";

        $FielsName = split(",", $Fields);

        $param = $FielsName[0];
        $parametro = $id;

        if (trim($parametro) != "") {
            $sqlAux .= " AND " . $param . "= '" . $parametro . "' ";
        }


        $sql = $sql . $sqlAux;

        $proveedor->execute($sql . $sqlAux);
        $json = "";
        $jsondatos = "";
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
//                $num_Field = mysql_num_fields($proveedor->stmt);
                $num_Field = mysqli_num_fields($proveedor->stmt);
                $json .= "";
                while ($result = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $arrValues = array();
                    $jsonDetalle = "";

                    for ($index = 0; $index < $num_Field; $index++) {
//                        $fieldName = mysql_field_name($proveedor->stmt, $index);
//                        $jsonDetalle .= '"' . $fieldName . '":' . json_encode(utf8_encode($result[$fieldName])) . ',';                                               
                        $fieldinfo = mysqli_fetch_field_direct($proveedor->stmt, $index);
                        $jsonDetalle .= '"' . $fieldinfo->name . '":' . json_encode(utf8_encode($result [$fieldinfo->name])) . ',';
                    }
                    $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                }
                $json .= substr($jsondatos, 0, -1) . "" . "\n";
            }
        } else {
            
        }

        if ($json != "") {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        }


        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);

        echo $tmp;

        break;

    case "generaCombo":

        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();
        $sql = "SELECT * FROM " . $table . " WHERE 1 ";

        $proveedor->execute($sql);
        $json = "";
        $jsondatos = "";
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $num_Field = mysqli_num_fields($proveedor->stmt);
                $json .= "";
                while ($result = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $arrValues = array();
                    $jsonDetalle = "";

                    for ($index = 0; $index < $num_Field; $index++) {
                        $fieldinfo = mysqli_fetch_field_direct($proveedor->stmt, $index);
                        $jsonDetalle .= '"' . $fieldinfo->name . '":' . json_encode(utf8_encode($result [$fieldinfo->name])) . ',';
                    }
                    $jsondatos .= "\n" . '{' . substr($jsonDetalle, 0, -1) . '},';
                }
                $json .= substr($jsondatos, 0, -1) . "" . "\n";
            }
        }

        if ($json != "") {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        }


        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);

        echo $tmp;

        break;

    case "elimina":

        $arr = array();
        $proveedor = "";
        $proveedor = new Proveedor("mysql", "electronico");
        $proveedor->connect();

        $sqlAux = "";

        $FielsName = split(",", $Fields);

        $param = $FielsName[0];
        $parametro = $id;

        if (trim($parametro) != "") {
            $sql = "DELETE FROM " . $table . " WHERE  ";
            $sqlAux .= " " . $param . " = '" . $parametro . "' ";
        }


        $sql = $sql . $sqlAux;

        $proveedor->execute($sql);
        $json = "";
        $jsondatos = "";
        if (!$proveedor->error()) {
            $tmp = '{"Estatus":"OK",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        } else {
            $tmp = '{"Estatus":"Fail",';
            $tmp .= '"resultados":[';
            $tmp .= "]}";
        }

        $proveedor->close();
        $proveedor->stmt = $proveedor->free_result($proveedor->stmt);

        echo

        $tmp;

        break;
}

function

getValues($param) {
    
}

function getComments($table) {

    $arr = array();
    $proveedor = "";
    $proveedor = new Proveedor("mysql", "electronico");
    $proveedor->connect();
    $sql = "select estructuraJson from tblcatalogos WHERE desCatalogo ='" . $table . "'";
    $proveedor->execute($sql);
    $json = "";

    if (!$proveedor->error()) {
        if ($proveedor->rows($proveedor->stmt) > 0) {
            $num_Field = mysqli_num_fields($proveedor->stmt);
            $json .= "";
            $describe = $proveedor->fetch_array($proveedor->stmt, 0);
            $json .= $describe["estructuraJson"];
        }
    } else {
        
    }

    $proveedor->close();
    $proveedor->stmt = $proveedor->free_result($proveedor->stmt);
    return $json;
}
