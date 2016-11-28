<?php
include("ordenador.php"); 
echo "<h3> Ordenadores que mostrar </h3> ";
$ordenador1= new Ordenador("Apple",8);
$ordenador2= new Ordenador("ASUS",16);
echo "El ordenador 1 es:".$ordenador1->getMarca()." "."y tiene"." ".
$ordenador1->getNumRam()." "."espacio de RAM"."<br>";
echo "El ordenador 2 es de la marca:".$ordenador2->getMarca()." "."y tiene"." ".
$ordenador1->getNumRam()." "."espacio de RAM"."<br>";