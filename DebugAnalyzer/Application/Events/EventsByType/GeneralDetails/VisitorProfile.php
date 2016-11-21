<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class VisitorProfile
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class VisitorProfile
{
    /**
     * @var Site
     */
    private $site;
    /**
     * @var GeoProfile
     */
    private $geoProfile;
    /**
     * @var array
     */
    private $uids;
    /**
     * @var string
     */
    private $acceptLanguage;
    /**
     * @var Device
     */
    private $device;

    /**
     * VisitorProfile constructor.
     * @param Site $site
     * @param GeoProfile $geoProfile
     * @param array $uids
     * @param string $acceptLanguage
     * @param Device $device
     */
    public function __construct(Site $site, GeoProfile $geoProfile, array $uids, string $acceptLanguage, Device $device)
    {
        $this->site = $site;
        $this->geoProfile = $geoProfile;
        $this->uids = $uids;
        $this->acceptLanguage = $acceptLanguage;
        $this->device = $device;
    }

    /**
     * @return Device
     */
    public function getDevice(): Device
    {
        return $this->device;
    }

    /**
     * @return string
     */
    public function getAcceptLanguage(): string
    {
        return $this->acceptLanguage;
    }

    /**
     * @return array
     */
    public function getUids(): array
    {
        return $this->uids;
    }

    /**
     * @return GeoProfile
     */
    public function getGeoProfile(): GeoProfile
    {
        return $this->geoProfile;
    }

    /**
     * @return Site
     */
    public function getSite(): Site
    {
        return $this->site;
    }
}