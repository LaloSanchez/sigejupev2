<?php
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
if (!$sock = @fsockopen('localhost', 80, $num, $error, 5)) {
   echo '{"status": "fail"}';
} else {
   echo '{"status": "ok"}';
   fclose($sock);
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
