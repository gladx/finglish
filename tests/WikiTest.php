<?php declare(strict_types=1);

use Gladx\Finglish\Finglish;
use PHPUnit\Framework\TestCase;

class WikiTest extends TestCase
{
    /**
     * @dataProvider wikisProvider
     */
    public function testWiki($farsi, $english): void
    {
        $this->assertEquals(
            $english,
            Finglish::t($farsi)
        );
    }

    public function wikisProvider() : array
    {
        return [
            ['آب', 'Ab'],
            ['ایران', 'Iran'],
            ['یکی', 'yeki']
        ];
    }
}