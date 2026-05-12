<?php
/**
 * Tests for OKXExchange
 */

use PHPUnit\Framework\TestCase;
use Okxexchange\Okxexchange;

class OkxexchangeTest extends TestCase {
    private Okxexchange $instance;

    protected function setUp(): void {
        $this->instance = new Okxexchange(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Okxexchange::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
