<?php namespace SellerCenter\SDK\Common\Waiter;

use GuzzleHttp\Event\AbstractEvent;

/**
 * Class WaitEvent
 *
 * @package SellerCenter\SDK\Common\Waiter
 * @author Daniel Costa
 */
class WaitEvent extends AbstractEvent
{
    /** @var array Waiter configuration options */
    private $config;

    /** @var int Number of attempts the Waiter has made */
    private $attempts;

    /**
     * @param array $config
     * @param int   $attempts
     */
    public function __construct(array $config, $attempts)
    {
        $this->config = $config;
        $this->attempts = (int) $attempts;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }
}
