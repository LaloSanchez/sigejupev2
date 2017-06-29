<?php
    include_once("config.php");

    class DataBase {
        private $conexion;
        private $resource;
        private $sql;
        public static $queries;
        private static $_singleton;

        public static function getInstance(){
            return new DataBase();
            // if (is_null (self::$_singleton)) {
            //     self::$_singleton = new DataBase();
            // }
            // return self::$_singleton;
        }

        private function __construct(){
            
            $this->conexion = @mysql_connect(Constantes::bd_servidor, Constantes::bd_usuario, Constantes::bd_clave);
            mysql_select_db(Constantes::bd_bd, $this->conexion);
            // $this->conexion = @mysql_connect('localhost', 'aquifact_scfdi', 'facturas_1');
            // mysql_select_db('aquifact_scfdi', $this->conexion);
            @mysql_query("SET NAMES 'utf8'"); 
            @$this->queries = 0;
            $this->resource = null;
        }

        public function execute(){
            if(!($this->resource = mysql_query($this->sql, $this->conexion))){
                return mysql_error();
            }
            @$this->queries++;
            return $this->resource;
        }

        public function alter(){
            if(!($this->resource = mysql_query($this->sql, $this->conexion))){
                return false;
            }
            return true;
        }

        public function loadObjectList(){
            if (!($cur = $this->execute())){
                return null;
            }
            $array = array();
            while ($row = @mysql_fetch_object($cur)){
                $array[] = $row;
            }
            return $array;
        }

        public function setQuery($sql){
            if(empty($sql)){
                return false;
            }
            $this->sql = $sql;
            return true;
        }

        public function freeResults(){
            @mysql_free_result($this->resource);
            return true;
        }

        public function loadObject(){
            if ($cur = $this->execute()){
                if ($object = mysql_fetch_object($cur)){
                    @mysql_free_result($cur);
                    return $object;
                }
                else {
                    return null;
                }
            }
            else {
                return false;
            }
        }

        public function countResults()	{
            if (!($cur = $this->execute())) {
                return null;
            }
            @$counter = mysql_num_rows($cur);
            return $counter;
        }

        public function RecordCount()  {
            if (!($cur = $this->execute())) {
                return null;
            }
            @$counter = mysql_num_rows($cur);
            return $counter;
        }

        public function firstResult()	{
            if ($cur = $this->execute()){
                if($array = mysql_fetch_object($cur)){
                    @mysql_free_result($cur);
                    return (array)$array;
                }	else	{
                    return null;
                }
            }
        }

        public function getTypes()  {
            if ($cur = $this->execute()){
                if($array = mysqli_fetch_fields($cur)){
                    @mysql_free_result($cur);
                    return $array;
                }   else    {
                    return null;
                }
            }
        }

        public function lastId()	{
            return mysql_insert_id();
        }

        function __destruct(){
            @mysql_free_result($this->resource);
            @mysql_close($this->conexion);
        }
    }
?>