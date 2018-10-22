<?php

namespace FinvizCrawler;

use Goutte\Client as Crawler;

class Client
{
    protected $crawler;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->crawler = new Crawler();
    }

    /**
     * @param $symbol
     * @return array
     */
    public function quote($symbol)
    {
        $response = $this->crawler
            ->request('GET', 'https://finviz.com/quote.ashx?t=' . $symbol);

        return [
            'snapshot' => $this->getSnapshot($response)
        ];
    }

    private function getSnapshot($response)
    {
        $data = [];
        $is_value = false;
        $field_name = '';

        $response
            ->filter('.snapshot-table2 > tr > td')
            ->each(function ($node) use (&$data, &$is_value, &$field_name) {

            if ($is_value) {
                $data[$field_name] = $node->text();
            } else {
                $field_name = $node->text();
            }

            $is_value = !$is_value;
        });

        return $data;
    }
}