<?php

/**
 * Предполагаю, что XMLHTTPRequestService - абстрактный класс,
 * Если нет, вместо него надо объявить интерфейс и передавать его(интерфейс) в __construct
 */
class XMLHttpServiceV1 extends XMLHTTPRequestService
{
}

class HttpV1
{
    private XMLHTTPRequestService $service;

    public function __construct(XMLHTTPRequestService $xmlHttpService)
    {
    }

    public function get(string $url, array $options)
    {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url)
    {
        $this->service->request($url, 'GET');
    }
}

/**
 * Второй вариант реализации через интерфейс
 */
interface RequestServiceInterface
{
    public function request();
}

class XMLHttpServiceV2 implements RequestServiceInterface
{
    public function request()
    {
    }
}

class HttpV2
{
    private RequestServiceInterface $service;

    public function __construct(RequestServiceInterface $xmlHttpService)
    {
        $this->service = $xmlHttpService;
    }

    public function get(string $url, array $options)
    {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url)
    {
        $this->service->request($url, 'GET');
    }
}