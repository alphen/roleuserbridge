<?php 
namespace RoleUserBridge\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use RoleUserBridge\Service\User as UserService;
use Interop\Container\ContainerInterface;


class User implements FactoryInterface{ 
    
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ){
        $service = new UserService();
        $service->setServiceManager($container);
        return $service;
    }
}
?>