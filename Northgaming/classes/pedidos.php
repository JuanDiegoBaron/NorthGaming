<?php

    class pedido{

        private $idPedido;
        private $idUsuario;
        private $fechaPedido;
        private $horaPedido;
        private $estado;


        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of horaPedido
         */ 
        public function getHoraPedido()
        {
                return $this->horaPedido;
        }

        /**
         * Set the value of horaPedido
         *
         * @return  self
         */ 
        public function setHoraPedido($horaPedido)
        {
                $this->horaPedido = $horaPedido;

                return $this;
        }

        /**
         * Get the value of fechaPedido
         */ 
        public function getFechaPedido()
        {
                return $this->fechaPedido;
        }

        /**
         * Set the value of fechaPedido
         *
         * @return  self
         */ 
        public function setFechaPedido($fechaPedido)
        {
                $this->fechaPedido = $fechaPedido;

                return $this;
        }

        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of idPedido
         */ 
        public function getIdPedido()
        {
                return $this->idPedido;
        }

        /**
         * Set the value of idPedido
         *
         * @return  self
         */ 
        public function setIdPedido($idPedido)
        {
                $this->idPedido = $idPedido;

                return $this;
        }
    }

?>