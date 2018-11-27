<?php

namespace App\Service;

use GuzzleHttp\Client;

class AuthService {

    public function getToken($code){

        $http = new Client;

        $response = $http->post('https://testing.e-id.cards/oauth/client', [
            'form_params' => [
                'client_id' => env('client_id'),
                'client_secret' => env('client_secret'),
                'grant_type' => 'authorization_code',
                'redirect_uri' => 'http://auth-blog/dashboard',
                'code' => $code
            ],
        ]);

        $data = json_decode((string)$response->getBody(), true);

        $token = $data['access_token'];

        return $token;
    }

    public function getUserData($accessToken){

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$accessToken
        ];

        $http = new Client([
            'headers' => $headers
        ]);

        $response = $http->get('https://testing.e-id.cards/oauth/data');

        $data = json_decode((string) $response->getBody(), true);

        return $data;
    }

    public function getSID($userData){

        $http = new Client;

        $response = $http->post('https://testing.bb.yttm.work:5000/v1/oauth_auth', [
            'form_params' => $userData,
        ]);

        $data = json_decode((string) $response->getBody(), true);

        $sid = $data['sid'];

        return $sid;

    }
}
