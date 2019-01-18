<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class LoginController
{
    public function login(Request $request)
    {
        $content = $request->getContent();
        $data = json_decode($content);

        if (false === isset($data->username, $data->password)) {
            $response = ["error" => "Missing arguments"];
            $responseJson = json_encode($response);

            return new Response($responseJson, 400);
        }
        if ($data->username === 'John' && $data->password === '123') {
            $token = ["token" => "IsJohn"];
            $jsonToken = json_encode($token);

            return new Response($jsonToken);
        } else {
            $response = ["error" => "Bad Credentials"];
            $responseJson = json_encode($response);

            return new Response($responseJson, 400);
        }
    }
}