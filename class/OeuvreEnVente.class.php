<?php

class OeuvreEnVente extends Oeuvre
{
    private $_prixOeuvre;
    private $_etat;

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->_etat;
    }

    /**
     * @param mixed $etat
     */
    public function setLibre($etat)
    {
        $this->_etat = $etat;
    }
    public function setReserve($etat)
    {
        $this->_etat = $etat;
    }


    /**
     * @param $_numero
     * @param $_titre
     * @param $_etat
     * @param $_prixOeuvre
     */
    public function __construct($_numero, $_titre, $_etat, $_prixOeuvre)
    {
        parent::__construct($_numero, $_titre);
        $this->_etat = $_etat;
        $this->_prixOeuvre = $_prixOeuvre;
    }


}