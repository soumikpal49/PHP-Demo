<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testIndexPhpOutput()
    {
        ob_start();
        require __DIR__ . '/../index.php';
        $output = ob_get_clean();

        $this->assertEquals("Hello CI/CD", $output);
    }
}
