<?php
/**
 * Ecomteck
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Ecomteck.com license that is
 * available through the world-wide-web at this URL:
 * https://ecomteck.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Ecomteck
 * @package     Ecomteck_SocialLogin
 * @copyright   Copyright (c) 2018 Ecomteck (https://ecomteck.com/)
 * @license     https://ecomteck.com/LICENSE.txt
 */

namespace Ecomteck\SocialLogin\Controller\Social;

use Magento\Framework\App\Action\Action;

/**
 * Class Callback
 *
 * @package Ecomteck\SocialLogin\Controller\Social
 */
class Callback extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        \Hybrid_Endpoint::process();
    }
}