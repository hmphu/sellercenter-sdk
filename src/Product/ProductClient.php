<?php

namespace SellerCenter\SDK\Product;

use SellerCenter\SDK\Common\SdkClient;

/**
 * Class ProductClient
 *
 * @package SellerCenter\SDK\Product
 * @author  Daniel Costa
 */
class ProductClient extends SdkClient implements ProductInterface
{
    /**
     * @var string
     */
    protected $action = 'Product';

    public function price(Product $product)
    {
        $data = [
            'Request' => $product->toArray()
        ];
        return $this->execute($this->getCommand(ucfirst(__FUNCTION__), $data));
    }

    public function image(Image $image)
    {
        $data = [
            'Request' => $image->toArray()
        ];
        return $this->execute($this->getCommand(ucfirst(__FUNCTION__), $data));
    }

    public function productAdd(Product $product)
    {
        $data = [
            'Request' => $product->toArray()
        ];
        return $this->execute($this->getCommand(ucfirst(__FUNCTION__), $data));
    }

    public function productUpdate(ProductCollection $collection)
    {
        $data = [
            'Request' => $collection->toArray()
        ];
        return $this->execute($this->getCommand(ucfirst(__FUNCTION__), $data));
    }

    public function productRemove(ProductCollection $collection)
    {
        $data = [
            'Request' => $collection->toArray()
        ];
        return $this->execute($this->getCommand(ucfirst(__FUNCTION__), $data));
    }
}