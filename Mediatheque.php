<?php

include("class/Catalogue.class.php");
include("class/Oeuvre .class.php");

$catalogue = new Catalogue();

$oeuvreVente1 = new OeuvreEnVente(1, "La Joconde", "L", 2000);
$catalogue->ajouter($oeuvreVente1);

echo $oeuvreVente1->Consulter($oeuvreVente1);

UnSet($catalogue);
UnSet($oeuvreVente1);
