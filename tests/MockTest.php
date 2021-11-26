<?php

namespace App\Tests;

use App\Service\SomeService;
use Happyr\ServiceMocking\ServiceMock;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MockTest extends KernelTestCase
{
    /**
     * @test
     */
    public function real_value(): void
    {
        $service = self::getContainer()->get(SomeService::class);

        $this->assertSame('real', $service->getValue());
    }

    /**
     * @test
     */
    public function mock_value(): void
    {
        $service = self::getContainer()->get(SomeService::class);

        ServiceMock::next($service, 'delete', fn() => 'mocked');

        $this->assertSame('mocked', $service->getValue());
    }
}
