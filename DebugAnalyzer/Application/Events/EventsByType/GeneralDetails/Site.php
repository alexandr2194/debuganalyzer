<?php
namespace DebugAnalyzer\Application\Events\GeneralDetails;

/**
 * Class Site
 * @package DebugAnalyzer\Application\Events\GeneralDetails
 */
class Site
{
    /**
     * @var string
     */
    private $host;
    /**
     * @var string
     */
    private $page;
    /**
     * @var bool
     */
    private $isSecure;

    /**
     * Site constructor.
     * @param string $host
     * @param string $page
     * @param bool $isSecure
     */
    public function __construct(string $host, string $page, bool $isSecure)
    {
        $this->host = $host;
        $this->page = $page;
        $this->isSecure = $isSecure;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getPage(): string
    {
        return $this->page;
    }

    /**
     * @return boolean
     */
    public function isIsSecure(): bool
    {
        return $this->isSecure;
    }

}