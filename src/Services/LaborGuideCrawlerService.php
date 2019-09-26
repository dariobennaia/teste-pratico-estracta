<?php

namespace Src\Services;

use GuzzleHttp\Client as Guzzle;
use Src\Helpers\ReplaceHelper;
use Symfony\Component\DomCrawler\Crawler;

class LaborGuideCrawlerService
{
    const URL = 'http://www.guiatrabalhista.com.br/guia/salario_minimo.htm';
    private $crawler;

    /**
     * CrawlersDiversosService constructor.
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __construct()
    {
        $guzzle = new Guzzle();
        $request = $guzzle->request('GET', self::URL);
        $request = (string)$request->getBody();
        $this->crawler = new Crawler($request);
    }

    /**
     * @return array
     */
    public function getNominalsWagesValues(): array
    {
        $table = $this->getTableInfo();
        $result = [];
        foreach ($table['tbody'] as $data) {
            $result[] = array_combine($table['thead'], $data);
        }
        return $result;
    }

    /**
     * @return array
     */
    private function getTableInfo(): array
    {
        $crawler = $this->crawler;

        $table = $crawler->filter('#content')->filter('table')->each(function ($table, $i) {
            $data = [];
            $table->filter('tr')->filter('td')->each(function ($th, $i) use (&$data) {
                $value = trim($th->text());
                return $data[($i <= 5) ? 'thead' : 'tbody'][] = ($i <= 5) ? ReplaceHelper::normalize($value) : $value;
            });
            return $data;
        })[0];

        return [
            'thead' => $table['thead'],
            'tbody' => array_chunk($table['tbody'], count($table['thead']))
        ];
    }
}
