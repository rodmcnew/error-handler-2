<?php

namespace RcmErrorHandler2\Factory;

use Interop\Container\ContainerInterface;
use RcmErrorHandler2\Config\BasicConfig;
use RcmErrorHandler2\Config\RcmErrorHandler2Config;

/**
 * Class ConfigRcmErrorHandler2ConfigFactory
 *
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2016 Reliv International
 * @license   License.txt
 * @link      https://github.com/reliv
 */
class ConfigRcmErrorHandler2ConfigFactory
{
    /**
     * __invoke
     *
     * @param ContainerInterface $container
     *
     * @return BasicConfig
     */
    public function __invoke($container)
    {
        $config = $container->get('Config');

        $rcmErrorHandler2Config = [];

        if ($config['RcmErrorHandler2']) {
            $rcmErrorHandler2Config = $config['RcmErrorHandler2'];
        }

        return new RcmErrorHandler2Config(
            $rcmErrorHandler2Config
        );
    }
}
