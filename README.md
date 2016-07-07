# Omnipay Module

[![Build Status](https://travis-ci.org/ck-developer/omnipay-module.svg?branch=master)](https://travis-ci.org/ck-developer/omnipay-module) [![Latest Stable Version](https://poser.pugx.org/ck-developer/omnipay-module/v/stable)](https://packagist.org/packages/ck-developer/omnipay-module) [![Total Downloads](https://poser.pugx.org/ck-developer/omnipay-module/downloads)](https://packagist.org/packages/ck-developer/omnipay-module) [![Latest Unstable Version](https://poser.pugx.org/ck-developer/omnipay-module/v/unstable)](https://packagist.org/packages/ck-developer/omnipay-module) [![License](https://poser.pugx.org/ck-developer/omnipay-module/license)](https://packagist.org/packages/ck-developer/omnipay-module)

[Omnipay](http://omnipay.thephpleague.com) for Zend Framework 2.

## Installation

1. Install the module via composer by running:

   ```bash
   $ composer require ck-developer/omnipay-module
   ```
2. Add the `OmnipayModule` module to the module section of your `config/application.config.php`.
 
3. Copy `./vendor/ck-developer/omnipay-module/config/omnipay.local.php.dist` to
   `./config/autoload/omnipay.local.php`. Change any settings in it
   according to your needs.