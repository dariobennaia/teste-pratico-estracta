<?php
/**
 * Created by PhpStorm.
 * User: dario
 * Date: 25/09/19
 * Time: 21:39
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Controllers\LaborGuideCrawlerController;
use Src\Services\LaborGuideCrawlerService;

final class ControllerTest extends TestCase
{
    public function testReturnIndex(): void
    {
        $service = $this->createMock(LaborGuideCrawlerService::class);

        $controller = new LaborGuideCrawlerController($service);

        $this->assertEquals('', $controller->index());
    }

    public function testReturnShow(): void
    {
        $service = $this->createMock(LaborGuideCrawlerService::class);

        $controller = new LaborGuideCrawlerController($service);

        $this->assertIsString($controller->show());
    }
}
