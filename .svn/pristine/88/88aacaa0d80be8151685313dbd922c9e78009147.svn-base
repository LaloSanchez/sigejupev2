<?php

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../aplicacion/configuracion.php");

class GenericoDAO {

    private $proveedor;
    private $table;

    public function __construct($tabla) {
        $this->proveedor = new Proveedor(DEFECTO_GESTOR, DEFECTO_BD);
        $logger = new Logger("/../../../logs/", "GenericoDAO");
        $logger->w_onError("**********COMIENZA DAO GENERICO $tabla**********");
        $this->table = $tabla;
    }

    public function selectTable($d = "", $totales = false, $tmpSql = "") {
        $tmp = "";
        $this->proveedor->connect();
        if (!isset($d["campos"]) && ($tmpSql == "")) {
            $sql = "SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA ";
            $sql.=" = '" . DEFECTO_NAME_BD . "' AND TABLE_NAME = '" . $this->table . "' ";
            $sql .=" Order By ORDINAL_POSITION ASC";

            $logger = new Logger("/../../../logs/", "GenericoDAO");
            $logger->w_onError($sql);
            $this->proveedor->execute($sql);

            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    $campos = array();
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $campos[] = array("COLUMN_NAME" => $row["COLUMN_NAME"],
                            "IS_NULLABLE" => $row["IS_NULLABLE"],
                            "DATA_TYPE" => $row["DATA_TYPE"],
                            "COLUMN_KEY" => $row["COLUMN_KEY"],
                            "EXTRA" => $row["EXTRA"],
                            "COLUMN_COMMENT" => $row["COLUMN_COMMENT"]);
                    }

                    $sql = "SELECT ";
                    for ($index = 0; $index < count($campos); $index++) {
                        $sql .=$campos[$index]["COLUMN_NAME"] . " ,";
                    }
                    $sql = substr($sql, 0, -1) . " FROM " . $this->table;
                    if (isset($d["where"])) {
                        $sql .=" WHERE ";
                        foreach ($d["where"] as $key => $value) {
                            $sql.=" " . $key . " ='" . $value . "' And";
                        }
                        $sql = substr($sql, 0, -3);
                    }
                }
            } else {
                $logger = new Logger("/../../../logs/", "GenericoDAO");
                $logger->w_onError("Error: " . $this->proveedor->error());
            }
        } else if ($tmpSql == "") {
            $campos = explode(",", $d["campos"]);
            if (count($campos) > 0) {
                $c = array();
                for ($x = 0; $x < count($campos); $x++) {
                    $c[] = array("COLUMN_NAME" => $campos[$x]);
                }
                $campos = $c;
            }

            $sql = "SELECT ";
            $sql .=$d["campos"];
            $sql .=" FROM " . $this->table;
            if (isset($d["where"])) {
                $sql .=" WHERE ";
                foreach ($d["where"] as $key => $value) {
                    $sql.=" " . $key . " ='" . $value . "' And";
                }
                $sql = substr($sql, 0, -3);
            }
        } else if ($tmpSql != "") {
            $sql = $tmpSql;
        }

        $this->proveedor->free_result($this->proveedor->stmt);

        $this->proveedor->execute($sql);
        $this->proveedor->rows($this->proveedor->stmt);
        if (!$this->proveedor->error()) {

            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                $tmp = array();
                $contador = 0;

                $columns = ($this->proveedor->fetch_field($this->proveedor->stmt, 0));

                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    if ($tmpSql == "") {
                        $record = array();
                        for ($i = 0; $i < count($campos); $i++) {
                            for ($y = 0; $y < count($columns); $y++) {
                                if ($campos[$i]["COLUMN_NAME"] == $columns[$y]->name) {
                                    $record[$campos[$i]["COLUMN_NAME"]] = $row[$campos[$i]["COLUMN_NAME"]];
                                    break;
                                }
                            }
                        }
                    } else {
                        for ($y = 0; $y < count($columns); $y++) {
                            $record[$columns[$y]->name] = $row[$columns[$y]->name];
                        }
                    }

                    $tmp[$contador] = $record;
                    $contador++;
                }

                $jsonDto = new Encode_JSON();
                $tmp = $jsonDto->encode($tmp);
            } else {
                $jsonDto = new Encode_JSON();
                $tmp = $jsonDto->encode(array("OK" => "Sin resultados"));
            }
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => $this->proveedor->error()));
        }

        $this->proveedor->free_result($this->proveedor->stmt);
        $this->proveedor->close();

        return $tmp;
    }

    public function insertTable($d = "", $tmpSql = "") {
        $tmp = "";
        $this->proveedor->connect();

        if (isset($d["values"])) {
            $sql = "SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA ";
            $sql.=" = '" . DEFECTO_NAME_BD . "' AND TABLE_NAME = '" . $this->table . "' ";
            $sql .=" Order By ORDINAL_POSITION ASC";

            $logger = new Logger("/../../../logs/", "GenericoDAO");
            $logger->w_onError($sql);
            $this->proveedor->execute($sql);

            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    $campos = array();
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $campos[] = array("COLUMN_NAME" => $row["COLUMN_NAME"],
                            "IS_NULLABLE" => $row["IS_NULLABLE"],
                            "COLUMN_KEY" => $row["COLUMN_KEY"],
                            "DATA_TYPE" => $row["DATA_TYPE"],
                            "EXTRA" => $row["EXTRA"],
                            "COLUMN_COMMENT" => $row["COLUMN_COMMENT"]);
                    }

                    $sql = "INSERT INTO " . $this->table . "(";
                    for ($index = 0; $index < count($campos); $index++) {
                        if (strtoupper($campos[$index]["EXTRA"]) != "AUTO_INCREMENT") {
                            $sql .=$campos[$index]["COLUMN_NAME"] . " ,";
                        }
                    }

                    $sql = substr($sql, 0, -1) . ") VALUES (";

                    if (isset($d["values"])) {
                        for ($index = 0; $index < count($campos); $index++) {
                            foreach ($d["values"] as $key => $value) {
                                if ($campos[$index]["COLUMN_NAME"] == $key) {
                                    if ($value != "now()") {
                                        $sql.="'" . $value . "',";
                                    } else {
                                        $sql.=" " . $value . ",";
                                    }
                                    break;
                                }
                            }
                        }
                        $sql = substr($sql, 0, -1);
                        $sql.=")";
                    }
                }
            } else {
                $logger = new Logger("/../../../logs/", "GenericoDAO");
                $logger->w_onError("Error: " . $this->proveedor->error());
            }
        } else if ($tmpSql != "") {
            $sql = $tmpSql;
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => "No ingreso los parametros correctos"));
            return $tmp;
            exit;
        }

        $this->proveedor->free_result($this->proveedor->stmt);
        $this->proveedor->execute($sql);
        if (!$this->proveedor->error()) {
            for ($index = 0; $index < count($campos); $index++) {
                if (strtoupper($campos[$index]["COLUMN_KEY"]) == "PRI") {
                    $d = array("where" => array($campos[$index]["COLUMN_NAME"] => $this->proveedor->lastID()));
                    break;
                }
            }
            $tmp = $this->selectTable($d);
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => $this->proveedor->error()));
        }

        $this->proveedor->free_result($this->proveedor->stmt);
        $this->proveedor->close();

        return $tmp;
    }

    public function updateTable($d = "", $tmpSql = "") {
        $tmp = "";
        $this->proveedor->connect();

        if (isset($d["values"]) && ($tmpSql == "")) {
            $sql = "SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA ";
            $sql.=" = '" . DEFECTO_NAME_BD . "' AND TABLE_NAME = '" . $this->table . "' ";
            $sql .=" Order By ORDINAL_POSITION ASC";

            $logger = new Logger("/../../../logs/", "GenericoDAO");
            $logger->w_onError($sql);
            $this->proveedor->execute($sql);

            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    $campos = array();
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $campos[] = array("COLUMN_NAME" => $row["COLUMN_NAME"],
                            "IS_NULLABLE" => $row["IS_NULLABLE"],
                            "COLUMN_KEY" => $row["COLUMN_KEY"],
                            "DATA_TYPE" => $row["DATA_TYPE"],
                            "EXTRA" => $row["EXTRA"],
                            "COLUMN_COMMENT" => $row["COLUMN_COMMENT"]);
                    }

                    $sql = "UPDATE " . $this->table . " set ";
                    if (isset($d["values"])) {
                        for ($index = 0; $index < count($campos); $index++) {
                            foreach ($d["values"] as $key => $value) {
                                if ($campos[$index]["COLUMN_NAME"] == $key) {
                                    if ($value != "now()") {
                                        $sql.=" " . $key . "='" . $value . "',";
                                    } else {
                                        $sql.=" " . $key . "=" . $value . ",";
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    $sql = substr($sql, 0, -1) . "";

                    if (isset($d["where"])) {
                        $sql .=" WHERE ";
                        foreach ($d["where"] as $key => $value) {
                            $sql.=" " . $key . " ='" . $value . "' And";
                        }
                        $sql = substr($sql, 0, -3);
                    }
                }
            } else {
                $logger = new Logger("/../../../logs/", "GenericoDAO");
                $logger->w_onError("Error: " . $this->proveedor->error());
            }
        } else if ($tmpSql != "") {
            $sql = $tmpSql;
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => "No ingreso los parametros correctos"));
            return $tmp;
            exit;
        }

        $this->proveedor->free_result($this->proveedor->stmt);
//        echo $sql;
        $this->proveedor->execute($sql);
        if (!$this->proveedor->error()) {
//            for ($index = 0; $index < count($campos); $index++) {
//                if (strtoupper($campos[$index]["COLUMN_KEY"]) == "PRI") {
//                    $d = array("where" => array($campos[$index]["COLUMN_NAME"] => $this->proveedor->lastID()));
//                    break;
//                }
//            }
            $tmp = $this->selectTable($d);
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => $this->proveedor->error()));
        }

        $this->proveedor->free_result($this->proveedor->stmt);
        $this->proveedor->close();

        return $tmp;
    }

    public function deleteTable($d = "", $tmpSql = "") {
        $tmp = "";
        $this->proveedor->connect();

        if (isset($d["where"]) && ($tmpSql == "")) {
            $sql = "SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA ";
            $sql.=" = '" . DEFECTO_NAME_BD . "' AND TABLE_NAME = '" . $this->table . "' ";
            $sql .=" Order By ORDINAL_POSITION ASC";

            $logger = new Logger("/../../../logs/", "GenericoDAO");
            $logger->w_onError($sql);
            $this->proveedor->execute($sql);

            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    $campos = array();
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $campos[] = array("COLUMN_NAME" => $row["COLUMN_NAME"],
                            "IS_NULLABLE" => $row["IS_NULLABLE"],
                            "COLUMN_KEY" => $row["COLUMN_KEY"],
                            "DATA_TYPE" => $row["DATA_TYPE"],
                            "EXTRA" => $row["EXTRA"],
                            "COLUMN_COMMENT" => $row["COLUMN_COMMENT"]);
                    }

                    $sql = "DELETE FROM " . $this->table . " ";
                    if (isset($d["where"])) {
                        $sql .=" WHERE ";
                        foreach ($d["where"] as $key => $value) {
                            $sql.=" " . $key . " ='" . $value . "' And";
                        }
                        $sql = substr($sql, 0, -3);
                    }
                }
            } else {
                $logger = new Logger("/../../../logs/", "GenericoDAO");
                $logger->w_onError("Error: " . $this->proveedor->error());
            }
        } else if ($tmpSql != "") {
            $sql = $tmpSql;
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => "No ingreso los parametros correctos"));
            return $tmp;
            exit;
        }

        $this->proveedor->free_result($this->proveedor->stmt);

        $this->proveedor->execute($sql);
        if (!$this->proveedor->error()) {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("OK" => "Registro eliminado correctamente"));
        } else {
            $jsonDto = new Encode_JSON();
            $tmp = $jsonDto->encode(array("Error" => $this->proveedor->error()));
        }

        $this->proveedor->free_result($this->proveedor->stmt);
        $this->proveedor->close();

        return $tmp;
    }

    public function fielsTable($t = false) {
        $tmp = "";
        $this->proveedor->connect();
        if (!isset($d["campos"]) && ($tmpSql == "")) {
            $sql = "SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA ";
            $sql.=" = '" . DEFECTO_NAME_BD . "' AND TABLE_NAME = '" . $this->table . "' " . ((!$t) ? " AND COLUMN_COMMENT <> '' " : "") . " ";
            $sql .=" GROUP BY COLUMN_NAME ";
            $sql .=" Order By ORDINAL_POSITION ASC";

            $logger = new Logger("/../../../logs/", "GenericoDAO");
            $logger->w_onError($sql);
            $this->proveedor->execute($sql);

            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    $campos = array();
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $campos[] = array("COLUMN_NAME" => $row["COLUMN_NAME"],
                            "ORDINAL_POSITION" => $row["ORDINAL_POSITION"],
                            "COLUMN_DEFAULT" => $row["COLUMN_DEFAULT"],
                            "IS_NULLABLE" => $row["IS_NULLABLE"],
                            "DATA_TYPE" => $row["DATA_TYPE"],
                            "MAX" => ((substr($row["COLUMN_TYPE"], strlen($row['DATA_TYPE']) + 1, -1) == "") ? strlen($row["COLUMN_TYPE"]) : substr($row["COLUMN_TYPE"], strlen($row['DATA_TYPE']) + 1, -1)),
                            "COLUMN_KEY" => $row["COLUMN_KEY"],
                            "EXTRA" => $row["EXTRA"],
                            "TABLE_NAME" => $row["TABLE_NAME"],
                            "COLUMN_COMMENT" => $row["COLUMN_COMMENT"]);
                    }
                }
            } else {
                $logger = new Logger("/../../../logs/", "GenericoDAO");
                $logger->w_onError("Error: " . $this->proveedor->error());
            }

            $r["q"] = $sql;

            $this->proveedor->free_result($this->proveedor->stmt);

            if (count($campos) > 0) {
                $sql = "SELECT * FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE WHERE TABLE_NAME = '" . $this->table . "' And TABLE_SCHEMA='" . DEFECTO_NAME_BD . "' And REFERENCED_TABLE_NAME is not null";

                $this->proveedor->execute($sql);

                if (!$this->proveedor->error()) {
                    if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                        $referencias = array();
                        while ($ref = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                            $referencias[] = array("COLUMN_NAME" => $ref["COLUMN_NAME"],
                                "TABLE_NAME" => $ref["TABLE_NAME"],
                                "REFERENCED_TABLE_NAME" => $ref["REFERENCED_TABLE_NAME"],
                                "REFERENCED_COLUMN_NAME" => $ref["REFERENCED_COLUMN_NAME"]);
                        }

                        for ($index = 0; $index < count($referencias); $index++) {
                            $sql = "SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA ";
                            $sql.=" = '" . DEFECTO_NAME_BD . "' AND TABLE_NAME = '" . $referencias[$index]["REFERENCED_TABLE_NAME"] . "' And COLUMN_NAME='" . $referencias[$index]["REFERENCED_COLUMN_NAME"] . "' ";
                            $sql .=" Order By ORDINAL_POSITION ASC";

                            $this->proveedor->execute($sql);

                            if (!$this->proveedor->error()) {
                                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                                    $ref = $this->proveedor->fetch_array($this->proveedor->stmt, 0);
                                    $campos[] = array("COLUMN_NAME" => "REFERENCIA",
                                        "ORDINAL_POSITION" => $ref["ORDINAL_POSITION"],
                                        "COLUMN_DEFAULT" => $referencias[$index]["REFERENCED_TABLE_NAME"],
                                        "IS_NULLABLE" => $ref["IS_NULLABLE"],
                                        "DATA_TYPE" => $ref["DATA_TYPE"],
                                        "MAX" => ((substr($ref["COLUMN_TYPE"], strlen($ref['DATA_TYPE']) + 1, -1) == "") ? strlen($ref["COLUMN_TYPE"]) : substr($ref["COLUMN_TYPE"], strlen($ref['DATA_TYPE']) + 1, -1)),
                                        "COLUMN_KEY" => $ref["COLUMN_KEY"],
                                        "EXTRA" => $ref["EXTRA"],
                                        "TABLE_NAME" => $ref["TABLE_NAME"],
                                        "COLUMN_COMMENT" => $ref["COLUMN_COMMENT"]);
                                }
                            }
                        }
                        $r["r"] = true;
                        $r["v"] = $campos;
                    } else {
                        $r["r"] = false;
                        $r["v"] = $campos;
                    }
                }
            }


            $this->proveedor->free_result($this->proveedor->stmt);
            $this->proveedor->close();

            return $r;
        }
    }

}

