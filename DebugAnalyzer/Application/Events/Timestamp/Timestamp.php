<?php
namespace DebugAnalyzer\Application\Events;

/**
 * Class Timestamp
 * @package DebugAnalyzer\Application\EventsByType
 */
class Timestamp
{
    /**
     * @var string
     */
    private $date;
    /**
     * @var int
     */
    private $timeZoneType;
    /**
     * @var string
     */
    private $timeZone;

    /**
     * Timestamp constructor.
     * @param string $date
     * @param int $timeZoneType
     * @param string $timeZone
     */
    public function __construct(string $date, int $timeZoneType, string $timeZone)
    {

        $this->date = $date;
        $this->timeZoneType = $timeZoneType;
        $this->timeZone = $timeZone;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getTimeZoneType(): int
    {
        return $this->timeZoneType;
    }

    /**
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }
}