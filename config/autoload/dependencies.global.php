<?php
use Zend\Expressive\Application;
use Zend\Expressive\Container\ApplicationFactory;
use Zend\Expressive\Helper;

return [
    'dependencies' => [
        'invokables' => [
            Helper\ServerUrlHelper::class => Helper\ServerUrlHelper::class,
        ],
        'factories' => [
            Application::class => ApplicationFactory::class,
            Helper\UrlHelper::class => Helper\UrlHelperFactory::class,
            Doctrine\Common\Cache\Cache::class => App\Container\DoctrineRedisCacheFactory::class,
            Doctrine\ORM\EntityManager::class  => App\Container\DoctrineFactory::class,
            App\Filter\Postcode::class         => App\Filter\PostcodeFactory::class,
        ],
    ],
];
