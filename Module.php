<?php
/**
 * @link https://github.com/old-town/zf2-metadata-generator
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Zf2MetadataGenerator;



use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\LocatorRegisteredInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;

/**
 * Class Module
 *
 * @package OldTown\EventBus
 */
class Module implements
    LocatorRegisteredInterface,
    BootstrapListenerInterface,
    ConfigProviderInterface,
    AutoloaderProviderInterface,
    ConsoleUsageProviderInterface,
    ConsoleBannerProviderInterface
{
    /**
     * @param EventInterface $e
     *
     * @return array|void
     */
    public function onBootstrap(EventInterface $e)
    {
        /** @var MvcEvent $e */
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }


    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * @param Console $console
     *
     * @return string
     */
    public function getConsoleBanner(Console $console){
        return 'Generator Metadata fof PhpStorm Module';
    }

    /**
     * @param Console $console
     *
     * @return array
     */
    public function getConsoleUsage(Console $console){
        //description command
        return array(
            'generate' => 'Generate .phpstorm.meta'
        );
    }
} 