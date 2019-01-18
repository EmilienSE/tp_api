<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmController
{
    function getAllFilms() {
        $films= [
            ["titre" => "Film 1", "annee" => "Annee 1", "poster" => "Poster 1", "synopsis" => "Synopsis 1"],
            ["titre" => "Film 2", "annee" => "Annee 2", "poster" => "Poster 2", "synopsis" => "Synopsis 2"],
            ["titre" => "Film 3", "annee" => "Annee 3", "poster" => "Poster 3", "synopsis" => "Synopsis 3"],
        ];
        $jsonResponse = json_encode($films);

        return new Response($jsonResponse);
    }

    function getFilm($id) {
        $film= [
            "id"        => $id,
            "titre"     => "Film ".$id,
            "annee"     => "Annee ".$id,
            "poster"    => "Poster".$id,
            "synopsis"  => "Synopsis".$id
        ];

        $jsonResponse = json_encode($film);

        return new Response($jsonResponse);
    }

    function deleteFilm($id){
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
    }
}