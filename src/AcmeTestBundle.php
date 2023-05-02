<?php

/*
 * This file is part of the SoS Package.
 *
 * (c) Andy MacKay <andy@binarygeometry.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\Bundle\TestBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\Kernel;
/**
 * @author Andy MacKay <andy@binarygeometry.co.uk>
 */
class AcmeTestBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}