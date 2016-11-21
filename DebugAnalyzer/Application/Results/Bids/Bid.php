<?php
namespace DebugAnalyzer\Application\Results\Bids;

/**
 * Class Bid
 * @package DebugAnalyzer\Application\Results\Bids
 */
class Bid
{
    /**
     * @var string
     */
    private $bidId;
    /**
     * @var float
     */
    private $cpm;
    /**
     * @var string
     */
    private $nurl;
    /**
     * @var string
     */
    private $adm;
    /**
     * @var string
     */
    private $placementCode;
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    /**
     * Bid constructor.
     * @param string $bidId
     * @param float $cpm
     * @param string $nurl
     * @param string $adm
     * @param string $placementCode
     * @param int $width
     * @param int $height
     */
    public function __construct(
        string $bidId,
        float $cpm,
        string $nurl,
        string $adm,
        string $placementCode,
        int $width,
        int $height
    ) {
        $this->bidId = $bidId;
        $this->cpm = $cpm;
        $this->nurl = $nurl;
        $this->adm = $adm;
        $this->placementCode = $placementCode;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getBidId(): string
    {
        return $this->bidId;
    }

    /**
     * @return float
     */
    public function getCpm(): float
    {
        return $this->cpm;
    }

    /**
     * @return string
     */
    public function getNurl(): string
    {
        return $this->nurl;
    }

    /**
     * @return string
     */
    public function getAdm(): string
    {
        return $this->adm;
    }

    /**
     * @return string
     */
    public function getPlacementCode(): string
    {
        return $this->placementCode;
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