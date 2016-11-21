<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class Size
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class Size
{
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    /**
     * Size constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
}