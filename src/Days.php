<?php declare(strict_types=1);

namespace IconLanguageServices\Time;

final class Days implements ConvertsToSeconds, ConvertsToMilliseconds
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

    public function inMilliseconds(): float
    {
        return $this->inSeconds() * 1000;
    }
}
