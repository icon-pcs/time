<?php
declare(strict_types=1);

namespace IconLanguageServices\Time;

final class Minutes implements ConvertsToSeconds
{
    const ONE_HOUR = 60;
    const ONE_DAY = 1440;
    const ONE_WEEK = 10080;
    const ONE_NON_LEAP_YEAR = 525600;

    /**
     * @var int
     */
    private $minutes;

    public function __construct(int $minutes)
    {
        $this->minutes = $minutes;
    }

    public function inSeconds(): int
    {
        return $this->minutes * Seconds::ONE_MINUTE;
    }
}
