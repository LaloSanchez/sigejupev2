<?php

class Matrizrelacion {

    private $matriz;
    private $nivel;
    private $agrupacion;

    public function __construct($consulta, $nivel, $agrupacion = null) {
        $this->nivel = $nivel;
        $this->agrupacion = $agrupacion;
        $this->generarMatriz($consulta);
    }

    public function getElemento($geografia = null, $anio, $mes) {
        if ($this->agrupacion == null) {
            if ($geografia == null) {
                if (empty($this->matriz[$anio][$mes])) {
                    return "";
                }
                return $this->matriz[$anio][$mes];
            }
            if (empty($this->matriz[$geografia][$anio][$mes])) {
                return "";
            }
            return $this->matriz[$geografia][$anio][$mes];
        } else {
            if ($geografia == null) {
                if (empty($this->matriz[0])) {
                    return "";
                }
                return $this->matriz[0];
            }
            if (empty($this->matriz[$geografia])) {
                return "";
            }
            return $this->matriz[$geografia];
        }
    }

    private function generarMatriz($consulta) {
        switch ($this->nivel) {
            case 1:
                $this->construirMatriz($consulta);
                break;
            case 2: $this->construirMatrizRegion($consulta);
                break;
            case 3: $this->construirMatrizDistrito($consulta);
                break;
            case 4: $this->construirMatrizJuzgado($consulta);
                break;
        }
    }

