<?php

/*
 * This file is part of the Omnipay Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
    'omnipay' => array(
        'gateways' => array(
            'paypal' => array(
                'factory' => 'PayPal_Express',
                'username' => 'TEST',
                'password' => 'TEST',
                'signature' => 'TEST',
                'testMode' => true,
                'solutionType' => 'Sole',
                'landingPage' => 'Billing',
                'brandName' => '',
                'headerImageUrl' => '',
                'logoImageUrl' => '',
                'borderColor' => '',
            )
        ),
    )
);
