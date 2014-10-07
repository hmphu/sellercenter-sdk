<?php

namespace SellerCenter\SDK\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Zend\Uri\Uri;

/**
 * Class Uri Collection
 *
 * @package SellerCenter\SDK\Collection
 * @author  Daniel Costa
 */
class UriCollection extends ArrayCollection
{
    /**
     * {@inheritDoc}
     */
    public function add($value)
    {
        if (!($value instanceof Uri)) {
            throw new \InvalidArgumentException(
                'Value is not a valid instance of Zend\Uri\Uri, ' . gettype($value) . ' passed'
            );
        }

        return parent::add($value);
    }
}
