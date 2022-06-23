<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app->get(
    '/dev/tests/functional/credentials.xml.dist',
    function (Request $request, Response $response) {
        $response->getBody()->write(
            '<?xml version="1.0"?>
            <!--
            /**
             * Magento
             *
             * NOTICE OF LICENSE
             *
             * This source file is subject to the Open Software License (OSL 3.0)
             * that is bundled with this package in the file LICENSE.txt.
             * It is also available through the world-wide-web at this URL:
             * http://opensource.org/licenses/osl-3.0.php
             * If you did not receive a copy of the license and are unable to
             * obtain it through the world-wide-web, please send an email
             * to license@magento.com so we can send you a copy immediately.
             *
             * DISCLAIMER
             *
             * Do not edit or add to this file if you wish to upgrade Magento to newer
             * versions in the future. If you wish to customize Magento for your
             * needs please refer to http://www.magento.com for more information.
             *
             * @category    Tests
             * @package     Tests_Functional
             * @copyright  Copyright (c) 2006-2016 X.commerce, Inc. and affiliates (http://www.magento.com)
             * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
             */
            -->
            <replace xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                     xsi:noNamespaceSchemaLocation="./vendor/magento/mtf/Magento/Mtf/Fixture/InjectableFixture/etc/replace.xsd">
            
                <field path="section/payment_payflow_link_payflow_link_user/value" value="" />
                <field path="section/payment_payflow_link_payflow_link_pwd/value" value="" />
                <field path="section/payment_payflow_link_payflow_link_vendor/value" value="" />
                <field path="section/payment_payflow_link_express_checkout_business_account/value" value="" />
                <field path="section/payment_payflow_link_express_checkout_api_username/value" value="" />
                <field path="section/payment_payflow_link_express_checkout_api_password/value" value="" />
                <field path="section/payment_payflow_link_express_checkout_api_signature/value" value="" />
            
                <field path="section/payment_express_checkout_required_express_checkout_business_account/value" value="" />
                <field path="section/payment_express_checkout_required_express_checkout_api_username/value" value="" />
                <field path="section/payment_express_checkout_required_express_checkout_api_password/value" value="" />
                <field path="section/payment_express_checkout_required_express_checkout_api_signature/value" value="" />
            
                <field path="section/payment_wps_express_checkout_required_express_checkout_business_account/value" value="" />
                <field path="section/payment_wps_express_checkout_required_express_checkout_api_username/value" value="" />
                <field path="section/payment_wps_express_checkout_required_express_checkout_api_password/value" value="" />
                <field path="section/payment_wps_express_checkout_required_express_checkout_api_signature/value" value="" />
            
                <field path="section/payment_wpp_and_express_checkout_business_account/value" value=""/>
                <field path="section/payment_wpp_and_express_checkout_api_username/value" value=""/>
                <field path="section/payment_wpp_and_express_checkout_api_password/value" value=""/>
                <field path="section/payment_wpp_and_express_checkout_api_signature/value" value=""/>
            
                <field path="section/payment_paypal_payflow_api_settings_business_account/value" value=""/>
                <field path="section/payment_paypal_payflow_api_settings_user/value" value=""/>
                <field path="section/payment_paypal_payflow_api_settings_vendor/value" value=""/>
                <field path="section/payment_paypal_payflow_api_settings_pwd/value" value=""/>
            
                <field path="section/payment_authorizenet_login/value" value=""/>
                <field path="section/payment_authorizenet_trans_key/value" value=""/>
                <field path="section/payment_authorizenet_cgi_url/value" value=""/>
            
                <field path="section/payment_payments_advanced_vendor/value" value=""/>
                <field path="section/payment_payments_advanced_user/value" value=""/>
                <field path="section/payment_payments_advanced_pwd/value" value=""/>
                <field path="section/payment_express_business_account/value" value=""/>
                <field path="section/payment_express_api_username/value" value=""/>
                <field path="section/payment_express_api_password/value" value=""/>
                <field path="section/payment_express_api_signature/value" value=""/>
            
                <field path="section/payment_pphs_required_settings_pphs_business_account/value" value=""/>
                <field path="section/payment_pphs_required_settings_pphs_api_username/value" value=""/>
                <field path="section/payment_pphs_required_settings_pphs_api_password/value" value=""/>
                <field path="section/payment_pphs_required_settings_pphs_api_signature/value" value=""/>
            
                <field path="section/payment_authorizenet_directpost_login/value" value=""/>
                <field path="section/payment_authorizenet_directpost_trans_key/value" value=""/>
                <field path="section/payment_authorizenet_directpost_trans_md5/value" value=""/>
                <field path="section/payment_authorizenet_directpost_cgi_url/value" value=""/>
            
                <field replace="PAYPAL_EMAIL" value="" />
                <field replace="PAYPAL_PASSWORD" value="" />
            
                <field path="section/payment_services_centinel_processor_id/value" value=""/>
                <field path="section/payment_services_centinel_merchant_id/value" value=""/>
                <field path="section/payment_services_centinel_password/value" value=""/>
            
                <field replace="CC_VISA_1" value="" />
                <field replace="CC_VISA_2" value="" />
                <field replace="CC_VISA_3" value="" />
                <field replace="CC_VISA_4" value="" />
            
                <field replace="VALIDATION_PASSWORD" value="" />
            
                <field path="section/carriers_ups_password/value" value=""/>
                <field path="section/carriers_ups_username/value" value=""/>
                <field path="section/carriers_ups_access_license_number/value" value=""/>
                <field path="section/carriers_ups_shipper_number/value" value=""/>
            
                <field path="section/carriers_usps_userid/value" value=""/>
                <field path="section/carriers_usps_password/value" value=""/>
            
                <field path="section/carriers_fedex_account/value" value=""/>
                <field path="section/carriers_fedex_meter_number/value" value=""/>
                <field path="section/carriers_fedex_key/value" value=""/>
                <field path="section/carriers_fedex_password/value" value=""/>
            
                <field path="section/carriers_dhlint_id/value" value=""/>
                <field path="section/carriers_dhlint_password/value" value=""/>
                <field path="section/carriers_dhlint_account/value" value=""/>
            
                <field path="section/payment_authorizenet_login/value" value=""/>
                <field path="section/payment_authorizenet_trans_key/value" value=""/>
            </replace>'
        );
        return $response->withHeader("content-type", "application/xml")
            ->withStatus(200);
    }
);
