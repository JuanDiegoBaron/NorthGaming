<?php

    class carrito{

        private $idCarrito;
        private $idUsuario;
        private $idProducto;
        private $cantidad;
        private $precioTotal;


        /**
         * Get the value of precioTotal
         */ 
        public function getPrecioTotal()
        {
                return $this->precioTotal;
        }

        /**
         * Set the value of precioTotal
         *
         * @return  self
         */ 
        public function setPrecioTotal($precioTotal)
        {
                $this->precioTotal = $precioTotal;

                return $this;
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        /**
         * Get the value of idProducto
         */ 
        public function getIdProducto()
        {
                return $this->idProducto;
        }

        /**
         * Set the value of idProducto
         *
         * @return  self
         */ 
        public function setIdProducto($idProducto)
        {
                $this->idProducto = $idProducto;

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
         * Get the value of idCarrito
         */ 
        public function getIdCarrito()
        {
                return $this->idCarrito;
        }

        /**
         * Set the value of idCarrito
         *
         * @return  self
         */ 
        public function setIdCarrito($idCarrito)
        {
                $this->idCarrito = $idCarrito;

                return $this;
        }
    }

?>