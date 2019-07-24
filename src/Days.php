<?php

namespace IconLanguageServices\Time;

final class Days implements ConvertsToSeconds
{
    const ONE_WEEK = 7;
    const ONE_NON_LEAP_YEAR = 365;

    /**
     * @var int
     */
    private $days;

    public function __construct(int $days)
    {
        $this->days = $days;
    }

    public function inSeconds(): int
    {
        return $this->days * Seconds::ONE_DAY;
    }
}
