<?php

require_once "config.php";
require_once "src/whatsprot.class.php";

function sendWhatsAppMessage($target, $message) {
    $result = array();
    if ($target != "" && $message != "") {
        $w = new WhatsProt("5217227834969", "SIPEJUVEV2", 0);
        $w->connect();

        try {
            $w->loginWithPassword("Ifx/suU6hVEXl5qr+cM79P2Ysk4=");
            $w->sendMessage($target, $message);
            $result["type"] = "OK";
        } catch (Exception $e) {
            echo $e->getMessage();
            $result["type"] = "Error";
        }
    }
    return $result;
}

?>
