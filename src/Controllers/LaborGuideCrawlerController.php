<?php
/**
 * Created by PhpStorm.
 * User: dario
 * Date: 25/09/19
 * Time: 11:18
 */

namespace Src\Controllers;

use Src\Helpers\TemplateHelper;
use Src\Services\LaborGuideCrawlerService;

/**
 * Class LaborGuideCrawlerController
 * @package Src\Controllers
 */
class LaborGuideCrawlerController
{
    /**
     * @var LaborGuideCrawlerService
     */
    private $laborGuideCrawlerService;

    /**
     * LaborGuideCrawlerController constructor.
     * @param LaborGuideCrawlerService $laborGuideCrawlerService
     */
    public function __construct(LaborGuideCrawlerService $laborGuideCrawlerService)
    {
        $this->laborGuideCrawlerService = $laborGuideCrawlerService;
    }

    /**
     * @return string
     */
    public function index()
    {
        $data = $this->laborGuideCrawlerService->getNominalsWagesValues();
        return TemplateHelper::view('show-information-crawler', $data);
    }

    /**
     * @return false|string
     */
    public function show()
    {
        return json_encode($this->laborGuideCrawlerService->getNominalsWagesValues());
    }
}
