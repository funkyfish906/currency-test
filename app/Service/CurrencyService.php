<?php

namespace App\Service;

use GuzzleHttp\Client;

class CurrencyService {

    public function getCurrencies()
    {
        $http = new Client;

        $response = $http->get('https://testing.bb.yttm.work:5000/v1/get_currencies');

        $data = json_decode((string) $response->getBody(), true);

        $currencies = $data['currencies'];

        return $currencies;
    }

    public function getCurrencyRates()
    {
        $http = new Client;

        $response = $http->get('https://testing.bb.yttm.work:5000/v1/get_currency_rates');

        $data = json_decode((string) $response->getBody(), true);

        $rates = $data['rates'];

        return $rates;
    }

}