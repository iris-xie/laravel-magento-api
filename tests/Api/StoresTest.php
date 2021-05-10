<?php

namespace Ares\Magento\Tests;

use Ares\Magento\Api\Stores;
use Ares\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class StoresTest extends TestCase
{
    public function test_can_instantiate_stores()
    {
        $this->assertInstanceOf(Stores::class, MagentoFacade::api('stores'));
    }

    public function test_can_call_stores_websites()
    {
        Http::fake([
            '*rest/all/V1/store/websites*' => Http::response([], 200),
        ]);

        $api = MagentoFacade::api('stores')->websites();

        $this->assertTrue($api->ok());
    }
}
