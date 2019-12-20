<?php

namespace Emagia\Models;


abstract class Hero implements HeroInterface
{

    function setSkills(array $skills)
    {
        // TODO: Implement setSkills() method.
    }

    function setHealth(int $health)
    {
        // TODO: Implement setHealth() method.
    }

    function setStrength(int $strength)
    {
        // TODO: Implement setStrength() method.
    }

    function setDefence(int $defence)
    {
        // TODO: Implement setDefence() method.
    }

    function setSpeed(int $speed)
    {
        // TODO: Implement setSpeed() method.
    }

    function setLuck(int $luck)
    {
        // TODO: Implement setLuck() method.
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}