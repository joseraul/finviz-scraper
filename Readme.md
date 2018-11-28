[![Build Status](https://travis-ci.org/joseraul/finviz-scraper.svg?branch=master)](https://travis-ci.org/joseraul/finviz-scraper)

### Description
Finviz is one of the most famous stock screener and financial visualizations.

This is an Open Source package that helps to extract information from Finviz, but notice that you do not own the information,
use it only for your personal use.

### Installation

```
composer require joseraul/finviz-crawler
```

### Example of use

#### Quotes

Extract information from `https://finviz.com/quote.ashx?t=AAPL`. Example:

```
$finviz_crawler = new Client();
$data = $finviz_crawler->quote('AAPL');
```

Response
```
Array
(
    [snapshot] => Array
        (
            [Index] => -
            [P/E] => 2.38
            [EPS (ttm)] => 0.81
            [Insider Own] => 100.00%
            [Shs Outstand] => 6.62M
            [Perf Week] => -0.52%
            [Market Cap] => 12.78M
            [Forward P/E] => -
            [EPS next Y] => -
            [Insider Trans] => 0.00%
            [Shs Float] => 0.83M
            [Perf Month] => -6.77%
            [Income] => 5.30M
            [PEG] => -
            [EPS next Q] => -
            [Inst Own] => 1.00%
            [Short Float] => 5.90%
            [Perf Quarter] => -22.16%
            [Sales] => 132.40M
            [P/S] => 0.10
            [EPS this Y] => 10.90%
            [Inst Trans] => -27.41%
            [Short Ratio] => 0.88
            [Perf Half Y] => -28.94%
            [Book/sh] => 15.50
            [P/B] => 0.12
            [ROA] => 3.70%
            [Target Price] => -
            [Perf Year] => -20.32%
            [Cash/sh] => 0.15
            [P/C] => 12.78
            [EPS next 5Y] => -
            [ROE] => 5.60%
            [52W Range] => 1.76 - 8.90
            [Perf YTD] => -32.99%
            [Dividend] => -
            [P/FCF] => -
            [EPS past 5Y] => -5.50%
            [ROI] => 5.50%
            [52W High] => -78.31%
            [Beta] => 1.35
            [Dividend %] => -
            [Quick Ratio] => 4.40
            [Sales past 5Y] => 1.60%
            [Gross Margin] => 11.10%
            [52W Low] => 9.66%
            [ATR] => 0.14
            [Employees] => 209
            [Current Ratio] => 4.80
            [Sales Q/Q] => 22.30%
            [Oper. Margin] => 6.00%
            [RSI (14)] => 45.53
            [Volatility] => 3.19% 5.54%
            [Optionable] => No
            [Debt/Eq] => 0.31
            [EPS Q/Q] => -7.20%
            [Profit Margin] => 4.00%
            [Rel Volume] => 0.01
            [Prev Close] => 1.89
            [Shortable] => Yes
            [LT Debt/Eq] => 0.08
            [Earnings] => Nov 30 AMC
            [Payout] => 0.00%
            [Avg Volume] => 55.83K
            [Price] => 1.93
            [Recom] => -
            [SMA20] => -0.92%
            [SMA50] => -4.17%
            [SMA200] => -22.31%
            [Volume] => 650
            [Change] => 2.12%
        )
)

```


