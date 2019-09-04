<?php

namespace Jaspersoft\Tests;

use Jaspersoft\Client\Client as c;
use PHPUnit\Framework\TestCase;

/**
 * Class BaseTest
 * @package Jaspersoft\Tests
 */
class BaseTest extends TestCase
{
    /**
     * @var array|bool
     */
    public $bootstrap;

    public function setUp()
    {
        $this->bootstrap = parse_ini_file(dirname(__FILE__) . '/test.properties');
        $this->jc = new c(
            $this->bootstrap['hostname'],
            $this->bootstrap['admin_username'],
            $this->bootstrap['admin_password'],
            $this->bootstrap['admin_org']
        );
    }

    public function createSuperClient()
    {
        $this->jcSuper = new c(
            $this->bootstrap['hostname'],
            $this->bootstrap['super_username'],
            $this->bootstrap['super_password']
        );
    }

}
