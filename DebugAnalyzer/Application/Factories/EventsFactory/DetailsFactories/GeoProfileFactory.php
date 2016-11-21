<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories;

use DebugAnalyzer\Application\Events\GeneralDetails\GeoProfile;

/**
 * Class GeoProfileFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories
 */
class GeoProfileFactory
{
    const COUNTRY = 'country';
    const COUNTRY_3 = 'country3';
    const REGION = 'region';
    const IP = 'ip';

    /**
     * @param array $geoProfileOptions
     * @return GeoProfile
     */
    public static function buildGeoProfile(array $geoProfileOptions):GeoProfile
    {
        return new GeoProfile($geoProfileOptions[self::COUNTRY], $geoProfileOptions[self::COUNTRY_3],
            $geoProfileOptions[self::REGION], $geoProfileOptions[self::IP]);
    }
}