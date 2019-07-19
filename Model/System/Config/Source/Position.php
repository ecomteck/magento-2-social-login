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

namespace Ecomteck\SocialLogin\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Position
 *
 * @package Ecomteck\SocialLogin\Model\System\Config\Source
 */
class Position implements ArrayInterface
{
    const PAGE_LOGIN = 1;
    const PAGE_CREATE = 2;
    const PAGE_POPUP = 3;
    const PAGE_AUTHEN = 4;
    const PAGE_CHECKOUT = 5;

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '', 'label' => __('-- Please Select --')],
            ['value' => self::PAGE_LOGIN, 'label' => __('Customer Login Page')],
            ['value' => self::PAGE_CREATE, 'label' => __('Customer Create Page')],
            ['value' => self::PAGE_POPUP, 'label' => __('Social Popup Login')],
            ['value' => self::PAGE_AUTHEN, 'label' => __('Customer Authentication Popup')],
            ['value' => self::PAGE_CHECKOUT, 'label' => __('Checkout Page')],
        ];
    }
}
