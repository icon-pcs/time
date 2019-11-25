<?php declare(strict_types=1);

namespace IconLanguageServices\Time;

final class Hours implements ConvertsToSeconds, ConvertsToMilliseconds
{
    const ONE_DAY = 24;
    const ONE_WEEK = 168;
    const ONE_NON_LEAP_YEAR = 8760;
    /**
     * @var int
     */
    private $hours;

    public function __construct(int $hours)
    {
        $this->hours = $hours;
    }

    public function inSeconds(): int
    {
        return $this->hours * Seconds::ONE_HOUR;
    }

    public function inMilliseconds(): int
    {
        return $this->inSeconds() * 1000;
    }
}
