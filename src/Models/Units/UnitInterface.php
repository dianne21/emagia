<?php

namespace Emagia\Models;

interface UnitInterface
{
    function setHealth(int $health);

    function setStrength(int $strength);

    function setDefence(int $defence);

    function setSpeed(int $speed);

    function setLuck(int $luck);

    function __toString();
}