<?php

namespace Ares\Magento\Tests;

use Ares\Magento\Api\ProductLinkType;
use Ares\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class ProductLinkTypeTest extends TestCase
{
    public function test_can_call_product_link_type()
    {
        $this->assertInstanceOf(ProductLinkType::class, MagentoFacade::api('productLinkType'));
    }

    public function test_can_call_product_link_type_types()
    {
        Http::fake();

        $api = MagentoFacade::api('productLinkType')->types();

        $this->assertTrue($api->ok());
    }
}
