<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use App\Service\CurrencyService;
use Illuminate\Http\Request;

class UserController extends Controller {

    private $auth;

    private $currency;

    public function __construct(AuthService $auth, CurrencyService $currency)
    {
        $this->auth = $auth;
        $this->currency = $currency;
    }

    public function auth(Request $request){

        $code = $request->input('code');
        $access_token = $this->auth->getToken($code);
        $userData = $this->auth->getUserData($access_token);
        $sid = $this->auth->getSID($userData);

       return redirect()->route('user.dashboard',  ['sid' => $sid]);
    }

    public function dashboard(Request $request)
    {
        $sid = $request->input('sid');
        $currencies = $this->currency->getCurrencies();
        $rates = $this->currency->getCurrencyRates();

        return view('dashboard')->with(['currencies' => $currencies, 'rates' => $rates, 'sid' => $sid]);
    }

}