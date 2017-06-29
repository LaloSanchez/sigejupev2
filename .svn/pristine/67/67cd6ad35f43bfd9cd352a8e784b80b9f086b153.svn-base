<?php

	@session_start();

	class Generico	{

		private $dao;
		private $tabla;

		public function __construct($path = "", $tabla = "")	{
			include_once($path . "inc/class.log.php");
			include_once($path . "inc/dao/dao.generico.php");
			$this->dao = new GenericoDAO($path, $tabla);
			$this->tabla = $tabla;
		}

		public function GetFields($d)	{
			$dao_campos = $this->dao->GetFields($d);

			return $dao_campos;
		}

		public function GetData($d, $totales = true, $especial = false)	{
			$dao_modulos = $this->dao->GetData($d, $totales, $especial);
			if($dao_modulos['r'])	{
				$re = $dao_modulos;
			}	else	{
				newlog("No se obtuvieron resultados de una solicitud: $this->tabla \r\nSolicitud: " . json_encode($d) . "\r\nRespuesta:" . json_encode($dao_modulos));
			}

			return $dao_modulos;
		}

		public function GetRecord($registro, $campos = "")	{
			$buscar['campo'] = "iId";
			$buscar['valor'] = $registro;
			if($campos != "")	{
				$buscar['campos'] = $campos;
			}
			$existe_cliente = $this->dao->GetRecord($buscar);

			return $existe_cliente;
		}

		public function GetRecord_Campos($registro)	{
			
			$existe_cliente = $this->dao->GetRecord($registro);

			return $existe_cliente;
		}

		public function LogicalDelete($id)	{
			$eliminar = array("iId" => $id, "iEstado" => 0);
			$eliminado_logico = $this->dao->Update($eliminar);
			return $eliminado_logico;
		}

		public function Delete_Fields($field, $id){
			$eliminar = $this->dao->Delete($field, $id);
		}

		public function FindRecord($d, $comillas = true)	{
			$filtros = " ";
			foreach ($d as $key => $value) {
				if($comillas)	{
					$filtros .= "AND $key = '$value' ";
				}	else	{
					$filtros .= "AND $key = $value ";
				}
			}
			$consulta['sql'] = $filtros;
			$dao_modulos = $this->dao->GetData($consulta, false);
			if($dao_modulos['r'])	{
				$re = $dao_modulos;
			}	else	{
				newlog("Hubo un error al obtener un resultado generico en la tabla " . $this->tabla);
			}

			return $dao_modulos;
		}

		public function SaveRecord($registro, $verify = true)	{
			$registros = array();

			$id_cliente = isset($registro['iId']) ? $registro['iId'] : 0;

			$tablas_referenciadas = array();
			$campo_referente = "";

			$lista_tablas_referenciadas = array();

			if($id_cliente == 0)	{

				if($verify)	{
					if(isset($registro['sNombre']))	{
						$buscar['campo'] = "sNombre";
						$buscar['valor'] = $registro['sNombre'];
						$existe_nombre = $this->dao->GetRecord($buscar);
					}	else	{
						$existe_nombre['r'] = false;
					}
				}	else	{
					$existe_nombre['r'] = false;
				}

				if($existe_nombre['r'])	{
					$dao_resultado['r'] = false;
					$dao_resultado['id'] = "El nombre ya existe en la base de datos";
				}	else	{
					foreach ($registro as $key => $value) {
						if(strpos($key, 'ref_') === false)	{
							if($value != "")	{
								$registros[$key] = $value;
							}
						}	else	{
							if(strpos($key, "_tabla") == true)	{
								$datos_tablas_referenciadas = array();

								$valores = str_replace("_tabla", "", $key);
								array_push($lista_tablas_referenciadas, $value);

								if(isset($registro[$valores]))	{
									$valores = $registro[$valores];

									$datos_tablas_referenciadas['tabla'] = $value;
									$datos_tablas_referenciadas['valores'] = $valores;

									array_push($tablas_referenciadas, $datos_tablas_referenciadas);
								}
							}

							if($key == 'ref_campo')	{
								$campo_referente = $value;
							}
						}
					}

					$dao_resultado = $this->dao->Insert($registros);
				}
			}	else	{
				foreach ($registro as $key => $value) {
					if(strpos($key, 'ref_') === false)	{
						if($value != "")	{
							$registros[$key] = $value;
						}
					}	else	{
						if(strpos($key, "_tabla") == true)	{
							$datos_tablas_referenciadas = array();

							$valores = str_replace("_tabla", "", $key);
							array_push($lista_tablas_referenciadas, $value);

							if(isset($registro[$valores]))	{
								$valores = $registro[$valores];

								$datos_tablas_referenciadas['tabla'] = $value;
								$datos_tablas_referenciadas['valores'] = $valores;

								array_push($tablas_referenciadas, $datos_tablas_referenciadas);
							}
						}

						if($key == 'ref_campo')	{
							$campo_referente = $value;
						}
					}
				}
				$dao_resultado = $this->dao->Update($registros);
			}

			if($dao_resultado['r'])	{
				$id_registro = $dao_resultado['id'];
				foreach($lista_tablas_referenciadas as $tabla) {
					$dao_generico = new GenericoDAO("../", $tabla);
					$vaciar = $dao_generico->Delete($campo_referente, $id_registro);
				}
				if(count($tablas_referenciadas) > 0)	{
					foreach($tablas_referenciadas as $referencia)	{
						$campo_para_valor = "";
						$dao_generico = new GenericoDAO("../", $referencia['tabla']);
						$campos = $dao_generico->GetFields(true);

						if($campos['r'])	{
							foreach($campos['v'] as $campo)	{
								if($campo->COLUMN_NAME != 'iId' && $campo->COLUMN_NAME != 'iEstado' && $campo->COLUMN_NAME != $campo_referente)	{
									$campo_para_valor = $campo->COLUMN_NAME;
								}
							}

							foreach($referencia['valores'] as $valorr)	{
								$ref_agregar = array($campo_referente => $id_registro, $campo_para_valor => $valorr);
								$registro_referente = $dao_generico->Insert($ref_agregar);
							}
						}
					}
				}
			}				

			return $dao_resultado;
		}
	}

?>