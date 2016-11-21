<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class PriceFloorExperiment
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class PriceFloorExperiment
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $price;
    /**
     * @var array
     */
    private $hosts;
    /**
     * @var array
     */
    private $countries;
    /**
     * @var array
     */
    private $browsers;
    /**
     * @var array
     */
    private $os;
    /**
     * @var array
     */
    private $sizes;
    /**
     * @var bool
     */
    private $isActive;

    /**
     * PriceFloorExperiment constructor.
     * @param string $id
     * @param string $name
     * @param int $price
     * @param array $hosts
     * @param array $countries
     * @param array $browsers
     * @param array $os
     * @param array $sizes
     * @param bool $isActive
     */
    public function __construct(
        string $id,
        string $name,
        int $price,
        array $hosts,
        array $countries,
        array $browsers,
        array $os,
        array $sizes,
        bool $isActive
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->hosts = $hosts;
        $this->countries = $countries;
        $this->browsers = $browsers;
        $this->os = $os;
        $this->sizes = $sizes;
        $this->isActive = $isActive;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getHosts(): array
    {
        return $this->hosts;
    }

    /**
     * @return array
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @return array
     */
    public function getBrowsers(): array
    {
        return $this->browsers;
    }

    /**
     * @return array
     */
    public function getOs(): array
    {
        return $this->os;
    }

    /**
     * @return array
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }

    /**
     * @return boolean
     */
    public function isIsActive(): bool
    {
        return $this->isActive;
    }
}