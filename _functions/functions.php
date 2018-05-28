<?php

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variable
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    echo var_dump($var);
    echo '</pre>';
    exit;
}