<?php

include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';

// Inclusion des fichiers classes
include_once '_classes/Authors.php';
include_once '_classes/Categories.php';
include_once '_classes/Articles.php';

$var = Authors::getAllAuthors();

/* Définition de la page courante */
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

/* Tableau avec toutes les pages */
$allPages = scandir('controllers/');

if (in_array($page . '_controller.php', $allPages)) {
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';

} else {
    echo 'Erreur 404';
}