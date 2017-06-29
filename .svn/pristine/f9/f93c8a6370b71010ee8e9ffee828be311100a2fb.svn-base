<?php
include_once(dirname(__FILE__) . "/../../../../tribunal/json/JsonEncod.Class.php");
class DtoToJson {

    private $dtos;
    private $array;

    public function __construct($dtos) {
        $this->dtos = $dtos;
    }

    public function toJson($text = "",$type="") {
        $i = 1;
        $json = "{\"Tipo\":\"" . count($this->dtos) . "\",\"mensaje\":\"" . $text . "\",\"dispositivo\":[";
        foreach ($this->dtos as $dto) {
            $jsonDto = new Encode_JSON();
            $json.=$jsonDto->encode($dto->toString());
            $json.= ",";
        }
        $json = substr($json, 0, (strlen($json) - 1));
        $json.="]}";
        return $json;
    }
    
    public function toJsonConfig($text = "",$type="") {
        $i = 1;
        $json = "{\"Tipo\":\"" . $type . "\",\"mensaje\":\"" . $text . "\",\"configuracionesHojas\":[";
        foreach ($this->dtos as $dto) {
            $jsonDto = new Encode_JSON();
            $json.=$jsonDto->encode($dto->toString());
            $json.= ",";
        }
        $json = substr($json, 0, (strlen($json) - 1));
        $json.="]}";
        return $json;
    }

    public function to2Json($json2, $text = "", $type = "OK") {
        $i = 1;
        $json = "{\"Tipo\":\"" . $type . "\",\"mensaje\":\"" . $text . "\",\"dispositivo\":[";
        foreach ($this->dtos as $dto) {
            $jsonDto = new Encode_JSON();
            $json.=$jsonDto->encode($dto->toString());
            $json.= ",";
        }
        $json = substr($json, 0, (strlen($json) - 1));
        $json.="],\"parametros\":[";

        foreach ($json2 as $dto) {
            $jsonDto = new Encode_JSON();
            $json.=$jsonDto->encode($dto->toString());
            $json.= ",";
        }
        $json = substr($json, 0, (strlen($json) - 1));
        $json.="]}";
        return $json;
    }

}

?>
