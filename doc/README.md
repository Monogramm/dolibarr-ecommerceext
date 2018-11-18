# Documentation Interface Dolibarr / eCommerce

## Installation

You have to rename the folder to `ecommerceext` when you download the zip file or make a git clone. In other case the module will not work.

Requirements:
* PHP minimum version: 5.3
* PHP modules: `php-soap`
* Dolibarr minimum version: 4.0.0
* Dolibarr mandatory modules: `modSociete`, `modProduct`, `modCategorie`
* Dolibarr optionnal modules: `modStock`, `modService`
* Woocommerce minimum version: 3.x+
* Magento minimum version: 2.0

## WooCommerce configuration

Go in WooCommerce Settings:
* Create an API key with read/write permissions and linked to an **admin** user (may be a user specific to for Dolibarr sync)
* Store the API client key and secret for Dolibarr configuration

Go in WordPress Settings:
* Change permalinks to anything **but** simple


## Magento configuration

**Magento synchronization rework is in progress and has been disabled. To enable it, go to `eCommerceSite.class.php` and uncomment the Magento `$siteTypes`.**

Go in Magento System Integrations extension settings :
* Add a new integration with at least access to the "_Sales_", "_Catalog_" and "_Customers_" API
* Store the API consumer key and secret for Dolibarr configuration

To see a product into magento shop, you must have "_Stock Availability_" set to yes.

Note about status in Magento: https://black.bird.eu/fr/blog/comprendre-les-etats-des-commandes-dans-magento.html

## Dolibarr
### Configuration

If you have products without _SKU_, you must go to Dolibarr Products module settings:
* Enable `Elephant` to generate automatically a SKU

Example of automatic SKU format:
* Products: `PDT-{yyyy}{mm}-{000000000@0}`
* Services: `SRV-{yyyy}{mm}-{000000000@0}`

In the "_e-Commerce synchro" settings:
* Configure a new site
* Use the API key and secret you generated in your e-commerce site


### Synchronization

**TODO**

## Debug

It is possible to enable debug tools for this module if `ECOMMERCENG_SHOW_DEBUG_TOOLS` is set to `1`.

