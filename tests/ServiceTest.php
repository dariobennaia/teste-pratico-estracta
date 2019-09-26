<?php
/**
 * Created by PhpStorm.
 * User: dario
 * Date: 25/09/19
 * Time: 21:39
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Services\LaborGuideCrawlerService;

final class ServiceTest extends TestCase
{
    public function testShouldBeReturnArray(): void
    {
        $service = new LaborGuideCrawlerService();
        $this->assertIsArray($service->getNominalsWagesValues());
    }
}
