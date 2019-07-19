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

namespace Ecomteck\SocialLogin\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Ecomteck\SocialLogin\Helper\Data as DataHelper;

/**
 * Class Css
 *
 * @package Ecomteck\SocialLogin\Block
 */
class Css extends Template
{
    /**
     * @type \Ecomteck\SocialLogin\Helper\Data
     */
    protected $_helper;

    /**
     * Css constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Ecomteck\SocialLogin\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        DataHelper $helper,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->_helper = $helper;
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        if ($this->_helper->isEnabled()) {
            if ($this->_helper->getConfigGeneral('popup_login')) {
                $this->pageConfig->addPageAsset('Ecomteck_SocialLogin::css/style.css');
                $this->pageConfig->addPageAsset('Ecomteck_Core::css/grid-ecomteck.css');
                $this->pageConfig->addPageAsset('Ecomteck_Core::css/fontawesome/css/fontawesome-all.min.css');
                $this->pageConfig->addPageAsset('Ecomteck_Core::css/magnific-popup.css');
            } elseif (in_array($this->_request->getFullActionName(), ['customer_account_login', 'customer_account_create'])) {
                $this->pageConfig->addPageAsset('Ecomteck_SocialLogin::css/style.css');
                $this->pageConfig->addPageAsset('Ecomteck_Core::css/fontawesome/css/fontawesome-all.min.css');
            }
        }

        return $this;
    }

    /**
     * @return \Ecomteck\SocialLogin\Helper\Data
     */
    public function helper()
    {
        return $this->_helper;
    }
}
