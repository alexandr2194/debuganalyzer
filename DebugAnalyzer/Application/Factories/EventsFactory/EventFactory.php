<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory;

use DebugAnalyzer\Application\Events;
use DebugAnalyzer\Application\Events\Event;
use Exception;

/**
 * Class EventFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory
 */
class EventFactory
{
    const TYPE = 'type';
    const DETAILS = 'details';
    const TIMESTAMP = 'timestamp';
    const EVENT_CLASS = 'eventClass';

    const AUCTION_RUN = "auction_run";
    const BID_REQUEST = "bid_request";
    const AD_NETWORK_BID_REQUEST = "ad_network_bid_request";
    const AD_NETWORK_BID_RESPONSE = "ad_network_bid_response";
    const BID_WIN = "bid_win";
    const EXPERIMENT_REQUEST = "experiment_request";

    /**
     * @param array $eventOptions
     * @return Events\Event
     * @throws Exception
     */
    public static function buildEvent(array $eventOptions):Event
    {
        switch ($eventOptions[self::TYPE]) {
            case self::AUCTION_RUN:
                $auctionRunEventDetails = AuctionRunEventDetailsFactory::buildDetails($eventOptions[self::DETAILS]);
                return new Events\AuctionRunEvent(
                    $eventOptions[self::TYPE],
                    $eventOptions[self::EVENT_CLASS],
                    $eventOptions[self::TIMESTAMP],
                    $auctionRunEventDetails
                );
            case self::BID_REQUEST:
                $bidRequestEventDetails = BidRequestEventDetailsFactory::builDetails($eventOptions[self::DETAILS]);
                return new Events\BidRequestEvent(
                    $eventOptions[self::TYPE],
                    $eventOptions[self::EVENT_CLASS],
                    $eventOptions[self::TIMESTAMP],
                    $bidRequestEventDetails
                );
            case self::AD_NETWORK_BID_REQUEST:
                $adNetworkBidRequestEventDetails = AdNetworkBidRequestEventDetailsFactory::builDetails($eventOptions[self::DETAILS]);
                return new Events\AdNetworkBidRequestEvent(
                    $eventOptions[self::TYPE],
                    $eventOptions[self::EVENT_CLASS],
                    $eventOptions[self::TIMESTAMP],
                    $adNetworkBidRequestEventDetails
                );
            case self::AD_NETWORK_BID_RESPONSE:
                $adNetworkBidResponseEventDetails = AdNetworkBidResponseEventDetailsFactory::builDetails($eventOptions[self::DETAILS]);
                return new Events\AdNetworkBidResponseEvent(
                    $eventOptions[self::TYPE],
                    $eventOptions[self::EVENT_CLASS],
                    $eventOptions[self::TIMESTAMP],
                    $adNetworkBidResponseEventDetails
                );
            case self::BID_WIN:
                $bidWinEventEventDetails = BidWinEventDetailsFactory::builDetails($eventOptions[self::DETAILS]);
                return new Events\BidWinEvent(
                    $eventOptions[self::TYPE],
                    $eventOptions[self::EVENT_CLASS],
                    $eventOptions[self::TIMESTAMP],
                    $bidWinEventEventDetails
                );
            case self::EXPERIMENT_REQUEST:
                $experimentRequestEventDetails = ExperimentRequestEventDetailsFactory::builDetails($eventOptions[self::DETAILS]);
                return new Events\ExperimentRequestEvent(
                    $eventOptions[self::TYPE],
                    $eventOptions[self::EVENT_CLASS],
                    $eventOptions[self::TIMESTAMP],
                    $experimentRequestEventDetails
                );
            default:
                throw new Exception(sprintf('Ивент с типом "%s" не найден!', $eventOptions[self::TYPE]));
        }
    }
}