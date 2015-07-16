<?php namespace SellerCenter\SDK\Product;

use InvalidArgumentException;
use JMS\Serializer\Annotation as JMS;

/**
 * Price Trait
 *
 * @package SellerCenter\SDK\Product
 * @author  Daniel Costa
 */
trait PriceTrait
{
    /**
     * An optional number with the price of the product
     *
     * @var float
     * @JMS\SerializedName("Price")
     * @JMS\Type("double")
     * @JMS\AccessType("public_method")
     */
    protected $price;

    /**
     * A special sale price
     *
     * @var float
     * @JMS\SerializedName("SalePrice")
     * @JMS\Type("double")
     * @JMS\AccessType("public_method")
     */
    protected $salePrice;

    /**
     * Starting date for the sale
     *
     * @var \DateTime
     * @JMS\SerializedName("SaleStartDate")
     * @JMS\Type("string")
     * @JMS\AccessType("public_method")
     */
    protected $saleStartDate;

    /**
     * Ending date for the sale
     *
     * @var \DateTime
     * @JMS\SerializedName("SaleEndDate")
     * @JMS\Type("string")
     * @JMS\AccessType("public_method")
     */
    protected $saleEndDate;

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        if (!is_float($price)) {
            throw new InvalidArgumentException(
                'Price is not a valid float, ' . gettype($price) . ' passed'
            );
        }

        if ($price) {
            $this->price = $price;
        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleEndDate()
    {
        return $this->saleEndDate;
    }

    /**
     * @param \DateTime $saleEndDate
     *
     * @return Product
     */
    public function setSaleEndDate($saleEndDate)
    {
        if (!empty($saleEndDate)) {
            if (!($saleEndDate instanceof \DateTime)) {
                throw new InvalidArgumentException(
                    'Sale end date is not an instance of DateTime'
                );
            }

            $this->saleEndDate = $saleEndDate;
        }

        return $this;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param float $salePrice
     *
     * @return Product
     */
    public function setSalePrice($salePrice)
    {
        if (!is_float($salePrice)) {
            throw new InvalidArgumentException(
                'Sale price is not a valid float, ' . gettype($salePrice) . ' passed'
            );
        }

        if ($salePrice) {
            $this->salePrice = $salePrice;
        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleStartDate()
    {
        return $this->saleStartDate;
    }

    /**
     * @param \DateTime $saleStartDate
     *
     * @return Product
     */
    public function setSaleStartDate($saleStartDate)
    {
        if (!empty($saleStartDate)) {
            if (!($saleStartDate instanceof \DateTime)) {
                throw new InvalidArgumentException(
                    'Sale start date is not an instance of DateTime'
                );
            }

            $this->saleStartDate = $saleStartDate;
        }

        return $this;
    }
}
