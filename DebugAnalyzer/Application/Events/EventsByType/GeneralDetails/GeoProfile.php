<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class GeoProfile
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class GeoProfile
{
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $country3;
    /**
     * @var string
     */
    private $region;
    /**
     * @var string
     */
    private $ip;

    /**
     * GeoProfile constructor.
     * @param string $country
     * @param string $country3
     * @param string $region
     * @param string $ip
     */
    public function __construct(string $country, string $country3, string $region, string $ip)
    {
        $this->country = $country;
        $this->country3 = $country3;
        $this->region = $region;
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCountry3(): string
    {
        return $this->country3;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
}