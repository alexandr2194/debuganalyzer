<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class Bid
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class Bid
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $impressionBeaconBuilder;
    /**
     * @var float
     */
    private $publisherCpm;
    /**
     * @var float
     */
    private $adNetworkCpm;
    /**
     * @var string
     */
    private $ad;
    /**
     * @var string
     */
    private $beacon;
    /**
     * @var Size
     */
    private $size;
    /**
     * @var string
     */
    private $placementCode;
    /**
     * @var string
     */
    private $adNetworkId;
    /**
     * @var string
     */
    private $adNetworkNurl;
    /**
     * @var PriceFloorExperiment
     */
    private $priceFloorExperiment;

    /**
     * Bid constructor.
     * @param string $id
     * @param string $impressionBeaconBuilder
     * @param float $publisherCpm
     * @param float $adNetworkCpm
     * @param string $ad
     * @param string $beacon
     * @param Size $size
     * @param string $placementCode
     * @param string $adNetworkId
     * @param string $adNetworkNurl
     * @param PriceFloorExperiment $priceFloorExperiment
     */
    public function __construct(
        string $id,
        string $impressionBeaconBuilder,
        float $publisherCpm,
        float $adNetworkCpm,
        string $ad,
        string $beacon,
        Size $size,
        string $placementCode,
        string $adNetworkId,
        string $adNetworkNurl,
        PriceFloorExperiment $priceFloorExperiment
    ) {
        $this->id = $id;
        $this->impressionBeaconBuilder = $impressionBeaconBuilder;
        $this->publisherCpm = $publisherCpm;
        $this->adNetworkCpm = $adNetworkCpm;
        $this->ad = $ad;
        $this->beacon = $beacon;
        $this->size = $size;
        $this->placementCode = $placementCode;
        $this->adNetworkId = $adNetworkId;
        $this->adNetworkNurl = $adNetworkNurl;
        $this->priceFloorExperiment = $priceFloorExperiment;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImpressionBeaconBuilder(): string
    {
        return $this->impressionBeaconBuilder;
    }

    /**
     * @return float
     */
    public function getPublisherCpm(): float
    {
        return $this->publisherCpm;
    }

    /**
     * @return float
     */
    public function getAdNetworkCpm(): float
    {
        return $this->adNetworkCpm;
    }

    /**
     * @return string
     */
    public function getAd(): string
    {
        return $this->ad;
    }

    /**
     * @return string
     */
    public function getBeacon(): string
    {
        return $this->beacon;
    }

    /**
     * @return Size
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getPlacementCode(): string
    {
        return $this->placementCode;
    }

    /**
     * @return string
     */
    public function getAdNetworkId(): string
    {
        return $this->adNetworkId;
    }

    /**
     * @return string
     */
    public function getAdNetworkNurl(): string
    {
        return $this->adNetworkNurl;
    }

    /**
     * @return PriceFloorExperiment
     */
    public function getPriceFloorExperiment(): PriceFloorExperiment
    {
        return $this->priceFloorExperiment;
    }
}