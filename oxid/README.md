# OXID eShop module for Mondu Payment

### Installation

##### Manual installation

1. Switch to the shop modules directory (`<shop_directory>/source/modules`)

2. Create `mondu/bnpl-checkout-oxid` directory inside modules directory

3. Copy folder content to `<shop_directory>/source/modules/mondu/buyer-fee-cents`

   > NOTE: After this step, you should be able to see all module code inside of this directory

4. Navigate back to root directory of shop (`shop_directory`)

5. Register module package in project composer.json (in root directory of shop)

```
composer config repositories.mondu/buyer-fee-cents path source/modules/mondu/buyer-fee-cents

composer require mondu/bnpl-checkout-oxid

vendor/bin/oe-console oe:module:activate oemonduextension
```
7. Overwrite <plugin_directory>/BuyerFeeCents.php classes methods.