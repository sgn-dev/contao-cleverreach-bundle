<?php

namespace SgnDev\ContaoCleverreachBundle\Http\Cleverreach;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiClient
{
    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function testRequest()
    {
        dump($this); exit;
    }
}