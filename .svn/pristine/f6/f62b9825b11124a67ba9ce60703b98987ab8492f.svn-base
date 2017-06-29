<?php

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatmessages/ChatMessagesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestamuestra/RespuestamuestraDAO.Class.php");

class ChatFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function getChat() {
        $chatMessagesDto = new ChatMessagesDTO(); //INVITACIÓN A MINISTERIO PUBLICO
        $chatMessagesDao = new ChatMessagesDAO();
        $chatMessagesDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $chatMessagesDto = $chatMessagesDao->selectDistintChatMessages($chatMessagesDto, " AND chatId NOT in (select chatId from tblchatcerrados)  ", null);
//$chatMessagesDto = "";

        $htmlChat = "";
        if ($chatMessagesDto != "" && count($chatMessagesDto) > 0) {
            $_SESSION['tipochat'] = $chatMessagesDto[0]->getTipochat();
            $_SESSION['cveNumero'] = $chatMessagesDto[0]->getCveNumero();

            $_SESSION['iduser'] = $_SESSION['cveUsuarioSistema'];
            $_SESSION['chatid'] = $chatMessagesDto[0]->getChatid();
            $_SESSION['idname'] = $_SESSION['Nombre'];
            $json = '{"totalCount":"' . count($chatMessagesDto) . '"';
            $json .= ',"chats":[';
            $count = 0;
            foreach ($chatMessagesDto as $chatMessage) {
                $tipoChat = "";
                if ($chatMessage->getTipoChat() == "1") { //CATEOS
                    $cateosDto = new CateosDTO;
                    $cateosDao = new CateosDAO();
                    $cateosDto->setIdCateo($chatMessage->getCveNumero());
                    $cateosDto = $cateosDao->selectCateos($cateosDto);
                    $cateosDto = $cateosDto[0];
                    $tipoChat = "CATEO " . $cateosDto->getNumeroCateo() . " / " . $cateosDto->getAnioCateo();
                } else if ($chatMessage->getTipoChat() == "2") { //ORDENES DE APREHENSION
                    $ordenesDto = new OrdenesDTO;
                    $ordenesDao = new OrdenesDAO();
                    $ordenesDto->setIdOrden($chatMessage->getCveNumero());
                    $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto);
                    $ordenesDto = $ordenesDto[0];
                    $tipoChat = "ORDEN APREHENSION " . $ordenesDto->getNumeroOrden() . " / " . $ordenesDto->getAnioOrden();
                } else if ($chatMessage->getTipoChat() == "3") { //JUZGADOS
                    $fileJson = "../../../archivos/" . $_SESSION['cveUsuarioSistema'] . ".json";
                    if (file_exists($fileJson)) {
                        $jsonFile = file_get_contents($fileJson);
                        if ($jsonFile !== "") {
                            $jsonFile = json_decode($jsonFile, true);
                            if ($jsonFile["cveUsuario"] === $_SESSION['cveUsuarioSistema']) {
                                foreach ($jsonFile["perfiles"][0]["perfil"] as $perfil) {
                                    if ($perfil["cveAdscripcion"] == $chatMessage->getCveNumero()) {
                                        $tipoChat = $perfil["desAdscripcion"];
                                        break;
                                    }
                                }
                            } else {
                                $tipoChat = "SALA DE CHAT";
                            }
                        } else {
                            $tipoChat = "SALA DE CHAT";
                        }
                    } else {
                        $tipoChat = "SALA DE CHAT";
                    }
                } else if ($chatMessage->getTipoChat() == "4") { //TOMA DE MUESTRAS
                    $respuestamuestraDto = new RespuestamuestraDTO();
                    $respuestamuestraDao = new RespuestamuestraDAO();
                    $respuestamuestraDto->setIdMuestra($chatMessage->getCveNumero());
                    $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);
                    if ($respuestamuestraDto != "") {
                        $respuestamuestraDto = $respuestamuestraDto[0];
                        $tipoChat = "TOMA DE MUESTRAS " . $respuestamuestraDto->getNumeroMuestra() . " / " . $respuestamuestraDto->getAnioMuestra();
                    }
                } else {
                    $tipoChat = "SALA DE CHAT";
                }
                $json .= '{';
                $json .= '"value":' . json_encode($chatMessage->getChatId() . ":" . $chatMessage->getCveNumero() . ":" . $chatMessage->getTipoChat() . ":" . $tipoChat) . ',';
                $json .= '"descripcion":' . json_encode($tipoChat) . '';
                $json .= '}';
                $count++;
                if ($count < count($chatMessagesDto)) {
                    $json .= ",";
                }
//                $htmlChat .= "<option value=\"" . $chatMessage->getChatId() . ":" . $chatMessage->getCveNumero() . ":" . $chatMessage->getTipoChat() . ":" . $tipoChat . "\">" . $tipoChat . "</option>";
            }
            $json .= ']';
            $json .= '}';
            $htmlChat = $json;
        } else {

            $json = '{"chats": [],';
            $json .= '"totalCount": "0"}';
            $htmlChat = $json;
            $_SESSION['iduser'] = "";
            $_SESSION['chatid'] = "";
            $_SESSION['idname'] = "";
            $_SESSION['tipochat'] = "";
            $_SESSION['cveNumero'] = "";
        }

        return $htmlChat;
    }

}

$chatFacade = new ChatFacade();
@$accion = $_POST["accion"];
if (($accion == "getChat")) {
    echo $chatFacade->getChat();
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}