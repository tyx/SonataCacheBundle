<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CacheBundle\Invalidation;

use Sonata\CacheBundle\Cache\CacheElement;
use Sonata\CacheBundle\Cache\CacheInterface;

interface InvalidationInterface
{
  /**
   * @abstract
   * @param array $caches
   * @param \Sonata\CacheBundle\Cache\CacheElement $cacheElement
   * @return void
   */
    function invalidate(array $caches, CacheElement $cacheElement);
}