//$d = array("campos" => "idCarpetaJudicial,cveEtapaProcesal,cveConsignacion", "where" => array("idCarpetaJudicial" => "1")); //,desAccion,activo
//$d = array("where" => array("idCarpetaJudicial" => "1")); //,desAccion,activo
//$d = array("values" => array("desAccion" => "Ejemplo de INSERT NUEVO", "activo" => "S", "fechaRegistro" => "now()", "fechaActualizacion" => "now()")); //,desAccion,activo
//$d = array("values" => array("desAccion" => "UPDATE", "activo" => "S", "fechaActualizacion" => "now()"),"where" => array("cveAccion" => "23")); //,desAccion,activo
//$d = array("where" => array("idCarpetaJudicial" => "1"));
//$d=array();
$genericoDao = new GenericoDAO("tblsolicitudesaudiencias");
$r = $genericoDao->fielsTable(true);

echo json_encode($r);

//$row = $genericoDao->selectTable($d, "Select * FROM tblcarpetasjudiciales C, tblimputadoscarpetas IC Where C.idCarpetaJudicial=IC.IdCarpetaJudicial And C.idCarpetaJudicial='1'");
//$row = $genericoDao->deleteTable($d, "");
//$row = $genericoDao->updateTable($d, "");
//$row = $genericoDao->insertTable($d, "");
//echo $row;
?>
