<?php
# src/Doctrine/ORM/ProductRepository.php

declare(strict_types=1);

namespace App\Repository;

use Loevgaard\SyliusBrandPlugin\Doctrine\ORM\ProductRepositoryInterface as LoevgaardSyliusBrandPluginProductRepositoryInterface;
use Loevgaard\SyliusBrandPlugin\Doctrine\ORM\ProductRepositoryTrait as LoevgaardSyliusBrandPluginProductRepositoryTrait;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;

class ProductRepository extends BaseProductRepository implements LoevgaardSyliusBrandPluginProductRepositoryInterface
{
    use LoevgaardSyliusBrandPluginProductRepositoryTrait;

    // ...
}