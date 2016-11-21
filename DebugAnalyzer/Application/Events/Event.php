<?php
namespace DebugAnalyzer\Application\Events;

use Exception;

/**
 * Class Event
 * @package DebugAnalyzer\Application\Events
 */
class Event
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $class;
    /**
     * @var Timestamp
     */
    private $timestamp;
    /**
     * @var array
     */
    private $details;

    /**
     * Event constructor.
     * @param string $type
     * @param string $class
     * @param Timestamp $timestamp
     * @param array $details
     */
    public function __construct(string $type, string $class, Timestamp $timestamp, array $details)
    {
        $this->type = $type;
        $this->class = $class;
        $this->timestamp = $timestamp;
        $this->details = $details;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @return Timestamp
     */
    public function getTimestamp(): Timestamp
    {
        return $this->timestamp;
    }

    /**
     * @return array
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param string $key
     * @return mixed
     */
    protected function getDetailsByKey(string $key)
    {
        $this->assertKeyExists($key);
        return $this->details[$key];
    }

    /**
     * @param string $key
     * @throws Exception
     */
    private function assertKeyExists(string $key):void
    {
        if (!array_key_exists($key, $this->details)) {
            throw new Exception(sprintf('Key "%s" is not found in details', $key));
        }
    }
}