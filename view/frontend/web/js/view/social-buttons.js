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
/*jshint browser:true jquery:true*/
/*global alert*/
define(
    [
        'jquery',
        'ko',
        'uiComponent',
        'socialProvider'
    ],
    function ($, ko, Component, socialProvider) {
        'use strict';

        ko.bindingHandlers.socialButton = {
            init: function (element, valueAccessor, allBindings) {
                var config = {
                    url: allBindings.get('url'),
                    label: allBindings.get('label')
                };

                socialProvider(config, element);
            }
        };

        return Component.extend({
            defaults: {
                template: 'Ecomteck_SocialLogin/social-buttons'
            },
            buttonLists: window.socialAuthenticationPopup,

            socials: function () {
                var socials = [];

                $.each(this.buttonLists, function (key, social) {
                    socials.push(social);
                });

                return socials;
            },

            isActive: function () {
                return (typeof this.buttonLists !== 'undefined');
            }
        });
    }
);
