<?php
namespace DebugAnalyzer\Application\Events;

use DebugAnalyzer\Application\Events\GeneralDetails\VisitorProfile;
use DebugAnalyzer\Application\Factories\EventsFactory\AuctionRunEventDetailsFactory;

class AuctionRunEvent extends Event
{

    public function __construct(string $type, string $class, Timestamp $timestamp, array $details)
    {
        parent::__construct($type, $class, $timestamp, $details);
    }

    /**
     * @return VisitorProfile
     */
    public function getVisitorProfile():VisitorProfile
    {
        return $this->getDetailsByKey(AuctionRunEventDetailsFactory::VISITOR_PROFILE);
    }
}