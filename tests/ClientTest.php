<?php

use FinvizCrawler\Client;
use Goutte\Client as Crawler;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    private function getGoutteMock()
    {
        $crawler_client = $this
            ->getMockBuilder(Crawler::class)
            ->setMethods(['request'])
            ->getMock();
/*
        $crawler_client
            ->expects($this->once())
            ->method('get')
            ->with(
                'https://www.alphavantage.co/query', [
                    'query' => $query_arguments
                ]
            )
            ->willReturn($response);
*/
        return $crawler_client;
    }

    /** @test */
    public function it_return_quote_data()
    {
        $finviz_crawler = new Client(
            $this->getGoutteMock()
        );

        print_r($finviz_crawler->quote('OSN'));
        die;
    }
}
