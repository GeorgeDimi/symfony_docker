<?php

namespace ContainerI9Z8KJD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdressRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AdressRepository' shared autowired service.
     *
     * @return \App\Repository\AdressRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/AdressRepository.php';

        return $container->privates['App\\Repository\\AdressRepository'] = new \App\Repository\AdressRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
