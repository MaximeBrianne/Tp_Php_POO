<?php

class OeuvrePretee extends Oeuvre
{
    private $_nomProprietaire;

    /**
     * @param $_numero
     * @param $_titre
     * @param $_nomProprietaire
     */
    public function __construct($_numero, $_titre, $_nomProprietaire)
    {
        parent::__construct($_numero, $_titre);
        $this->_nomProprietaire = $_nomProprietaire;
    }
}