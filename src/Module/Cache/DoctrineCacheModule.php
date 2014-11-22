<?php
/**
 * This file is part of the BEAR.Sunday package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Sunday\Module\Cache;

use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\ArrayCache;
use Ray\Di\AbstractModule;
use Ray\Di\Scope;


class DoctrineCacheModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(Cache::class)->to(ArrayCache::class)->in(Scope::SINGLETON);
    }
}