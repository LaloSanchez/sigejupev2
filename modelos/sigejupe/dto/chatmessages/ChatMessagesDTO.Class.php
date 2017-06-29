<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DTOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

class ChatmessagesDTO {

    private $idChatMessage;
    private $nombreUsuario;
    private $cveUsuario;
    private $mensaje;
    private $ipUsuario;
    private $fechaRegistro;
    private $chatId;
    private $cveNumero;
    private $tipoChat;

    public function getIdChatMessage() {
        return $this->idChatMessage;
    }

    public function setIdChatMessage($idChatMessage) {
        $this->idChatMessage = $idChatMessage;
    }

    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    public function getCveUsuario() {
        return $this->cveUsuario;
    }

    public function setCveUsuario($cveUsuario) {
        $this->cveUsuario = $cveUsuario;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function getIpUsuario() {
        return $this->ipUsuario;
    }

    public function setIpUsuario($ipUsuario) {
        $this->ipUsuario = $ipUsuario;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getChatId() {
        return $this->chatId;
    }

    public function setChatId($chatId) {
        $this->chatId = $chatId;
    }

    public function getCveNumero() {
        return $this->cveNumero;
    }

    public function setCveNumero($cveNumero) {
        $this->cveNumero = $cveNumero;
    }

    public function getTipoChat() {
        return $this->tipoChat;
    }

    public function setTipoChat($tipoChat) {
        $this->tipoChat = $tipoChat;
    }

    public function toString() {
        return array("idChatMessage" => $this->idChatMessage,
            "nombreUsuario" => $this->nombreUsuario,
            "cveUsuario" => $this->cveUsuario,
            "mensaje" => $this->mensaje,
            "ipUsuario" => $this->ipUsuario,
            "fechaRegistro" => $this->fechaRegistro,
            "chatId" => $this->chatId,
            "cveNumero" => $this->cveNumero,
            "tipoChat" => $this->tipoChat);
    }

}

?>