<?php
namespace App\Test\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Robots Test
 */
class RobotsTest extends TestCase
{
    /** @var string */
    protected $folder;
    /** @var string */
    protected $file;

    protected function setUp(): void
    {
        $webroot = join(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'webroot']) . DIRECTORY_SEPARATOR;
        $this->folder = $webroot;
        $this->file = 'robots.txt';
    }

    /**
     * Check that the file exists
     *
     * @return void
     */
    public function testRobotsFileExists(): void
    {
        $this->assertFileExists($this->folder . $this->file);
    }

    /**
     * Check that the file is not empty
     *
     * @depends testRobotsFileExists
     */
    public function testRobotsFileIsNotEmpty(): void
    {
        $content = file_get_contents($this->folder . $this->file);
        $content = $content ? trim($content) : '';
        $this->assertFalse(empty($content), $this->file . " file is empty in " . $this->folder);
    }
}
