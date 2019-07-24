<?php
declare(strict_types=1);

namespace IconLanguageServices\Time;

interface ConvertsToSeconds
{
    public function inSeconds(): int;
}
