<?php declare(strict_types=1);

namespace IconLanguageServices\Time;

interface ConvertsToMilliseconds
{
    public function inMilliseconds(): int;
}
