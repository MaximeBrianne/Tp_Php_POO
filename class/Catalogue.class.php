<?php

class Catalogue
{
    private $_listOeuvre;

    /**
     * @param $_listOeuvre
     */
    public function __construct()
    {
    }

    /**
     * @param $uneOeuvre
     * @return string
     */
    public function consulter($uneOeuvre)
    {
        $presentation = "";

        $i = 0;
        $found = false;
        while($i < $this->_listOeuvre->Length && $found == false)
        {
            if($this->_listOeuvre[$i] === $uneOeuvre)
            {
                $presentation = $uneOeuvre->getTitre()." : ".$uneOeuvre->getEtat();
            }
            $i++;
        }
        return $presentation;
    }

    /**
     * @param $uneOeuvre
     */
    public function ajouter($uneOeuvre)
    {
        $this->_listOeuvre[$this->_listOeuvre->Length] = $uneOeuvre;
    }

}