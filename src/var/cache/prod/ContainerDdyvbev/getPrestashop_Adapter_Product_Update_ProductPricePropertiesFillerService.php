<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.update.product_price_properties_filler' shared service.

return $this->services['prestashop.adapter.product.update.product_price_properties_filler'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductPricePropertiesFiller(${($_ = isset($this->services['prestashop.core.util.number.number_extractor']) ? $this->services['prestashop.core.util.number.number_extractor'] : $this->load('getPrestashop_Core_Util_Number_NumberExtractorService.php')) && false ?: '_'});
