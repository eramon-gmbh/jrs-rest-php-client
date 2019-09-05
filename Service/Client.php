<?php

namespace Jasper\RestClient\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class ClientService
 * @package Jasper\RestClient
 */
class Client
{
    /**
     * @var HttpClientInterface
     */
    private $jasperClient;

    /**
     * ClientService constructor.
     * @param HttpClientInterface $jasperClient
     */
    public function __construct(HttpClientInterface $jasperClient)
    {
        $this->jasperClient = $jasperClient;
    }

    public function getConfiguredClient()
    {
        return $this->jasperClient;
    }
}
