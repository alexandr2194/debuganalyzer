<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class BidCollection
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class BidCollection
{
    /**
     * @var array|Bid[]
     */
    private $bids;

    /**
     * BidCollection constructor.
     * @param Bid[] $bids
     */
    public function __construct(array $bids)
    {
        $this->bids = $bids;
    }

    /**
     * @return Bid[]
     */
    public function getBids():array
    {
        return $this->bids;
    }

    /**
     * @return int
     */
    public function getCount():int
    {
        return count($this->bids);
    }
}