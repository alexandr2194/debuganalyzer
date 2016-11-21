<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories;

use DebugAnalyzer\Application\Events\GeneralDetails\Device;

/**
 * Class DeviceFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory\DetailsFactories
 */
class DeviceFactory
{
    const USER_AGENT = 'userAgent';
    const BROWSER = 'browser';
    const OS = 'os';
    const IS_MOBILE = 'isMobile';

    /**
     * @param array $deviceOptions
     * @return Device
     */
    public static function buildDevice(array $deviceOptions):Device
    {
        return new Device(
            $deviceOptions[self::USER_AGENT],
            $deviceOptions[self::BROWSER],
            $deviceOptions[self::OS],
            $deviceOptions[self::IS_MOBILE]
        );
    }
}