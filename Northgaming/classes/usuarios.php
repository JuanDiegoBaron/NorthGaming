<?php

include_once("../db/connection.php");

class usuario{

    private $idUsuario;
    private $nombreUsuario;
    private $mail;
    private $fechaNacimiento;
    private $contraseña;
    private $favoritos;

    public function __construct($nombreUsuario,$mail,$fechaNacimiento,$contraseña,$favoritos) {
        $this->nombreUsuario = $nombreUsuario;
        $this->mail = $mail;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->contraseña = $contraseña;
        $this->favoritos = $favoritos;
    }

    public function crearUsuario(){

        $link = Conection::connect();
        $sql = "INSERT INTO usuarios VALUES(null,'".$this->getNombreUsuario()."','".$this->getMail()."','".$this->getFechaNacimiento()."','".$this->getContraseña()."','".$this->getFavoritos()."');";
            $stmt = $link->prepare($sql);
            if( $stmt->execute() ){
                echo "Successful registration!";                             
            }
            else{
                echo "Something is wrong!";
            }

    }

    /**
     * Get the value of favoritos
     */ 
    public function getFavoritos()
    {
        return $this->favoritos;
    }

    /**
     * Set the value of favoritos
     *
     * @return  self
     */ 
    public function setFavoritos($favoritos)
    {
        $this->favoritos = $favoritos;

        return $this;
    }

    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     */ 
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */ 
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of nombreUsuario
     */ 
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     *
     * @return  self
     */ 
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

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
}

?>