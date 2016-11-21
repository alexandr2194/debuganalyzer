<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class Device
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class Device
{
    /**
     * @var string
     */
    private $userAgent;
    /**
     * @var string
     */
    private $browser;
    /**
     * @var string
     */
    private $os;
    /**
     * @var bool
     */
    private $isMobile;

    /**
     * Device constructor.
     * @param string $userAgent
     * @param string $browser
     * @param string $os
     * @param bool $isMobile
     */
    public function __construct(string $userAgent, string $browser, string $os, bool $isMobile)
    {
        $this->userAgent = $userAgent;
        $this->browser = $browser;
        $this->os = $os;
        $this->isMobile = $isMobile;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @return string
     */
    public function getBrowser(): string
    {
        return $this->browser;
    }

    /**
     * @return string
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * @return boolean
     */
    public function isIsMobile(): bool
    {
        return $this->isMobile;
    }
}