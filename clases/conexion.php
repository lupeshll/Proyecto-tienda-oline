<?php
    class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $password="";
        private $bd="ventas";

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