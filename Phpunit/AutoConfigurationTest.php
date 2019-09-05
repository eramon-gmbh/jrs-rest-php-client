<?php

namespace Jasper\RestClient\Tests\Phpunit;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpClient\ScopingHttpClient;

/**
 * Class TestConfiguration
 * @package Jasper\RestClient\Tests\Phpunit
 */
class AutoConfigurationTest extends WebTestCase
{
    /**
     * test if jasper.client.service provides already configured scoped HttpClient
     */
    public function testAutoConfiguration()
    {
        self::bootKernel();

        // gets the special container that allows fetching private services
        $container = self::$container;

        $service = $container->get('jasper.client.service');
        $this->assertInstanceOf(ScopingHttpClient::class, $service->getConfiguredClient());
    }
}
