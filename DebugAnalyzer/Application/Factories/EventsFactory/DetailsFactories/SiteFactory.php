<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories;

use DebugAnalyzer\Application\Events\GeneralDetails\Site;

/**
 * Class SiteFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories
 */
class SiteFactory
{
    const HOST = 'host';
    const PAGE = 'page';
    const IS_SECURE = 'isSecure';

    /**
     * @param array $siteOptions
     * @return Site
     */
    public static function buildSite(array $siteOptions):Site
    {
        return new Site($siteOptions[self::HOST], $siteOptions[self::PAGE], $siteOptions[self::IS_SECURE]);
    }
}