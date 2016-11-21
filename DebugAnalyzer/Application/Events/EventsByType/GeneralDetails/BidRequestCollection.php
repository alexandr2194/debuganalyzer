<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class BidRequestCollection
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class BidRequestCollection
{
    /**
     * @var BidRequest[]
     */
    private $bidRequests;

    /**
     * BidRequestCollection constructor.
     * @param BidRequest[] $bidRequests
     */
    public function __construct(array $bidRequests)
    {

        $this->bidRequests = $bidRequests;
    }

    /**
     * @return BidRequest[]
     */
    public function getBidRequests(): array
    {
        return $this->bidRequests;
    }
}