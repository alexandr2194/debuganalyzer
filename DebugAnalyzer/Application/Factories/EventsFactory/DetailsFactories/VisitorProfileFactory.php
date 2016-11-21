<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories;

use DebugAnalyzer\Application\Events\GeneralDetails\VisitorProfile;

/**
 * Class VisitorProfileFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories
 */
class VisitorProfileFactory
{
    const SITE = 'site';
    const GEO_PROFILE = 'geoProfile';
    const UIDS = 'uids';
    const ACCEPT_LANGUAGE = 'acceptLanguage';
    const DEVICE = 'device';

    /**
     * @param array $visitorProfileOptions
     * @return VisitorProfile
     */
    public static function buildVisitorProfile(array $visitorProfileOptions):VisitorProfile
    {
        $site = SiteFactory::buildSite($visitorProfileOptions[self::SITE]);
        $geoProfile = GeoProfileFactory::buildGeoProfile($visitorProfileOptions[self::GEO_PROFILE]);
        $uids = $visitorProfileOptions[self::UIDS];
        $acceptLanguage = $visitorProfileOptions[self::ACCEPT_LANGUAGE];
        $device = DeviceFactory::buildDevice($visitorProfileOptions[self::DEVICE]);
        return new VisitorProfile($site, $geoProfile, $uids, $acceptLanguage, $device);
    }
}