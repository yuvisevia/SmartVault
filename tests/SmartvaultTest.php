<?php
/**
 * Tests for SmartVault
 */

use PHPUnit\Framework\TestCase;
use Smartvault\Smartvault;

class SmartvaultTest extends TestCase {
    private Smartvault $instance;

    protected function setUp(): void {
        $this->instance = new Smartvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
