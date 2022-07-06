<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
  
use GuzzleHttp\Client;

class RdwController extends Controller
{
    // Fetch OpenRDW API Data
    private function fetch(){
        $access_token = '99Z06IInxPNS1jOSAj3BaRt6Y';
        $client = new Client();

        $response = $client->request('GET', 'https://opendata.rdw.nl/resource/qs9i-krjy.json', [
            'headers' => [
                'X-App-Token' => $access_token
            ]
        ]);

        $body = $response->getBody();
        $rdwData = json_decode($body, true);

        return $rdwData;
    }

    // Return random OpenRDW number plate
    public function fetchNumberPlate(){

        $data = new RdwController();
        $data = $this->fetch();

        $select = $data[rand(0, count($data) - 1)]['kenteken'];

        return $select;
    }

    // Hier -> zou de volgende functie komen om de data behorende tot kentekenplaten op te halen
}
