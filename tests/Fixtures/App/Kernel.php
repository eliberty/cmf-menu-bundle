<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\MenuBundle\Tests\Fixtures\App;

use Knp\Bundle\MenuBundle\KnpMenuBundle;
use Symfony\Cmf\Bundle\MenuBundle\CmfMenuBundle;
use Symfony\Cmf\Bundle\CoreBundle\CmfCoreBundle;
use Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle;
use Symfony\Cmf\Component\Testing\HttpKernel\TestKernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class Kernel extends TestKernel
{
    public function configure(): void
    {
        $this->requireBundleSets([
            'default',
            'phpcr_odm',
        ]);

        $this->addBundles([
            new KnpMenuBundle(),
            new CmfMenuBundle(),
            new CmfCoreBundle(),
            new CmfRoutingBundle(),
        ]);
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__.'/config/config.php');
        $loader->load(__DIR__.'/config/test-services.xml');
    }
}
