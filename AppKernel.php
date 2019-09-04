<?php

namespace Jasper\RestClient;

use Symfony\Bundle\DebugBundle\DebugBundle;
use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Bundle\WebServerBundle\WebServerBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class AppKernel
 * @package Jasper\RestClient
 */
class AppKernel extends Kernel
{
    /**
     * @return array
     */
    public function registerBundles(): array
    {
        $bundles = [
            new JasperRestClientBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new DebugBundle();
            $bundles[] = new WebProfilerBundle();
            $bundles[] = new WebServerBundle();
        }

        return $bundles;
    }

    /**
     * @return string
     */
    public function getRootDir(): string
    {
        return $this->getProjectDir().'/app';
    }

    /**
     * @return string
     */
    public function getCacheDir(): string
    {
        return $this->getProjectDir().'/var/cache/'.$this->getEnvironment();
    }

    /**
     * @return string
     */
    public function getLogDir(): string
    {
        return $this->getProjectDir().'/var/logs';
    }

    /**
     * @param LoaderInterface $loader
     * @throws \Exception
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }

    /**
     * @return string
     */
    public function getProjectDir(): string
    {
        return __DIR__;
    }
}
