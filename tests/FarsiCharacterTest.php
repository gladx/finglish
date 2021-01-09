<?php declare(strict_types=1);

use Gladx\Finglish\Finglish;
use PHPUnit\Framework\TestCase;

class FarsiCharacterTest extends TestCase
{
    /**
     * @dataProvider alphabetProvider
     */
    public function testAlphabet($farsi, $english): void
    {
        $this->assertEquals(
            $english,
            Finglish::t($farsi)
        );
    }

    public function alphabetProvider(): array
    {
        return [
            ['ا', 'a'],
            ['ب', 'b'],
            ['پ', 'p'],
            ['۰', '0'],
            ['۱', '1'],
            ['۲', '2'],
            ['۳', '3'],
            ['۴', '4'],
            ['۵', '5'],
            ['۶', '6'],
            ['۷', '7'],
            ['۸', '8'],
            ['۹', '9'],
            ['۰۰', '00'],
            ['۰۱', '01'],
            ['۹۹', '99'],
            ['۰۱۲۳۴۵۶۷۸۹', '0123456789'],
            ['0123456789', '0123456789'],
        ];
    }
}