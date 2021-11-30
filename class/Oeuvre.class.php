<?php

include("OeuvreEnVente.class.php");
include("OeuvrePretee.class.php");

class Oeuvre
{
    private $_numero;
    private $_titre;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->_numero;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @param $_numero
     * @param $_titre
     */
    public function __construct($_numero, $_titre)
    {
        $this->_numero = $_numero;
        $this->_titre = $_titre;
    }


}