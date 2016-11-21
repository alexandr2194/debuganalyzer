<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class BidRequest
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class BidRequest
{
    /**
     * @var string
     */
    private $bidId;
    /**
     * @var string
     */
    private $placeCode;
    /**
     * @var Size[]
     */
    private $sizes;
    /**
     * @var string
     */
    private $publisherId;
    /**
     * @var VisitorProfile
     */
    private $visitorProfile;

    /**
     * BidRequest constructor.
     * @param string $bidId
     * @param string $placeCode
     * @param Size[] $sizes
     * @param string $publisherId
     * @param VisitorProfile $visitorProfile
     */
    public function __construct(
        string $bidId,
        string $placeCode,
        array $sizes,
        string $publisherId,
        VisitorProfile $visitorProfile
    ) {
        $this->bidId = $bidId;
        $this->placeCode = $placeCode;
        $this->sizes = $sizes;
        $this->publisherId = $publisherId;
        $this->visitorProfile = $visitorProfile;
    }

    /**
     * @return string
     */
    public function getBidId(): string
    {
        return $this->bidId;
    }

    /**
     * @return string
     */
    public function getPlaceCode(): string
    {
        return $this->placeCode;
    }

    /**
     * @return Size[]
     */
    public function getSizes():array
    {
        return $this->sizes;
    }

    /**
     * @return string
     */
    public function getPublisherId(): string
    {
        return $this->publisherId;
    }

    /**
     * @return VisitorProfile
     */
    public function getVisitorProfile(): VisitorProfile
    {
        return $this->visitorProfile;
    }
}