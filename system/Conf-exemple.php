<?php
class Conf
{

    public static $civilite_femme = 1;
    public static $civilite_homme = 2;
    public static $civilite_mademoiselle = 3;

    public static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => "dwwm23530_contact",
        'port' => 3306
    );

    public static $modules = array(
        "contact",
        "system",
        "page",
        "authentification",
        "meteo"
    );

    public static $templates = "templates/";

    public static $salt = "Ceci est moN Grian de Sel";

    public static $url = "https://www.prevision-meteo.ch/services/json/";
}