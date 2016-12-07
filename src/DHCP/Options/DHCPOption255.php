<?php
namespace DHCP\Options;

use Psr\Log\LoggerInterface;

/**
 * Class DHCPOption255 - END
 *
 * @package DHCP\Options
 */
class DHCPOption255 extends DHCPOption
{

    /**
     * Option number = 255.
     */
    const OPTION = 255;
    /**
     * {@inheritdoc}
     */
    protected static $name = 'End';
    /**
     * {@inheritdoc}
     */
    protected static $length = 1;

    /**
     * {@inheritdoc}
     */
    public function __construct($length = null, $data = false, LoggerInterface $logger = null)
    {
        parent::__construct($length, $data, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareToSend()
    {
        return array(self::OPTION);
    }

}