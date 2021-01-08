<?php
    class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $password="";
        private $bd="ventas";
        private $puerto="3361";

        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->bd,
                                    $this->puerto);
            return $conexion;
        }
    }

    /* $obj= new conectar();
    if($obj->conexion()){
        echo "conectado";
    } */

?>