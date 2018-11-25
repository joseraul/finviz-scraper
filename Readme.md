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
```
$finviz_crawler = new Client();
$data = $finviz_crawler->quote('OSN');
```


