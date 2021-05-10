<?php

namespace Ares\Magento\Tests;

use Ares\Magento\Api\Stocks;
use Ares\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class StocksTest extends TestCase
{
    public function test_can_instantiate_stocks()
    {
        $this->assertInstanceOf(Stocks::class, MagentoFacade::api('stocks'));
    }

    public function test_can_call_stocks_all()
    {
        Http::fake([
            '*rest/all/V1/inventory/stocks*' => Http::response([], 200),
        ]);

        $api = MagentoFacade::api('stocks')->all();

        $this->assertTrue($api->ok());
    }
}
