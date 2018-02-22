<?php
session_start();
/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 *
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources
 * citées dans les fichiers.
 */
if(isset($_SESSION['mesure'])){
unset($_SESSION['mesure']);
}
if(isset($_SESSION['param'])){
unset($_SESSION['param']);
}
if(isset($_SESSION['ecole_loguee'])){
unset($_SESSION['ecole_loguee']);
}
header("Location:index.php");

