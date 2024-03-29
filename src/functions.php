<?php declare(strict_types=1);

namespace IconLanguageServices\Time;

function hours(int $hours): Hours
{
    return new Hours($hours);
}

function minutes(int $minutes): Minutes
{
    return new Minutes($minutes);
}

function days(int $days): Days
{
    return new Days($days);
}

function seconds(int $seconds): Seconds
{
    return new Seconds($seconds);
}
