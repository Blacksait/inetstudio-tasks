<?php

namespace KeyTask\Classes;
use KeyTask\Classes\KeyFactory;

class Concept {
    private $client;

    public function __construct() {
        $this->client = new \GuzzleHttp\Client();
        $this->config = 'file';
    }

    public function getUserData() {
        $params = [
            'auth' => ['user', 'pass'],
            'token' => $this->getSecretKey()
        ];

        $request = new \Request('GET', 'https://api.method', $params);
        $promise = $this->client->sendAsync($request)->then(function ($response) {
            $result = $response->getBody();
        });

        $promise->wait();
    }

    public function getSecretKey()
    {
        /**
         * Реализуем Абстрактную фабрику
         *
         * В конфигах выставляем тип получения ключа
        */
        
        $factory = (new KeyFactory())->getFactory($this->config);
        return $factory->getSecretKey()->get();
    }
}
