<?php

namespace Emagia\Models;


interface HeroInterface extends UnitInterface
{
    function setSkills(array $skills);
}