<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory;

use DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories\VisitorProfileFactory;

/**
 * Class AuctionRunEventDetailsFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory
 */
class AuctionRunEventDetailsFactory
{
    const VISITOR_PROFILE = 'visitorProfile';

    /**
     * @param array $auctionRunEventOptions
     * @return array
     */
    public static function buildDetails(array $auctionRunEventOptions):array
    {
        $details = [
            self::VISITOR_PROFILE => VisitorProfileFactory::buildVisitorProfile($auctionRunEventOptions[self::VISITOR_PROFILE])
        ];
        return new $details;
    }
}