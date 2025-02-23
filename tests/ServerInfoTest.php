<?php

namespace Jaspersoft\Tests;

use Jaspersoft\Tool\TestUtils as u;

/**
 * Class ServerInfoTest
 * @package Jaspersoft\Tests
 */
class ServerInfoTest extends BaseTest
{
    protected $jc;
    protected $newUser;

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function testServerInfo()
    {
        $info = $this->jc->serverInfo();
        $this->assertTrue(isset($info['version']));
    }
}
