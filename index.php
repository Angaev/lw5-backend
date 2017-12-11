<?php
require_once("include/common.inc.php");

$vars = array(
    'logoLink' => 'content/img/logo.png',
    'headerText' => 'Добро пожаловать на сайт 5 лабораторной работы',
    'pageName' => 'Главная страница', 
    'copyright' => 'Права не зарегистрированы в 2017 году',
    'menuItems' => loadLinks(),
    'films' => findFilms(),
    'likeImg' => 'content/img/like.png'
    );
echo getView('index.twig', $vars);