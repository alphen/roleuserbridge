<?php 
namespace RoleUserBridge\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use RoleUserBridge\Service\User;
use Interop\Container\ContainerInterface;


class User implements FactoryInterface{ 
    
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ){
        $service = new User();
        $service->setServiceManager($container);
        return $service;
    }
}
?>