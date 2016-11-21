<?php
namespace DebugAnalyzer\Application\Factories\ResultsFactory;

use DebugAnalyzer\Application\Results\Bids\Bid;

/**
 * Class BidFactory
 * @package DebugAnalyzer\Application\Factories\ResultsFactory
 */
class BidFactory
{
    const H = 'h';
    const W = 'w';
    const PLACEMENT_CODE = 'placementCode';
    const ADM = 'adm';
    const NURL = 'nurl';
    const CPM = 'cpm';
    const BID_ID = 'bidId';

    /**
     * @param array $bidOptions
     * @return Bid
     */
    public static function buildBid(array $bidOptions):Bid
    {
        return new Bid(
            $bidOptions[self::BID_ID],
            $bidOptions[self::CPM],
            $bidOptions[self::NURL],
            $bidOptions[self::ADM],
            $bidOptions[self::PLACEMENT_CODE],
            $bidOptions[self::W],
            $bidOptions[self::H]
        );
    }
}