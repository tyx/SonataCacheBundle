<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CacheBundle\Cache;

interface CacheInterface
{
    /**
     * @param array $key
     * @return CacheElement
     */
    function get(array $keys);

    /**
     * @param array $key
     * @return boolean
     */
    function has(array $keys);

    /**
     * @param array $key
     * @return CacheElement
     */
    function set(array $keys, $value, $ttl = 84600);

    /**
     * @param array $keys
     * @return void
     */
    function flush(array $keys = array());

    /**
     * @return void
     */
    function flushAll();

    /**
     * @return void
     */
    function isContextual();
}