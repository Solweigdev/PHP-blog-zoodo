<?php

include_once '_classes/Articles.php';
include_once '_classes/Categories.php';

$allArticles = Articles::getAllArticle();
$allCategories = Categories::getAllCategories();
$lastArticle = Articles::getLastArticle();
$lastArticleLeft = Articles::getLastArticle(1);
$lastArticleRight = Articles::getLastArticle(2);
