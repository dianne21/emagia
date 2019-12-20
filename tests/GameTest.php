<?php
declare(strict_types=1);

namespace Emagia;


use Emagia\Models\Types\Orderus;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    private Orderus $hero;
    private WildBeast $beast;

    protected function setUp()
    {
        $this->hero = new Orderus();
//        $this->beast = new WildBeast();
    }

    public function test()
    {

    }
}