    private function inicializarMatriz($arrayGeografia = null, $arrayAnios, $consulta) {
        $this->matriz = array();
        $cantAnio = count($arrayAnios);
        if ($arrayGeografia != null) {
            $cantGeografias = count($arrayGeografia);
            if ($this->agrupacion == null) {
                for ($i = 0; $i < $cantGeografias; $i++) {//geografia
                    for ($j = 0; $j < $cantAnio; $j++) {//anios
                        for ($k = 1; $k < 13; $k++) {//meses
                            $this->matriz[$arrayGeografia[$i]][$arrayAnios[$j]][$k] = "";
                        }
                    }
                }
            } else {
                for ($i = 0; $i < $cantGeografias; $i++) {//geografia
                    $this->matriz[$arrayGeografia[$i]] = "";
                }
            }
            switch ($this->nivel) {
                case 2: //region
                    if ($this->agrupacion == null) {
                        for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                            $geografia = $consulta["resultados"][$i]->cveRegion;
                            $anio = $consulta["resultados"][$i]->year;
                            $mes = $consulta["resultados"][$i]->month;
                            $this->matriz[$geografia][$anio][$mes] = $consulta["resultados"][$i]->sumatoria;
                        }
                    } else {
                        for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                            $geografia = $consulta["resultados"][$i]->cveRegion;
                            $this->matriz[$geografia] = $consulta["resultados"][$i]->sumatoria;
                        }
                    }
                    break;
                case 3: //distrito
                    if ($this->agrupacion == null) {
                        for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                            $geografia = $consulta["resultados"][$i]->cveDistrito;
                            $anio = $consulta["resultados"][$i]->year;
                            $mes = $consulta["resultados"][$i]->month;
                            $this->matriz[$geografia][$anio][$mes] = $consulta["resultados"][$i]->sumatoria;
                        }
                    } else {
                        for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                            $geografia = $consulta["resultados"][$i]->cveDistrito;
                            $this->matriz[$geografia] = $consulta["resultados"][$i]->sumatoria;
                        }
                    }
                    break;
                case 4: //juzgado
                    if ($this->agrupacion == null) {
                        for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                            $geografia = $consulta["resultados"][$i]->cveJuzgado;
                            $anio = $consulta["resultados"][$i]->year;
                            $mes = $consulta["resultados"][$i]->month;
                            $this->matriz[$geografia][$anio][$mes] = $consulta["resultados"][$i]->sumatoria;
                        }
                    } else {
                        for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                            $geografia = $consulta["resultados"][$i]->cveJuzgado;
                            $this->matriz[$geografia] = $consulta["resultados"][$i]->sumatoria;
                        }
                    }
                    break;
            }
        } else {
            if ($this->agrupacion == null) {
                for ($j = 0; $j < $cantAnio; $j++) {//anios
                    for ($k = 1; $k < 13; $k++) {//meses
                        $this->matriz[$arrayAnios[$j]][$k] = "";
                    }
                }
                for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                    $anio = $consulta["resultados"][$i]->year;
                    $mes = $consulta["resultados"][$i]->month;
                    $this->matriz[$anio][$mes] = $consulta["resultados"][$i]->sumatoria;
                }
            } else {
                $this->matriz[0] = $consulta["resultados"][0]->sumatoria;
            }
        }
    }

    private function construirMatriz($consulta) {
        if ($consulta["totalCount"] > 0) {
            $anio = $consulta["resultados"][0]->year;
            $indexAnios = 0;
            $arrayAnios = array();
            $arrayAnios[$indexAnios] = $anio;
            for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                if (($anio != $consulta["resultados"][$i]->year) && (!$this->buscarArray($arrayAnios, $consulta["resultados"][$i]->year))) {
                    $anio = $consulta["resultados"][$i]->year;
                    $indexAnios++;
                    $arrayAnios[$indexAnios] = $anio;
                }
            }
            $this->inicializarMatriz(null, $arrayAnios, $consulta);
        }
    }

    private function construirMatrizRegion($consulta) {
        if ($consulta["totalCount"] > 0) {
            $region = $consulta["resultados"][0]->cveRegion;
            $anio = $consulta["resultados"][0]->year;
            $indexAnios = 0;
            $arrayRegiones = array();
            $arrayAnios = array();
            $indexRegiones = 0;
            $arrayRegiones[$indexRegiones] = $region;
            $arrayAnios[$indexAnios] = $anio;
            for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                if (($region != $consulta["resultados"][$i]->cveRegion) && (!$this->buscarArray($arrayRegiones, $consulta["resultados"][$i]->cveRegion))) {
                    $region = $consulta["resultados"][$i]->cveRegion;
                    $indexRegiones++;
                    $arrayRegiones[$indexRegiones] = $region;
                }
                if (($anio != $consulta["resultados"][$i]->year) && (!$this->buscarArray($arrayAnios, $consulta["resultados"][$i]->year))) {
                    $anio = $consulta["resultados"][$i]->year;
                    $indexAnios++;
                    $arrayAnios[$indexAnios] = $anio;
                }
            }
            $this->inicializarMatriz($arrayRegiones, $arrayAnios, $consulta);
        }
    }

    private function construirMatrizDistrito($consulta) {
        if ($consulta["totalCount"] > 0) {
            $distrito = $consulta["resultados"][0]->cveDistrito;
            $anio = $consulta["resultados"][0]->year;
            $indexAnios = 0;
            $arrayDistritos = array();
            $arrayAnios = array();
            $indexDistritos = 0;
            $arrayDistritos[$indexDistritos] = $distrito;
            $arrayAnios[$indexAnios] = $anio;
            for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                if (($distrito != $consulta["resultados"][$i]->cveDistrito) && (!$this->buscarArray($arrayDistritos, $consulta["resultados"][$i]->cveDistrito))) {
                    $distrito = $consulta["resultados"][$i]->cveDistrito;
                    $indexDistritos++;
                    $arrayDistritos[$indexDistritos] = $distrito;
                }
                if (($anio != $consulta["resultados"][$i]->year) && (!$this->buscarArray($arrayAnios, $consulta["resultados"][$i]->year))) {
                    $anio = $consulta["resultados"][$i]->year;
                    $indexAnios++;
                    $arrayAnios[$indexAnios] = $anio;
                }
            }
            $this->inicializarMatriz($arrayDistritos, $arrayAnios, $consulta);
        }
    }

    private function construirMatrizJuzgado($consulta) {
        if ($consulta["totalCount"] > 0) {
            $juzgado = $consulta["resultados"][0]->cveJuzgado;
            $anio = $consulta["resultados"][0]->year;
            $indexAnios = 0;
            $arrayJuzgados = array();
            $arrayAnios = array();
            $indexJuzgados = 0;
            $arrayJuzgados[$indexJuzgados] = $juzgado;
            $arrayAnios[$indexAnios] = $anio;
            for ($i = 0; $i < $consulta["totalCount"]; $i++) {
                if (($juzgado != $consulta["resultados"][$i]->cveJuzgado) && (!$this->buscarArray($arrayJuzgados, $consulta["resultados"][$i]->cveJuzgado))) {
                    $juzgado = $consulta["resultados"][$i]->cveJuzgado;
                    $indexJuzgados++;
                    $arrayJuzgados[$indexJuzgados] = $juzgado;
                }
                if (($anio != $consulta["resultados"][$i]->year) && (!$this->buscarArray($arrayAnios, $consulta["resultados"][$i]->year))) {
                    $anio = $consulta["resultados"][$i]->year;
                    $indexAnios++;
                    $arrayAnios[$indexAnios] = $anio;
                }
            }
            $this->inicializarMatriz($arrayJuzgados, $arrayAnios, $consulta);
        }
    }

    private function buscarArray($array, $elemento) {
        $cant = count($array);
        for ($i = 0; $i < $cant; $i++) {
            if ($array[$i] == $elemento) {
                return true;
            }
        }
        return false;
    }

}
