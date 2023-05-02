<?php
namespace Acme\Bundle\TestBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class AcmeTestExtension extends Extension // https://symfonycasts.com/screencast/symfony-bundle/bundle-services
{
    public function load(array $configs, ContainerBuilder $containerBuilder)
    {
        // var_dump('We\'re alive!');die;
        // ... you'll load the files here later
        // $loader = new XmlFileLoader(
        //     $containerBuilder,
        //     new FileLocator(__DIR__.'/../Resources/config')
        // );
        // $loader->load('services.xml');
        $loader = new XmlFileLoader($containerBuilder, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}