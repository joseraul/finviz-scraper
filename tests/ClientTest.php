<?php

use FinvizCrawler\Client;
use Goutte\Client as Goutte;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class ClientTest extends TestCase
{
    private function getGoutteMock()
    {
        $crawler = new Crawler(null, '');
        $crawler->addContent(
            file_get_contents(getcwd() . '/tests/fake/quote-aapl.html'),
            'text/html; charset=utf-8'
        );

        $goutte_mock = $this
            ->createMock(Goutte::class);
        $goutte_mock->method('request')
            ->willReturn($crawler);

        return $goutte_mock;
    }

    /** @test */
    public function it_return_quote_data()
    {
        $finviz_crawler = new Client(
            $this->getGoutteMock()
        );

        $this->assertEquals([
            'snapshot' => [
                'Index' => 'DJIA S&P500',
                'P/E' => '14.18',
                'EPS (ttm)' => '12.15',
                'Insider Own' => '0.07%',
                'Shs Outstand' => '4.75B',
                'Perf Week' => '-9.99%',
                'Market Cap' => '817.58B',
                'Forward P/E' => '11.62',
                'EPS next Y' => '9.94%',
                'Insider Trans' => '-16.49%',
                'Shs Float' => '4.74B',
                'Perf Month' => '-19.90%',
                'Income' => '61.03B',
                'PEG' => '1.09',
                'EPS next Q' => '4.74',
                'Inst Own' => '61.30%',
                'Short Float' => '0.77%',
                'Perf Quarter' => '-20.30%',
                'Sales' => '265.60B',
                'P/S' => '3.08',
                'EPS this Y' => '32.60%',
                'Inst Trans' => '-2.32%',
                'Short Ratio' => '0.98',
                'Perf Half Y' => '-8.64%',
                'Book/sh' => '22.31',
                'P/B' => '7.72',
                'ROA' => '16.00%',
                'Target Price' => '233.88',
                'Perf Year' => '-1.53%',
                'Cash/sh' => '13.97',
                'P/C' => '12.33',
                'EPS next 5Y' => '13.00%',
                'ROE' => '48.70%',
                '52W Range' => '150.24 - 233.47',
                'Perf YTD' => '1.81%',
                'Dividend' => '2.92',
                'P/FCF' => '16.22',
                'EPS past 5Y' => '16.50%',
                'ROI' => '26.60%',
                '52W High' => '-26.20%',
                'Beta' => '1.23',
                'Dividend %' => '1.69%',
                'Quick Ratio' => '1.10',
                'Sales past 5Y' => '9.20%',
                'Gross Margin' => '38.30%',
                '52W Low' => '14.68%',
                'ATR' => '6.94',
                'Employees' => '132000',
                'Current Ratio' => '1.10',
                'Sales Q/Q' => '19.60%',
                'Oper. Margin' => '26.70%',
                'RSI (14)' => '27.09',
                'Volatility' => '2.82% 2.95%',
                'Optionable' => 'Yes',
                'Debt/Eq' => '1.07',
                'EPS Q/Q' => '30.00%',
                'Profit Margin' => '22.40%',
                'Rel Volume' => '0.64',
                'Prev Close' => '176.78',
                'Shortable' => 'Yes',
                'LT Debt/Eq' => '0.87',
                'Earnings' => 'Nov 01 AMC',
                'Payout' => '22.70%',
                'Avg Volume' => '37.10M',
                'Price' => '172.29',
                'Recom' => '2.00',
                'SMA20' => '-14.63%',
                'SMA50' => '-19.43%',
                'SMA200' => '-11.21%',
                'Volume' => '23,623,423',
                'Change' => '-2.54%',
            ]
        ],
            $finviz_crawler->quote('APPL')
        );
    }
}
