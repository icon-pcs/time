<?php declare(strict_types=1);

namespace IconLanguageServices\Time;

final class Seconds implements ConvertsToSeconds, ConvertsToMilliseconds
{
    const ONE_MINUTE = 60;
    const ONE_HOUR = 3600;
    const ONE_DAY = 86400;
    const ONE_WEEK = 604800;
    const ONE_NON_LEAP_YEAR = 31536000;

    /**
     * @var int
     */
    private $seconds;

    public function __construct(int $seconds)
    {
        $this->seconds = $seconds;
    }

    public function inSeconds(): int
    {
        return $this->seconds;
    }

    public function inMilliseconds(): float
    {
        return $this->inSeconds() * 1000;
    }
}
