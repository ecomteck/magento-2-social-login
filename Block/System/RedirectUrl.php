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

namespace Ecomteck\SocialLogin\Block\System;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field as FormField;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Ecomteck\SocialLogin\Helper\Social as SocialHelper;

/**
 * Class Redirect
 *
 * @package Ecomteck\SocialLogin\Block\System
 */
class RedirectUrl extends FormField
{
    /**
     * @type \Ecomteck\SocialLogin\Helper\Social
     */
    protected $socialHelper;

    /**
     * RedirectUrl constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Ecomteck\SocialLogin\Helper\Social $socialHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        SocialHelper $socialHelper,
        array $data = []
    )
    {
        $this->socialHelper = $socialHelper;
        parent::__construct($context, $data);
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $elementId   = explode('_', $element->getHtmlId());
        $redirectUrl = $this->socialHelper->getAuthUrl($elementId[1]);
        $html        = '<input style="opacity:1;" readonly id="' . $element->getHtmlId() . '" class="input-text admin__control-text" value="' . $redirectUrl . '" onclick="this.select()" type="text">';

        return $html;
    }
}
