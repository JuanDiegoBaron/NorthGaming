<?php

    class producto{

        private $idProducto;
        private $nombreProducto;
        private $precio;
        private $stock;
        private $descripcion;
        private $categoria;
        private $marca;
        private $activo;
        private $miniatura;
        private $imagen; 


        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of miniatura
         */ 
        public function getMiniatura()
        {
                return $this->miniatura;
        }

        /**
         * Set the value of miniatura
         *
         * @return  self
         */ 
        public function setMiniatura($miniatura)
        {
                $this->miniatura = $miniatura;

                return $this;
        }

        /**
         * Get the value of activo
         */ 
        public function getActivo()
        {
                return $this->activo;
        }

        /**
         * Set the value of activo
         *
         * @return  self
         */ 
        public function setActivo($activo)
        {
                $this->activo = $activo;

                return $this;
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
                $this->marca = $marca;

                return $this;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of stock
         */ 
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */ 
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of nombreProducto
         */ 
        public function getNombreProducto()
        {
                return $this->nombreProducto;
        }

        /**
         * Set the value of nombreProducto
         *
         * @return  self
         */ 
        public function setNombreProducto($nombreProducto)
        {
                $this->nombreProducto = $nombreProducto;

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
    }

?>