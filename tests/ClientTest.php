<?php

use FinvizCrawler\Client;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_return_quote_data()
    {
        $finviz_crawler = new Client();
        print_r($finviz_crawler->quote('OSN'));
        die;
    }
}
