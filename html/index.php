<?php

require_once 'vendor/autoload.php';
require 'model/Movie.php';

$loader = new Twig\Loader\FilesystemLoader('view');
$twig = new Twig\Environment($loader);

if (isset($_GET['doc'])) {
    $doc = $_GET['doc'];
    switch ($doc) {
        case 'view':
        case 'edit':
        case 'delete':
            if (isset($_GET['id'])) {
                renderMovieDetails($doc, $_GET['id']);
                break;
            }
        case 'all':
        default:
            renderMovieTable();
    }
} else {
    renderMovieTable();
}

function renderMovieDetails($action, $id) {
    echo 'Führe Aktion ' . $action . ' auf Film ' . $id . " aus";
}

function renderMovieTable() {
    global $twig;
    echo $twig->render('home.twig', [
        'movies' => [
            new Movie(0, 'Harry Potter und der Stein der Weisen', 'J. K. Rowling', 9.95),
            new Movie(1, 'Harry Potter und die Kammer des Schreckens', 'J. K. Rowling', 14.95)
        ]
    ]);
}
