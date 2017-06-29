<?php
	@session_start();

	class GenericoDAO	{
		private $conexion;
		private $tabla;
		private $sql_por_empresa;
		private $sql_por_empresa_tp;

		public function __construct($path, $tabla = '')	{
			include_once($path . "inc/class.db.php");
			$this->conexion = DataBase::getInstance();

			include_once($path . "inc/config.php");
			$this->ondev = Constantes::ondev;

			$this->tabla = $tabla;

			@session_start();

			$this->sql_por_empresa = "";
			$this->sql_por_empresa_tp = "";
		}

		public function GetData($d, $totales = true, $consulta_especial = false)	{
			$resultado = array();
			$campos = isset($d['campos']) ? $d['campos'] : '*';
			$campos = str_replace(";", "*******", $campos);

			$default = isset($d['id']) ? $d['id'] : '';

			$joins = "";

			if(strpos($campos, "iId") === false && $campos != "*")	{
				$campos = "iId," . $campos;
			}

			if($consulta_especial)	{
				$campos = explode(",", $campos);
				$equis = $campos;
				foreach ($equis as $key => $value) {
					if(strpos($value, "CONCAT") === false)	{
						$campos[$key] = "tp." . $value;
					}	else	{
						$campos[$key] = $value;
					}
				}
				unset($equis);
				$campos = implode(", ", $campos);
			}

			if($totales)	{
				$query_totales = "SELECT COUNT(*) AS dTotales FROM $this->tabla WHERE 1 = 1 $this->sql_por_empresa";
				$this->conexion->setQuery($query_totales);
				$valor = $this->conexion->firstResult();
				$resultado['registros'] = $valor['dTotales'];
			}

			if(strpos($this->tabla, "ref_") === false)	{
				$query = "SELECT $campos FROM $this->tabla AS tp $joins WHERE tp.iEstado = 1 $this->sql_por_empresa_tp";
			}	else	{
				$query = "SELECT $campos FROM $this->tabla WHERE 1 = 1 $this->sql_por_empresa ";
			}

			if($default != "")	{
				
				$query .= "AND tp.iId = $default";	
				
			}

			$sql = isset($d['sql']) ? $d['sql'] : '';
			if($sql != "")	{
				$query .= " " . $sql;
			}

			$this->conexion->setQuery($query);

			if($this->ondev)	{
				$resultado['e'] = $query;
			}

			if($this->conexion->RecordCount() > 0)	{
				$resultado['e']	= $query;
				$resultado['r'] = true;
				$resultado['v']	= $this->conexion->LoadObjectList();
				
			}	else	{
				$resultado['r'] = false;
				$resultado['v']	= $this->conexion->LoadObjectList();
			}

			return $resultado;
		}

		public function GetFields($all = false)	{
			$this->identificador = explode('_', $this->tabla);
			$this->identificador = $this->identificador[1];

			if(!$all)	{
				$addsql = "AND c.COLUMN_COMMENT <> '' ";
			}	else	{
				$addsql = "";
			}

			$query = "SELECT
						c.COLUMN_NAME,
						c.ORDINAL_POSITION,
						c.COLUMN_DEFAULT,
						c.IS_NULLABLE,
						c.COLUMN_TYPE,
						c.COLUMN_COMMENT,
						k.CONSTRAINT_NAME, 
						k.REFERENCED_TABLE_NAME, 
						k.REFERENCED_COLUMN_NAME  
					FROM
						INFORMATION_SCHEMA.COLUMNS AS c 
							LEFT JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE AS k 
								ON(k.TABLE_NAME = c.TABLE_NAME AND k.COLUMN_NAME = c.COLUMN_NAME)
					WHERE
						c.TABLE_NAME = '$this->tabla' 
						$addsql 
						GROUP BY c.COLUMN_NAME
					ORDER BY c.ORDINAL_POSITION";

						
			$this->conexion->setQuery($query);
                        
			$resultado['q'] = $query;

			if($this->conexion->RecordCount() > 0)	{

				$valores = $this->conexion->LoadObjectList();
				$query_referencias = "SELECT
										CONSTRAINT_NAME,
										TABLE_NAME, 
										COLUMN_NAME, 
										REFERENCED_TABLE_NAME, 
										REFERENCED_COLUMN_NAME 
									FROM
										INFORMATION_SCHEMA.KEY_COLUMN_USAGE
									WHERE
										REFERENCED_TABLE_NAME = '$this->tabla'
										AND CONSTRAINT_NAME LIKE 'fk-$this->identificador%-si'";

				$this->conexion->setQuery($query_referencias);
				if($this->conexion->RecordCount() > 0)	{
					$posicion = 1;
					$val_referencias = $this->conexion->LoadObjectList();
					foreach($val_referencias as $referencia)	{
						$etiquetas = explode('-', $referencia->CONSTRAINT_NAME);
						$etiqueta = strtoupper($etiquetas[2]);
						$campos = $etiquetas[3];
						$campos_etiquetas = explode(',', $campos);
						$etiquetas_campos = '';
						for($e=0;$e<=count($campos_etiquetas) - 1;$e++)	{
							if($e>0)	{
								$etiquetas_campos .= ",";
							}
							$c_actual = $campos_etiquetas[$e];
							$etiquetas_campos .= substr($c_actual, 1);
						}

						$tabla_referencia = "cat_" . $etiquetas[2];

						@$valor = new stdClass;
						@$valor->COLUMN_NAME = "REFERENCIA";
						@$valor->ORDINAL_POSITION = $posicion;
						@$valor->COLUMN_DEFAULT = $tabla_referencia;
						@$valor->IS_NULLABLE = $referencia->COLUMN_NAME;
						@$valor->COLUMN_TYPE = "int(11)";
						@$valor->COLUMN_COMMENT = "$etiqueta|$etiqueta|$referencia->TABLE_NAME";
						@$valor->CONSTRAINT_NAME = "";
						@$valor->REFERENCED_TABLE_NAME = $etiquetas_campos;
						@$valor->REFERENCED_COLUMN_NAME = $campos;
						array_push($valores, $valor);
						$posicion++;
					}
				}

				$resultado['r'] = true;
				$resultado['v']	= $valores; //$this->conexion->LoadObjectList();
			}	else	{
				$resultado['r'] = false;
				$resultado['v']	= $this->conexion->LoadObjectList();
			}

			return $resultado;
		}

		public function GetRecord($registro)	{
			$respuesta = array();
			if(isset($registro['campos']))	{
				$campos = $registro['campos'];
				if(trim($campos) == "")	{
					$campos = "*";
				}
			}	else	{
				$campos = "*";
			}
			$sql = "SELECT $campos FROM $this->tabla WHERE " . $registro['campo'] . " = '" . $registro['valor'] . "' $this->sql_por_empresa";
			$this->conexion->setQuery($sql);
			if($this->conexion->RecordCount() > 0)	{
				$arreglo = $this->conexion->firstResult();
				foreach ($arreglo as $key => $value) {
					if($key[0] == 'b')	{
						$arreglo[$key] = "inc/ajax.php?solicitud=imagen&tabla=$this->tabla&campo=" . $registro['campo'] . "&ident=" . $registro['valor'] . "&cblob=" . $key;
					}
				}
				$respuesta['r'] = true;
				$respuesta['id'] = $arreglo;
				$respuesta['v'] = $arreglo;
				$respuesta['extra'] = $sql;
				$respuesta['sql'] = $sql;
			}	else	{
				$respuesta['r']	 = false;
				$respuesta['id'] = array();
				$respuesta['v'] = array();
				$respuesta['extra'] = $sql;
				$respuesta['sql'] = $sql;
			}
			return $respuesta;
		}

		public function Delete($field, $id)	{
			$query = "DELETE FROM $this->tabla WHERE $field IN ($id) $this->sql_por_empresa";
			$this->conexion->setQuery($query);
			$this->conexion->execute();
		}

		public function LogicDelete($id)	{
		}

		public function Insert($registros)	{
			$respuesta = array();
			$sql = "INSERT INTO $this->tabla ";
			$campos = "(";
			$valores = "VALUES (";
			foreach ($registros as $campo => $valor) {
				$campos .= "$campo";
				$valores .= "'$valor'";

				end($registros);
			    if ($campo === key($registros))	{
			    	$campos .= ") ";
					$valores .= ") ";
			    }	else	{
			    	$campos .= ", ";
			    	$valores .= ", ";
			    }
			}

			$sql .= $campos . $valores;

			$this->conexion->setQuery($sql);
			$insercion = $this->conexion->execute();
			if($insercion > 0)	{
				$respuesta['r'] = true;
				$respuesta['id'] = $this->conexion->lastId();
				$respuesta['extra'] = "";
			}	else	{
				$respuesta['r'] = false;
				$respuesta['id'] = $insercion;
				$respuesta['extra'] = $sql;
			}

			return $respuesta;
		}

		public function Update($registros)	{
			$respuesta = array();
			$sql = "UPDATE $this->tabla ";
			$campos = "SET ";

			foreach ($registros as $campo => $valor) {
				if($campo != 'iId')	{
					$campos .= "$campo = '$valor', ";
				}
			}
			$campos .= "iId = iId ";
			$campos .= "WHERE iId = " . $registros['iId'] . " $this->sql_por_empresa";

			$sql .= $campos;

			$this->conexion->setQuery($sql);
			$insercion = $this->conexion->execute();
			if($insercion > 0)	{
				$respuesta['r'] = true;
				$respuesta['id'] = $registros['iId'];
				$respuesta['extra'] = "";
			}	else	{
				$respuesta['r'] = false;
				$respuesta['id'] = $insercion;
				$respuesta['extra'] = $sql;
			}

			return $respuesta;
		}
	}

?>