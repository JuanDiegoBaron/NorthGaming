<?php

    class marca{

        private $idMarca;
        private $nombreMarca;


        /**
         * Get the value of nombreMarca
         */ 
        public function getNombreMarca()
        {
                return $this->nombreMarca;
        }

        /**
         * Set the value of nombreMarca
         *
         * @return  self
         */ 
        public function setNombreMarca($nombreMarca)
        {
                $this->nombreMarca = $nombreMarca;

                return $this;
        }

        /**
         * Get the value of idMarca
         */ 
        public function getIdMarca()
        {
                return $this->idMarca;
        }

        /**
         * Set the value of idMarca
         *
         * @return  self
         */ 
        public function setIdMarca($idMarca)
        {
                $this->idMarca = $idMarca;

                return $this;
        }
    }

?>