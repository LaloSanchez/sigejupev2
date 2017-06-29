<?php
session_start();
if (isset($_POST["pwd"]) && is_string($_POST["pwd"])) {
   echo "{\"pwd\": \"".sha1($_POST["pwd"])."\"}";
} else {
   if (isset($_SESSION['cveUsuarioSistema'])) {
      echo "{\"status\": \"ok\"}";
   } else {
      echo "{\"status\": \"fail\"}";
   }
}
?>