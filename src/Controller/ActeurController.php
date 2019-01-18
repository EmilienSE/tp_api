<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActeurController
{
    function getAllActeurs() {
        $acteurs= [
            ["nom" => "Acteur 1", "prenom" => "Prenom 1"],
            ["nom" => "Acteur 2", "prenom" => "Prenom 2"],
            ["nom" => "Acteur 3", "prenom" => "Prenom 3"]
        ];
        $jsonResponse = json_encode($acteurs);

        return new Response($jsonResponse);
    }

    function getActeur($id) {
        $acteur= [
            "id" => $id,
            "name" => "Acteur ".$id
        ];

        $jsonResponse = json_encode($acteur);

        return new Response($jsonResponse);
    }

    function deleteActeur($id){
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
    }
}