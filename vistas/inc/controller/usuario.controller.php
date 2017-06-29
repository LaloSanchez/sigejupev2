<?php

	@session_start();

	class Usuario	{
		private $host;

		public function __construct($path = "")	{
			include_once($path . "/inc/config.php");
			$this->host = Constantes::ruta_ws_login;
		}

		public function Login($u, $c)	{
			ini_set("default_socket_timeout", 200);
			ini_set("soap.wsdl_cache_enabled", "0");
			$login = new SoapClient($this->host . "controller/login/LoginServer.php?wsdl");
			$login = $login->getLogin($u, sha1($c), $_SESSION['cveSistema'], '3a332bac303f6e9536b36731090f66800abee04c', 'cf3387f0417a09352af09b2926e3e38522bef9f5');
			return $login;
		}

		public function Perfiles()	{
			ini_set("default_socket_timeout", 200);
			ini_set("soap.wsdl_cache_enabled", "0");
			$perfil = new SoapClient($this->host . "controller/perfiles/PerfilServer.php?wsdl");
			$perfil = $perfil->getPerfilesDisponibles($_SESSION['cveUsuarioSistema'], $_SESSION['cveSistema'], '3a332bac303f6e9536b36731090f66800abee04c', 'cf3387f0417a09352af09b2926e3e38522bef9f5');
			return $perfil;
		}

		public function Perfil($cvePerfil)	{
			ini_set("default_socket_timeout", 200);
			ini_set("soap.wsdl_cache_enabled", "0");
			$perfil = new SoapClient($this->host . "controller/perfiles/PerfilServer.php?wsdl");
			$perfil = $perfil->getPerfil($cvePerfil, $_SESSION['cveSistema'], '3a332bac303f6e9536b36731090f66800abee04c', 'cf3387f0417a09352af09b2926e3e38522bef9f5');
			return $perfil;
		}
	}
?>